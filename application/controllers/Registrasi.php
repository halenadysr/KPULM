<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('form_validation');
        $this->load->helper('form');
    }

    public function index() {
        // Tampilkan halaman registrasi
        $this->load->view('register2'); 
    }

    public function getUser() {
        // Validasi input dari form
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('password2', 'Konfirmasi Password', 'required|matches[password]');

        if ($this->form_validation->run() == TRUE) {
            $this->session->set_flashdata('success', 'Registrasi berhasil! Silakan login.');
            // Jika validasi berhasil, simpan data ke database
            $data = [
                'username' => $this->input->post('username'),
                'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT) // Hash password
            ];

            $this->User_model->insert_user($data); // Simpan data ke database

            // Redirect ke halaman login setelah registrasi berhasil
            redirect('Login');
        } else {
            // Jika validasi gagal, tampilkan ulang halaman registrasi
            $this->load->view('register2');
        }
    }
}
