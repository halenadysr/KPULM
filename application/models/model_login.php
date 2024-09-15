<?php
defined("BASEPATH") or exit("No direct script access allowed");

class Model_login extends CI_Model {

    public function ambillogin($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('login');
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $sess = array('username' => $row->username,
                'password' => $row->password
                );
            }
            $this->session->get_userdata($sess);
            redirect('welcome');
        } else {
            $this->session->set_flashdata('info','No user found with that username & Invalid Password');
            redirect('login');
        }
    }
    
    public function keamanan() {
        $username = $this->session->sess_destroy('username');
        if(!empty($username)) {
            $this->session->sess_destroy();
            redirect('login');
        }
    }
}