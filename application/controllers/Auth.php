<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('auth_model');
    }

    public function login() {
        $this->load->view('login');
    }
    public function register() {
        $this->load->view('register');
    }
    

    public function login_process() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        if ($this->auth_model->check_user($username, $password)) {
            $this->session->set_userdata('logged_in', TRUE);
            redirect('dashboard');
        } else {
            $this->session->set_flashdata('error', 'Username atau password salah.');
            redirect('auth/login');
        }
    }

    public function register_process() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        if ($this->auth_model->register_user($username, $password)) {
            $this->session->set_flashdata('success', 'Registrasi berhasil, silakan login.');
            redirect('auth/login');
        } else {
            $this->session->set_flashdata('error', 'Username sudah terdaftar, gunakan username lain.');
            redirect('auth/register');
        }
    }
    

    public function forgot_password() {
        $this->load->view('forgot_password');
    }

    public function reset_password_process() {
        $email = $this->input->post('email');
        redirect('auth/login');
    }

    public function logout() {
        $this->session->unset_userdata('logged_in');
        redirect('auth/login');
    }
    
}
