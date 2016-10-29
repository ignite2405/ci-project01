<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['main_view']="register";

        $this->load->view('layouts/main', $data);
	}

	/*public function alvin()
	{
		echo "lalalala";
	}*/

    public function register()
    {
        $this->load->view('register');
    }

    public function do_register()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[12]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('errors', validation_errors());
            redirect('/home/register','refresh');
        } else {
            $username=$this->input->post('username');
            $password=$this->input->post('password');

            $data = array(
            	'username' => $username,
            	'password' => $password
            );

            $this->db->trans_begin();

            $this->load->model('homes');
            $this->homes->insert_new_username($data);

            $this->db->trans_commit();

            $this->session->set_flashdata('success', 'berhasil save data');
            redirect('home/register', 'refresh');
        }
    }

    public function viewLogin()
    {
        $this->load->view('users/login');
    }

    public function do_login()
    {

        $username = $this->input->post('username');
        $password = $this->input->post('password');

        // $sql = "SELECT * FROM users";
        // $results = $this->db->query($sql)->result();

        // foreach ($results as $result) {
        //     if ($result->username == $username && $result->password == $password) {
        //         echo "data valid";
        //         break;
        //     } else {
        //         echo "data tidak valid";
        //     }
        // }

        $sql = "SELECT * FROM users where username = ? and password = ?";
        // $sql = "SELECT * from users where username = ".$username." and";
        $results = $this->db->query($sql, array($username, $password))->result();

        if (count($results) > 0) var_dump($results);


    }

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */