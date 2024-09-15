<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model'); // Load User_model
        $this->load->library('session');  // Load session
        $this->load->helper('url');       // Load URL helper
        $this->load->helper('form');      // Load form helper
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
        $this->load->library('session');
        $this->session->set_userdata('username', FALSE);
        $this->session->sess_destroy();
        redirect('login');
    }
}