<?php 

class Dashboard extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Asset_model');
    }
    
    public function index() {
        $data['judul'] = 'Dashboard';

        $data['aset'] = $this->Asset_model->tampil_data()->result();
        $data['jumlah_aset'] = $this->Asset_model->get_jumlah_aset();

        $this->load->model('Profil_model');
        $id_user = $this->session->userdata('id_user');
        $data['profil'] = $this->Profil_model->getProfilById($id_user);
        
        $this->load->view('templates/header', $data);
        $this->load->view('dashboard/index', $data);
        $this->load->view('templates/footer');
    }

    public function detail($id) {
        $data['aset'] = $this->Asset_model->get_asset_by_id($id_barang);

        if ($this->input->is_ajax_request()) {
            echo json_encode($data['aset']);
        } else {
            // Jika tidak menggunakan AJAX, bisa menampilkan detail di halaman baru
            $this->load->view('dashboard/detail', $data);
        }
    }
}