<?php
class Aset_model extends CI_Model {

    public function getAllBarang() {
        $query = $this->db->get('data_barang'); 
        return $query->result_array();
    }
}
