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
        echo "masuk ke function ini";
    }

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */