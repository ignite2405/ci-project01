<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		echo "this is index";
	}

	public function alvin()
	{
		echo "lalalala";
	}

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
            # code...
        }
    }

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */