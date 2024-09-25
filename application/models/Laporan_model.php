<?php
class Laporan_model extends CI_Model {

    public function get_count() {
        return $this->db->count_all('laporan');
    }

    public function get_laporan($limit, $offset) {
        $this->db->limit($limit, $offset);
        $query = $this->db->get('laporan');
        return $query->result_array();
    }

    public function search_laporan($keyword) {
        $this->db->like('nama_barang', $keyword);
        $this->db->or_like('tanggal_peminjam', $keyword);
        $query = $this->db->get('laporan');
        return $query->result_array();
    }

    public function filter_laporan_by_date($start_date, $end_date) {
        $this->db->where('Tanggal >=', $start_date);
        $this->db->where('Tanggal <=', $end_date);
        $query = $this->db->get('laporan');
        return $query->result_array();
    }
    
}
