<?php
class M_login extends CI_Model 
{
	private $primary_key='id_user';
	private $table_name='users';
	
	public function __construct()
	{
		parent::__construct();
	}
	
	function check_user($username, $password)
	{
       $this->db->where('username', $username);
       $this->db->where('password', $password);
       $data = $this->db->get('users');
       if($data->num_rows() == 1)
	   {
          return $data->row();
       }
	   else
	   {
          return FALSE;
       }
    }
	function get_user_permission($username,$password)
	{
		$data= $this->db->query("select * from users where username ='$username' and password ='$password'");
		if($data->num_rows() == 1)
		{
			return $data->row();
		}
		else
		{
			return FALSE;
		}
	}
}
?>