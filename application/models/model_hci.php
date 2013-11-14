<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of model_hci
 *
 * @author blackant999
 */
class model_hci extends CI_Model{
    //put your code here
    function __construct() {
        parent::__construct();
    }
    
    function getDaftarUser(){
        return $this->db->get('users');
    }
    
    function getDaftarBuku(){
        return $this->db->get('buku');
    }
    
    
    function delete($id,$id_field_name,$table){
        $this->db->where($id_field_name, $id);
        $this->db->delete($table);
    }
    
    function update($id,$id_field_name,$table,$data){
        $this->db->where($id_field_name, $id);
        $this->db->update($table,$data);
    }
    
    function getDetailUser($id){
        $this->db->where('id_user',$id);
        return $this->db->get('users')->row();
    }
    
    function getDetailBuku($id){
        $this->db->where('id_buku',$id);
        return $this->db->get('buku')->row();
    }
    
    function tambahUser($data){
        $this->db->insert('users',$data);
    }
    
    function searchBuku($judul_buku){
        $this->db->like('judul_buku',$judul_buku);
        $this->db->where('status','tersedia');
        return $this->db->get('buku');
    }
    
    function pinjam($id_buku,$id_user){
        $this->db->insert('transaksi',array('id_buku'=>$id_buku, 'id_user'=>$id_user, 'action'=>'waiting'));
        $this->db->where('id_buku',$id_buku);        
        $this->db->update('buku',array('status'=>'waiting'));
    }
    
    function daftarWaiting(){
        return $this->db->query("
            select transaksi.id, buku.id_buku, buku.judul_buku, users.id_user, users.nama_lengkap
            from transaksi, buku, users
            where transaksi.id_buku = buku.id_buku
            and transaksi.id_user = users.id_user
            and buku.status='waiting'
            and transaksi.action='waiting'
            ");
    }
    function tolak($id){        
        $this->db->where('id',$id);
        $this->db->update('transaksi',array('action'=>'tolak'));
        
        $this->db->where('id',$id);
        $data_buku=$this->db->get('transaksi')->row();
        
        $this->db->where('id_buku',$data_buku->id_buku);
        $this->db->update('buku',array('status'=>'tersedia'));
    }
    
    function setuju($id){        
        $this->db->where('id',$id);
        $this->db->update('transaksi',array('action'=>'setujuh'));
        
        $this->db->where('id',$id);
        $data_buku=$this->db->get('transaksi')->row();
        
        $this->db->where('id_buku',$data_buku->id_buku);
        $this->db->update('buku',array('status'=>'terpinjam'));
    }
    
    function kembalikanbuku($id_user, $id_buku)
	{
       $this->db->where('id_buku', $id_buku);
       $this->db->where('id_user', $id_user);
       $this->db->where('action', 'setujuh');
       $data = $this->db->get('transaksi');
       
       if($data->num_rows() == 1)
	   {
           $this->db->where('id',$data->row()->id);
           $this->db->update('transaksi', array('action'=>'dikembalikan'));
           $this->db->where('id_buku',$id_buku);
           $this->db->update('buku',array('status'=>'tersedia'));
          return "Buku berhasil di kemablikan";
       }
	   else
	   {
          return "Data buku atau user tidak ada dalam database";
       }
    }
}

?>
