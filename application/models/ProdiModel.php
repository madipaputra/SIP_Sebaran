<?php

/**
 * 
 */
class ProdiModel extends CI_Model
{
	
	//Function Insert Data Pendaftaran Akun
	public function insertProdi()
	{

		//Kumpulan Variabel yang dipakai di script query builder 

		$kode_prodi	=	$this->input->post('kd_prodiPOST');
		$nama_prodi	=	$this->input->post('nama_prodiPOST');
		$id_prodi	=	hash('crc32', $kode_prodi.$nama_prodi);

			//Array data row yang ada di dalam tabel
			$data = array(
		    	'id_prodi'	=> $id_prodi,
		        'kd_prodi'	=> $kode_prodi,
		        'nama_prodi'	=> $nama_prodi
			);

		$this->db->insert('tb_prodi', $data);
	}


}

?>