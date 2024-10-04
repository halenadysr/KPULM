<?php 

class Profil extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Profil_model');
        $this->load->library('form_validation');
    }

    public function edit() {
        $data['judul'] = 'Profil';
        //ambil data profil berdasarkan user yang login (misalnya berdasarkan id user)
        $id_user = $this->session->userdata('id_user');
        $data['profil'] = $this->Profil_model->getProfilById($id_user);

        //ambil data unit dari model
        $this->load->model('Unit_model');
        $data['units'] = $this->Unit_model->getAllUnit();

        // Jika data profil belum ada, buat data profil kosong untuk pertama kali
        if (empty($data['profil'])) {
            // Inisialisasi data kosong untuk pertama kali
            $data['profil'] = (object) array(
                'nama' => '',
                'unit' => '',
                'nip' => '',
                'jk_user' => '',
                'no_hp' => ''
            );
        }

        $this->load->view('templates/header', $data);
        $this->load->view('profil/index', $data);
        $this->load->view('templates/footer');
    }

    public function update() {
        $id_user = $this->session->userdata('id_user');
        //validasi form input
        $this->form_validation->set_rules('name', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('unit', 'Unit', 'required');
        $this->form_validation->set_rules('nip', 'NIP', 'required');
        $this->form_validation->set_rules('gender', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('phone', 'No. HP', 'required|numeric');

        //jika validasi gagal
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', 'Gagal memperbarui profil. Pastikan semua kolom terisi dengan benar.');
            redirect('profil/edit');
        } else {
            //ambil data dari form
            $data = array(
                'nama'      => $this->input->post('name'),
                'unit'      => $this->input->post('unit'),
                'nip'       => $this->input->post('nip'),
                'jk_user'    => $this->input->post('gender'),
                'no_hp'     => $this->input->post('phone'),
                'id_user'   => $id_user
            );

            // Cek apakah profil sudah ada
            if ($this->Profil_model->getProfilById($id_user)) {
                // Jika sudah ada, update data profil
                $update = $this->Profil_model->updateProfil($id_user, $data);
            } else {
                // Jika belum ada, insert data baru
                $data['id_user'] = $id_user;
                $update = $this->Profil_model->insertProfil($data);
            }

            if ($update) {
                $this->session->set_flashdata('success', 'Profil berhasil diperbarui.');
            } else {
                $this->session->set_flashdata('error', 'Gagal memperbarui profil.');
            }

            redirect('profil/edit');
        }
    }
}