<?php
class Aset_model extends CI_Model {

    public function getAllBarang() {
        // Mengambil semua data dari tabel 'data_barang'
        $query = $this->db->get('data_barang');  // Menggunakan nama tabel yang benar 'data_barang'
        return $query->result_array();
    }
}
