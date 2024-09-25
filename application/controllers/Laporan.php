<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Laporan_model');
        $this->load->library('pagination'); 
    }

    public function index() {
        $config = array();
        $config['base_url'] = base_url('apkpinjam');
        $config['total_rows'] = $this->Laporan_model->get_count();
        $config['per_page'] = 10; 
        $config['uri_segment'] = 3; 
        $config['full_tag_open'] = '<ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul>';
        $config['attributes'] = ['class' => 'page-link'];
        $config['first_link'] = 'First';
        $config['last_link'] = 'Last';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $data['laporan'] = $this->Laporan_model->get_laporan($config['per_page'], $page);

        $data['pagination'] = $this->pagination->create_links();

        $this->load->view('laporan', $data);
    }

    public function search() {
        $keyword = $this->input->post('search-input');
        $data['laporan'] = $this->Laporan_model->search_laporan($keyword);
        $this->load->view('laporan', $data);
    }

    public function filter() {
        $start_date = $this->input->post('start_date');
        $end_date = $this->input->post('end_date');
    
        $data['laporan'] = $this->Laporan_model->filter_laporan_by_date($start_date, $end_date);
    
        $this->load->view('laporan', $data);
    }

    public function cetak_pdf() {

        $this->load->library('dompdf_gen');
    
        $data['laporan'] = $this->Laporan_model->get_all_laporan();
    
        $this->load->view('laporan_pdf', $data);
    
        $paper_size = 'A4'; 
        $orientation = 'landscape'; 
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->render();
        $this->dompdf->stream("laporan_peminjaman.pdf", array('Attachment' => 0));
    }
    
    
}
