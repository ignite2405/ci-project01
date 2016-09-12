<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homes extends CI_Model {

    public function insert_new_username($data)
    {
        // akan menghasilkan
        // INSERT INTO users('username', 'password') VALUES ('....', '.....')
        $this->db->insert('users', $data);
    }

}

/* End of file Homes.php */
/* Location: ./application/models/Homes.php */