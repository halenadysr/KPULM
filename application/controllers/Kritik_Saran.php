<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kritik_Saran extends CI_Controller {
    public function index() {
        $this->load->view('kritik_saran');
    }
}
