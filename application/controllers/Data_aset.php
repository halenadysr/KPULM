<?php
class Data_aset extends CI_Controller {

    public function index() {
        // Muat model Aset_model
        $this->load->model('Aset_model');

        // Ambil data dari model
        $data['data_aset'] = $this->Aset_model->getAllBarang();  // Panggil fungsi getAllBarang dari model

        // Kirim data ke view
        $this->load->view('data_aset', $data);  // Kirim data ke view tanpa vars:
    }
}
