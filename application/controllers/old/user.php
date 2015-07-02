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
        redirect("https://passport.dding.net/sign?redirect_uri=".site_url('/user/login'));
    }

    public function login()
    {
        $access_token = get_cookie('access_token');
        if (empty($access_token)) {
            redirect("https://passport.dding.net/login?redirect_uri=".site_url('/user/login'));
        }
        
        $dot_pos = strpos($access_token, '.');
        $access_token = substr($access_token, 2, $dot_pos-2);
        if (empty($access_token)) {
            redirect('/opinion');
        }
        
        $this->load->library('curl_client');
        $curl_client = &$this->curl_client;
        $curl_client instanceof Curl_client;
        $url = 'https://passport.dding.net/check_self_accesstoken';
        $params = array('access_token' => $access_token);
        $response = $curl_client->call($url, $curl_client::HTTP_POST, $params);
        if ($response['httpcode'] != 200 || empty($response['content'])) {
            redirect('/opinion');
        }
        
        $content = json_decode($response['content'], true);
        if ($content['ErrNo'] != 0 || empty($content['UserName'])) {
            redirect('/opinion');
        }

        $this->load->model('user_model');
        $user_model = &$this->user_model;
        $user_model instanceof User_model;
        $user_info = $user_model->get_user(array('mobile' => $content['UserName']));
        if (empty($user_info)) {
            $user_model->insert_user(array('mobile' => $content['UserName'], 'photo' => '/uploads/avatar.png'));
            $user_info = $user_model->get_user(array('mobile' => $content['UserName']));
        }
        
        if (!isset($user_info['id'])) {
            redirect('/opinion');
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

        redirect('/opinion/personal');
    }

    public function logout() {
        $this->session->sess_destroy();
        delete_cookie('access_token', '.dding.net');
        redirect('/opinion');
    }

}

