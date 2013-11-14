<?php

class Buku extends CI_Controller
{
    
    function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('model_hci');
    }
        
    function index(){ 
        $this->load->view('tambah');
    }

    function tambah(){
        $data = array(
        'judul_buku' => $this->input->post('judul_buku'),
        'nama_penulis' => $this->input->post('nama_penulis'),
        'id_buku' => $this->input->post('id_buku'),
        'tahun_terbit' => $this->input->post('tahun_terbit'),
        'status' => $this->input->post('status'));
        $this->load->model('modeltambah');
        $this->modeltambah->dimasukan($data);
        $msg['sukses']="Data Buku Berhasil Ditambahkan!!!";
        $this->load->view('tambah',$msg);
    }
    
    function daftarBuku(){
        $data['buku'] = $this->model_hci->getDaftarBuku();
        $this->load->view('daftarBuku',$data);
    }
    
    function update($id_buku){
        $this->model_hci->update($id_buku,'id_buku','buku',array(
            'judul_buku'=>$this->input->post('judul_buku'),
            'nama_penulis'=>$this->input->post('nama_penulis'),
            'tahun_terbit'=>$this->input->post('tahun_terbit'),
            'status'=>$this->input->post('status')
        ));
        $data['buku'] = $this->model_hci->getDaftarBuku();
        $this->daftarBuku();
        //redirect('buku/daftarBuku');
    }
    
    function viewUpdate($id_buku){
        $data['buku'] = $this->model_hci->getDetailBuku($id_buku);
        $this->load->view('viewUpdateBuku',$data);
    }
    
    function delete($id_buku){
        $this->model_hci->delete($id_buku,'id_buku','buku');
        $this->daftarBuku();
    } 
    
}
?>