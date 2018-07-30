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
		$alamat_dosen 			=	$this->input->post('alamatPOST');
		$no_telp_dosen			=	$this->input->post('no_telpPOST');
		$kode_dosen				=	'DOS'.substr($nidn, 10,5);
		$id_dosen 				=	hash('crc32', $kode_dosen);

			//Array data row yang ada di dalam tabel
			$data = array(
		    	'id_dosen'			=> $id_dosen,
		    	'kd_dosen'			=> $kode_dosen,
		        'nama_dosen'		=> $nama_dosen,
		        'nidn'				=> $nidn,
		        'alamat'			=> $alamat_dosen,
		        'no_telp'			=> $no_telp_dosen
			);

		$this->db->insert('tb_dosen', $data);
	}

	public function deleteDosen($element_header)
	{
		$this->db->delete('tb_dosen', array('id_dosen' => $element_header['id_dosen']));
	}

	public function updateDosen($element_header)
	{
		$id_prodi	=	$element_header['id_prodi'];
		$kd_prodi 	=	$element_header['kd_prodi'];
		$nama_prodi =	$element_header['nama_prodi'];
		$data = array(
		        'id_prodi' 		=> $id_prodi,
		        'kd_prodi'  	=> $kd_prodi,
		        'nama_prodi'  	=> $nama_prodi
		);

		$this->db->replace('tb_dosen', $data);
	}

}

?>