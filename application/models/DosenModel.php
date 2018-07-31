<?php

/**
 * 
 */
class DosenModel extends CI_Model
{
	
	//Function Insert Data Pendaftaran Akun
	public function insertDosen()
	{

		//Kumpulan Variabel yang dipakai di script query builder 
		$nama_dosen 			=	$this->input->post('nama_dosenPOST');
		$nidn					=	$this->input->post('nidnPOST');
		$id_dosen 				=	hash('crc32', $nama_dosen);

			//Array data row yang ada di dalam tabel
			$data = array(
		    	'id_dosen'			=> $id_dosen,
		        'nama_dosen'		=> $nama_dosen,
		        'nidn'				=> $nidn
			);

		$this->db->insert('tb_dosen', $data);
	}

	public function deleteDosen($element_header)
	{
		$this->db->delete('tb_dosen', array('id_dosen' => $element_header['id_dosen']));
	}

	public function updateDosen($element_header)
	{
		$id_dosen		=	$element_header['id_dosen'];
		$nama_dosen 	=	$element_header['nama_dosen'];
		$nidn 			=	$element_header['nidn'];
		$data = array(
		        'id_dosen' 		=> $id_dosen,
		        'nama_dosen'  	=> $nama_dosen,
		        'nidn'		  	=> $nidn
		);

		$this->db->replace('tb_dosen', $data);
	}

}

?>