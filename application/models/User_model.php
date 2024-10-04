<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        // Load database
        $this->load->database();
    }

    // Fungsi untuk menyimpan pengguna baru ke database
    public function insert_user($data) {
        return $this->db->insert('user', $data); // 'users' adalah nama tabel di database
    }

    public function get_user_by_username($username) {
        $this->db->where('username', $username);
        $query = $this->db->get('user'); // 'users' adalah nama tabel pengguna di database
        return $query->row(); // Mengembalikan satu baris hasil query
    }

}