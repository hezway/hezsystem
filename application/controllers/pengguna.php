<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of pengguna
 *
 * @author blackant999
 */
class pengguna extends CI_Controller{
    //put your code here
    function __construct() {
        parent::__construct();   
        $this->load->helper(array('form'));
        $this->load->model('model_hci');
        $this->load->library('session');
    }
    
    function index(){
        $this->load->view('pengguna');
    }
    
    function pinjam($id_buku, $judul_buku){
        $this->model_hci->pinjam($id_buku,$this->session->userdata('id_user'));
        $data['data_table']=$this->model_hci->searchBuku($judul_buku);
        $data['judul_buku']=$this->input->post('judul_buku');
        $this->load->view('pengguna',$data);
    }
    
    function search(){
        $data['data_table']=$this->model_hci->searchBuku($this->input->post('judul_buku'));
        $data['judul_buku']=$this->input->post('judul_buku');
        $this->load->view('pengguna',$data);
    }
    
}

?>
