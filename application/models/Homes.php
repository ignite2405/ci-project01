<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homes extends CI_Model {

    public function insert_new_username($data)
    {
        // akan menghasilkan
        // INSERT INTO users('username', 'password') VALUES ('....', '.....')
        $this->db->insert('users', $data);
    }

    public function pulldata($username, $password)
    {
    	// $this->db->select("username, password");
    	// select username,password from users
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('users');
    	return $query->result()[0];
    }

}

/* End of file Homes.php */
/* Location: ./application/models/Homes.php */