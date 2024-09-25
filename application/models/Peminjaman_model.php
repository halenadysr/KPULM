<?php
class Peminjaman_model extends CI_Model {
    public function get_all_peminjaman() {
        $query = $this->db->get('transaksi');
        return $query->result_array();
    }
}
