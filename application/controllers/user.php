<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of user
 *
 * @author blackant999
 */
class user extends CI_Controller{
    //put your code here
    function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('model_hci');
    }

    function tambah(){
        $data = array(
        'id_user' => $this->input->post('id_user'),
        'username' => $this->input->post('id_user'),
        'password' => 'password',
        'level' => $this->input->post('level'),
        'nama_lengkap' => $this->input->post('nama_lengkap'),
        'alamat' => $this->input->post('alamat'),
        'fakultas' => $this->input->post('fakultas'),
        'jurusan' => $this->input->post('jurusan'),
        'angkatan' => $this->input->post('angkatan'),
        'semester' => $this->input->post('semester'),
        'nim' => $this->input->post('nim'),
        'telepon' => $this->input->post('telepon')
        );
        $this->model_hci->tambahUser($data);
        $msg['sukses']="Data user Berhasil Ditambahkan!!!";
        $this->load->view('home',$msg);
    }
    
    function daftarUser(){
        $data['user'] = $this->model_hci->getDaftarUser();
        $this->load->view('daftarUser',$data);
    }
    
    function update($id){
        $this->model_hci->update($id,'id_user','users',array(
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'level' => $this->input->post('level'),
            'nama_lengkap' => $this->input->post('nama_lengkap'),
            'alamat' => $this->input->post('alamat'),
            'fakultas' => $this->input->post('fakultas'),
            'jurusan' => $this->input->post('jurusan'),
            'angkatan' => $this->input->post('angkatan'),
            'semester' => $this->input->post('semester'),
            'nim' => $this->input->post('nim'),
            'telepon' => $this->input->post('telepon')
        ));
        //$data['buku'] = $this->model_hci->getDaftarBuku();
        $this->daftarUser();
        //redirect('buku/daftarBuku');
    }
    
    function viewUpdate($id){
        $data['user'] = $this->model_hci->getDetailUser($id);
        $this->load->view('viewUpdateUser',$data);
    }
    
    function delete($id){
        $this->model_hci->delete($id,'id_user','users');
        $this->daftarUser();
    }
    function tolak($id){
        $this->model_hci->tolak($id);
        redirect('pinjam');
    }
    function setuju($id){
        $this->model_hci->setuju($id);
        redirect('pinjam');
    }
}

?>
