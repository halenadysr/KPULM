<?php 

class Asset extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Asset_model');
    }

    public function index() {
        $data['judul'] = 'Asset ICT';
        $data['aset'] = $this->Asset_model->tampil_data()->result();

        $this->load->model('Profil_model');
        $id_user = $this->session->userdata('id_user');
        $data['profil'] = $this->Profil_model->getProfilById($id_user);

        if( $this->input->post('keyword')) {
            $data['aset'] = $this->Asset_model->cariDataAset();
        }

        $this->load->view('templates/header', $data);
        $this->load->view('asset/index', $data);
        $this->load->view('templates/footer');
    }
}