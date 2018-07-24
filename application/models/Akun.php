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
		$id_akun	=	$this->encrypt->encode($id_akun.$username);

		//Kumpulan Array untuk Query Builder Proses Pendaftaran
		$dataQuery = array(
		        'id_akun'	=> $id_akun,
		        'kd_akun'	=> $kd_akun,
		        'username'	=> $username,
		        'password'	=> $password
		);

		//Eksekusi Query Builder
		return $this->db->insert('tb_akun', $dataQuery);
	}

}

?>