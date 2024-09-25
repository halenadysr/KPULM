<?php
class Auth_model extends CI_Model {

    public function check_user($username, $password) {
        $this->db->where('username', $username);
        $query = $this->db->get('login');

        if ($query->num_rows() > 0) {
            $user = $query->row();

            if (password_verify($password, $user->password)) {
                $this->session->set_userdata('user', $user);
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function register_user($username, $password) {
        $this->db->where('username', $username);
        $query = $this->db->get('login');

        if ($query->num_rows() > 0) {
            return false;
        } else {
            $data = array(
                'username' => $username,
                'password' => password_hash($password, PASSWORD_BCRYPT)
            );
            return $this->db->insert('login', $data);
        }
    }
}
