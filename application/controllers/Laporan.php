<?php 

class Laporan extends CI_Controller {
    // public function __construct() {
    //     parent::__construct();
    //     $this->load->model('Asset_model');
    // }

    public function index() {
        $data['judul'] = 'Laporan';
        // $data['asset'] = $this->Asset_model->getAllAsset();
        $this->load->view('templates/header', $data);
        $this->load->view('laporan/index');
        $this->load->view('templates/footer');
    }
}