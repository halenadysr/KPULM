<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load model untuk interaksi dengan database
        $this->load->model('User_model');
        // Load library form validation dan session
        $this->load->library('form_validation');
        $this->load->library('session');
        // Load helper form
        $this->load->helper('form');
        $this->load->helper('url');
    }

    public function index() {
        // Tampilkan halaman login
        $this->load->view('login2');
    }

    public function auth() {
        // Set aturan validasi untuk input username dan password
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            // Jika validasi gagal, tampilkan kembali halaman login dengan pesan error
            $this->load->view('login2');
        } else {
            // Ambil data dari input form
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            // Cek pengguna di database melalui model
            $user = $this->User_model->get_user_by_username($username);

            if ($user && password_verify($password, $user->password)) {
                // Jika username dan password cocok, buat sesi login
                $this->session->set_userdata('logged_in', true);
                $this->session->set_userdata('username', $user->username);
                $this->session->set_userdata('id_user', $user->id_user);

                // Redirect ke halaman dashboard atau halaman lain setelah login berhasil
                redirect('dashboard');
            } else {
                // Jika login gagal, tampilkan pesan error
                $this->session->set_flashdata('error', 'Username atau password salah');
                $this->load->view('login2');
            }
        }
    }

    public function logout() {
        $this->session->unset_userdata('username');
        // Hapus semua sesi login
        $this->session->sess_destroy();
        // Redirect ke halaman login
        redirect('login');
    }
}
