<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kembali extends CI_Controller {

	function __construct() {
            parent::__construct();
            
		$this->load->helper('form');
		$this->load->helper('url');
                $this->load->model('model_hci');
        }
        
	public function index()
	{
		$this->load->view('kembali');
	}
        function kembalikan(){
            $data['msg']=$this->model_hci->kembalikanbuku($this->input->post('id_user'),$this->input->post('id_buku'));
            $this->load->view('kembali',$data);
        }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */