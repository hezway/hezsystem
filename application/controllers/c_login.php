<?php

if (!defined('BASEPATH'))
   exit('No direct script access allowed');

class C_login extends CI_Controller {

   public function __construct() {
      parent::__construct();
      // Your own constructor code
   }

   public function index() {
      $this->load->library('input');
      $this->load->helper('url');
      $this->load->helper('form');

      $this->load->view('login');
      
   }

   public function process_login() 
	{
		$this->load->library('form_validation');
		$this->load->helper('url');
		$this->load->model('m_login');
		
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		
		if ($this->form_validation->run() == TRUE)
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$user=$this->m_login->check_user($username, $password);
			if ( $user == TRUE)
			{
				$data = array('username' => $username, 'login' => TRUE, 'id_user'=>$user->id_user);
				$this->session->set_userdata($data);
        
                $permission = $this->m_login->get_user_permission($this->input->post('username'), $this->input->post('password'));
					if($permission != FALSE)
					{
						if($permission->level == 1)
						{
                                                    $this->session->set_userdata('permission',1);
							redirect('home');
						}
						else if($permission->level == 2)
						{
                                                    $this->session->set_userdata('permission',2);
							redirect('pengguna');
						}
                    }
			} 
                        
			else 
			{
				$this->session->set_flashdata('message', '<blink><b>Username atau Password <u><i>ANDA SALAH</i></u>, silakan dicoba lagi!!</b> </blink>');
				redirect('logout');
			}
		}
                else 
		{
                    $this->session->set_flashdata('message', '<blink><b> Username atau Password <u><i>KOSONG</i></u>, silakan dicoba lagi!!</b></blink> ');
                    $redirect = redirect('logout');
		}
	}

   public function logout() {
       $this->load->helper('url');
      $this->session->sess_destroy();
      redirect('c_login');
   }
   

}

/* End of file Login.php */
/* Location: ./application/controllers/login.php */