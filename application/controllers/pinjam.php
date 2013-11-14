<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pinjam extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('form');
		$this->load->helper('url');
                $this->load->model('model_hci');
    }

    public function index()
	{
		$data['data_table']=$this->model_hci->daftarWaiting();
		$this->load->view('pinjam',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */