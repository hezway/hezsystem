<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->view('home');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */