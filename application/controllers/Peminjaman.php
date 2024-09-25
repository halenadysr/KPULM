<?php
class Peminjaman extends CI_Controller {
    public function index() {
        $this->load->model('Peminjaman_model');
        $data['peminjaman'] = $this->Peminjaman_model->get_all_peminjaman();
        $this->load->view('peminjaman', $data);
    }
}
