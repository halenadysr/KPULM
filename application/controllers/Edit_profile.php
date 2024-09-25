<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_profile extends CI_Controller {

    public function index()
    {
        $this->load->view('edit_profile');
    }

    public function update()
    {
        $name = $this->input->post('namaa');
        $gender = $this->input->post('Jenis Kelamin');
        $phone = $this->input->post('Unit');
        $unit = $this->input->post('No Hanphone');
        $nip = $this->input->post('nip');
        redirect('editprofile');
    }
}
