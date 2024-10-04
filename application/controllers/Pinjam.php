<?php 

class Pinjam extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Pinjam_model');
        $this->load->model('Asset_model');
    }

    public function index(){
        $data['judul'] = 'Peminjaman';

        $user = $this->session->userdata('id_user');
        $data['transaksi'] = $this->db->query("SELECT * FROM transaksi tr,
        data_barang br, profil pr WHERE tr.id_barang=br.id_barang AND tr.id_user=pr.id_user
        AND tr.id_user= '$user' ORDER BY id_transaksi DESC")->result();

        if( $this->input->post('keyword')) {
            $data['transaksi'] = $this->Pinjam_model->cariDataTrans();
        }

        $this->load->view('templates/header', $data);
        $this->load->view('peminjaman/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_pinjam($id) {
        $id_user     = $this->session->userdata('id_user');
        $id_barang   = $this->input->post('id_barang');
        $barang      = $this->input->post('barang');
        $tgl_pinjam  = $this->input->post('tgl_pinjam');
        $tgl_kembali = $this->input->post('tgl_kembali');
        $denda       = $this->input->post('denda');

        $data = array(
            'id_user'               => $id_user,
            'id_barang'             => $id_barang,
            'nama_barang'           => $barang,
            'tgl_pinjam'            => $tgl_pinjam,
            'tgl_kembali'           => $tgl_kembali,
            'denda'                 => $denda,
            'status_pinjam'         => 'Diproses',
            'tgl_pengembalian'      => '-',
            'status_pengembalian'   => 'Belum selesai',
            'status_barang'         => 'Dipinjam',
            'foto_pinjam'           => '-',
            'foto_kembali'          => '-'
        );

        $this->Pinjam_model->tambah_data($data, 'transaksi');

        $status = array(
            'status' => '0'
        );

        $id = array(
            'id_barang' =>$id_barang
        );

        $this->Asset_model->update_data('data_barang', $status, $id);

        $this->session->set_flashdata('success', 'Peminjaman berhasil diproses!<br>Silakan cek status transaksi Anda di halaman peminjaman.');
        redirect ('pinjam/index');
    }
}