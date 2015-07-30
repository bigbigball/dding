<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apartment extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('user_model');
        $this->load->helper(array('form', 'url'));
        $this->load->library('session');
        $this->load->library ( 'avatarlib' );
        $this->load->library('detect');

        $ci = & get_instance();
        $variable = array('solution'=> true, 'haction'=>'apartment','titles'=>'公寓门锁-丁盯官网');
        $ci->load->vars($variable);
    }

    public function index()
    {
        $user_id = $this->session->userdata('user_id');
        $info = $this->user_model->get_user(array('id' => $user_id));
        $output['info'] = $info;

        $this->load->library('detect');
        $device = $this->detect->is_mobile() ? 'mobile' : 'pc';

        if ($device == 'pc') {
            $this->load->view('pc/apartment', $output);
        } else {
            $this->load->view('m/apartment', $output);
        }

    }
}
