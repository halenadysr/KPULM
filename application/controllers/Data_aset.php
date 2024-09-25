<?php
class Data_aset extends CI_Controller {

    public function index() {
        $this->load->model('Aset_model');
        $data['data_aset'] = $this->Aset_model->getAllBarang();  // Panggil fungsi getAllBarang dari model
        $this->load->view('data_aset', $data);  // Kirim data ke view tanpa vars:
    }
}
