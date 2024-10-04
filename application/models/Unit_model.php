<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Unit_model extends CI_Model {
    public function getAllUnit() {
        $query = $this->db->get('unit');
        return $query->result();
    }

}