<?php 

class Modelupdate extends CI_Model
{

function diubah($data)
{
$this->db->where('id_buku', 1);
$this->db->update('buku', $data);
}

}
?>