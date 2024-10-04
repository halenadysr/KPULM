<?php 

class Asset_model extends CI_model {
    public function tampil_data() {
       return $this->db->get('data_barang');
    }

    public function get_jumlah_aset() {
        return $this->db->count_all('data_barang');
    }

    public function get_asset_by_id($id) {
        $this->db->where('id_barang', $id);
        $query = $this->db->get('data_barang');
        return $query->row();
    }

    public function cariDataAset() {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama', $keyword);
        $this->db->or_like('merek', $keyword);
        $this->db->or_like('warna', $keyword);
        return $this->db->get('data_barang')->result();
    }

    public function update_data($tabel, $data, $where) {
        $this->db->where($where);
        return $this->db->update($tabel, $data);
    }
}