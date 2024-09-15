<?php
defined("BASEPATH") OR exit("No direct script access allowed");

/**
 * @property Login $session
 */ 
class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session'); 
    }

    public function index()
    {
        $this->load->view('login_view');
    }

    public function ceklogin() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $this->load->model('model_login');
        $this->model_login->ambillogin($username, $password);
    }
    
    public function logout() {
        $this->session->set_userdata('username', FALSE);
        $this->session->sess_destroy();
        redirect('login');
    }
}