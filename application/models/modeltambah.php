<?php 

class Modeltambah extends CI_Model
{

function dimasukan($data)
{
$this->db->insert('buku', $data);
return($data);
}

}
?>