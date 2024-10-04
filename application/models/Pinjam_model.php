<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pinjam_model extends CI_Model {

    public function tambah_data($data, $tabel) {
        return $this->db->insert($tabel, $data);
    }

    public function cariDataTrans() {
        $keyword = $this->input->post('keyword', true);

        // Query untuk mencari data transaksi berdasarkan nama barang atau nama peminjam
        $this->db->select('transaksi.*, data_barang.nama as nama_barang');
        $this->db->from('transaksi');
        $this->db->join('data_barang', 'transaksi.id_barang = data_barang.id_barang');
        $this->db->join('profil', 'transaksi.id_user = profil.id_user');
        $this->db->like('data_barang.nama', $keyword);
        $this->db->order_by('transaksi.id_transaksi', 'DESC');
        
        // Eksekusi query dan kembalikan hasilnya
        return $this->db->get()->result();
    }

}