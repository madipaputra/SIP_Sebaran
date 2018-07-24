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
		        'password'	=> $this->encrypt->encode($password,'SIPMKTEDC')
			);

		$this->db->insert('tb_akun', $data);
	}

	//Function cekLogin
	public function cekLogin($data)
	{
		//kondisi kueri
		$kondisi = "username =" . "'" . $data['username'] . "' AND " . "password =" . "'" . $data['password'] . "'";

			// perintah ini sama dengan kueri SQL 

			// SELECT * FROM tb_akun where username=$_POST['username'] AND password=$_POST['password']
			$this->db->select('*');
			$this->db->from('tb_akun');
			$this->db->where($kondisi);
			$this->db->limit(1);
			$query = $this->db->get();

			//Logika kueri . jika numrows sama dengan 1 maka dianggap benar atau true atau jika 0 sebaliknya
			if ($query->num_rows() == 1)
			{
				return true;
			} 
			else 
			{
				return false;
			}
	}

}

?>