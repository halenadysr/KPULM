<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil_model extends CI_Model {
    
    //ambil data profil berdasarkan id user
    public function getProfilById($id_user) {
        $this->db->where('id_user', $id_user);
        return $this->db->get('profil')->row();
    }

    //update data profil
    public function updateProfil($id_user, $data) {
        $this->db->where('id_user', $id_user);
        return $this->db->update('profil', $data);
    }

    //insert data profil baru
    public function insertProfil($data) {
        //memasukkan data profil baru
        return $this->db->insert('profil', $data);
    }
}