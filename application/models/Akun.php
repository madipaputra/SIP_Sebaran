<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
  Model Akun.
  	
  	- function registerProcess() adalah function yang menangani proses pendaftaran akun

 */
class Akun extends CI_Model
{
	
	//Function Insert Data Pendaftaran Akun
	public function insertAkun()
	{

		//Kumpulan Variabel yang dipakai di script query builder 
		$kd_akun	=	$this->input->post('kd_akunPOST');
		$username	=	$this->input->post('usernamePOST');
		$password	=	$this->input->post('passwordPOST');
		$id_akun	=	hash('crc32', $kd_akun.$username);

			//Array data row yang ada di dalam tabel
			$data = array(
		    	'id_akun'	=> $id_akun,
		        'kd_akun'	=> $kd_akun,
		        'username'	=> $username,
		        'password'	=> hash('sha512', $password)
			);

		$this->db->insert('tb_akun', $data);
	}

	public function loginAkun($username, $password)
	{
	  $periksa = $this->db->get_where('tb_akun', 
	  	array('username'=>$username,'password'=> hash('sha512',$password)));

		  if($periksa->num_rows()>0)
		  	{
		    	return 1;
		  	}
		  else
		  	{
		    	return 0;
		  	}
	}
	

}


?>