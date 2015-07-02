<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('cookie', 'url'));
        $this->load->library('session');
    }

    public function sign() {
        redirect("https://passport.dding.net/sign?from=2&redirect_uri=".site_url('pc/user/login'));
    }

    public function login()
    {
        $access_token = get_cookie('access_token');
        if (empty($access_token)) {
            redirect("https://passport.dding.net/login?from=2&redirect_uri=".site_url('pc/user/login'));
        }
        
        $dot_pos = strpos($access_token, '.');
        $access_token = substr($access_token, 2, $dot_pos-2);
        if (empty($access_token)) {
            redirect('pc/opinion');
        }
        
        $this->load->library('curl_client');
        $curl_client = &$this->curl_client;
        $curl_client instanceof Curl_client;
        //$url = 'https://passport.dding.net/check_self_accesstoken?from=2';
        $url = 'https://passport.dding.net/check_dding_accesstoken?from=2';
        $params = array('access_token' => $access_token);
        $response = $curl_client->call($url, $curl_client::HTTP_POST, $params);
        if ($response['httpcode'] != 200 || empty($response['content'])) {
            redirect('pc/opinion');
        }
        
        $content = json_decode($response['content'], true);
        if ($content['ErrNo'] != 0 || empty($content['UserName'])) {
            redirect('pc/opinion');
        }

        $this->load->model('user_model');
        $user_model = &$this->user_model;
        $user_model instanceof User_model;
        $user_info = $user_model->get_user(array('mobile' => $content['UserName']));
        if (empty($user_info)) {
            $user_model->insert_user(array('mobile' => $content['UserName']));
            $user_info = $user_model->get_user(array('mobile' => $content['UserName']));
        }
        if (!isset($user_info['id'])) {
            redirect('pc/opinion');
        }
        
        $session = $this->session;
        $session instanceof CI_Session;
        $session->set_userdata('user_id', $user_info['id']);
        $session->set_userdata('user_name', $user_info['user_name']);
        $session->set_userdata('nick_name', $user_info['nick_name']);
        $session->set_userdata('mobile', $user_info['mobile']);
        $session->set_userdata('photo', $user_info['photo']);
        $session->set_userdata('integral', $user_info['integral']);
        $session->set_userdata('is_leader', $user_info['is_leader']);

        // get lock list
        $url = 'http://115.28.141.204:4089/user_device_list';
        $url = 'http://device-gate-2c.dding.net:3000/user_device_list';
        $url = 'http://115.28.166.184:3000/user_device_list';
        $sign = "{$user_info['mobile']}:{$access_token}:/user_device_list";
        $params = array(
            'AccessToken' => $access_token,
            'Sign' => md5($sign),
            'from' => 2,
        );
        $response = $curl_client->call($url, $curl_client::HTTP_GET, $params);
        if ($response['httpcode'] == 200 && !empty($response['content'])) {
            $content = json_decode($response['content'], true);
            $device_type = isset($content['devieces']['deviceinfo']['device_type']) ? $content['devieces']['deviceinfo']['device_type'] : '';
            if ($device_type == '102001001000') {
            	$session->set_userdata('passwordLock', 1);
            } else if ($device_type == '102001004000') {
            	$session->set_userdata('fingerprintLock', 1);
            }
        }
        
        // get menci list
        $url = 'http://115.28.141.204:4089/device_list_total';
        $url = 'http://114.215.146.228:80/device_list_total';
        $sign = "{$user_info['mobile']}:{$access_token}:/device_list_total";
        $params = array(
            'AccessToken' => $access_token,
            'Sign' => md5($sign),
            'from' => 2,
        );
        $response = $curl_client->call($url, $curl_client::HTTP_GET, $params);
        if ($response['httpcode'] == 200 && !empty($response['content'])) {
            $content = json_decode($response['content'], true);
            if (isset($content['master_devices'][0]['DeviceID'])) {
            	$session->set_userdata('menci', 1);
            }
        }

        redirect('pc/opinion/personal');
    }

    public function logout() {
        $this->session->sess_destroy();
        delete_cookie('access_token', '.dding.net');
        redirect('pc/opinion');
    }

}

