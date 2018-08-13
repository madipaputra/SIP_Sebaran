<?php

/**
 * 
 */
class MatkulModel extends CI_Model
{
	
	//Function Insert Data Pendaftaran Akun
	public function insertMatkul()
	{

		//Kumpulan Variabel yang dipakai di script query builder 
		$kode_matkul 			=	$this->input->post('kd_matkulPOST');
		$nama_matkul			=	$this->input->post('nama_matkulPOST');
		$sks_teori				=	$this->input->post('sks_teoriPOST');
		$sks_praktek			=	$this->input->post('sks_praktekPOST');
		$sks 					=	$sks_teori + $sks_praktek;
		$kd_prodi 				=	$this->input->post('kodeProdiPOST');
		$status 				=	0;
		$alasan 				=	"";
		$id_matkul 				=	hash('crc32', $kode_matkul.$kd_prodi.$nama_matkul);

			//Array data row yang ada di dalam tabel
			$data = array(
		    	'id_matkul'			=> $id_matkul,
		    	'kd_matkul'			=> $kode_matkul,
		        'nama_matkul'		=> $nama_matkul,
		        'sks'				=> $sks,
		        'sks_teori'			=> $sks_teori,
		        'sks_praktek'		=> $sks_praktek,
		       	'kd_prodi'			=> $kd_prodi,
		       	'status'			=> $status,
		       	'alasan_ditolak'	=> $alasan,
			);

		$this->db->insert('tb_matakuliah', $data);
	}

	public function deleteDosen($element_header)
	{
		$this->db->delete('tb_dosen', array('id_dosen' => $element_header['id_dosen']));
	}

	public function verifyMatkul($element_header)
	{
		$id_matkul				=	$element_header['id_matkul'];
		$kd_matkul 				=	$element_header['kd_matkul'];
		$nama_matkul 			=	$element_header['nama_matkul'];
		$sks 					=	$element_header['sks'];
		$sks_teori 				=	$element_header['sks_teori'];
		$sks_praktek 			=	$element_header['sks_praktek'];
		$kd_prodi 				=	$element_header['kd_prodi'];
		$status 				=	$element_header['status'];
		$alasan_ditolak 		=	$element_header['alasan_ditolak'];
		$data = array(
		        'id_matkul' 		=> $id_matkul,
		        'kd_matkul'  		=> $kd_matkul,
		        'nama_matkul'	  	=> $nama_matkul,
		        'sks'			  	=> $sks,
		        'sks_teori'	  		=> $sks_teori,
		        'sks_praktek'	  	=> $sks_praktek,
		        'kd_prodi'		  	=> $kd_prodi,
		        'status'		  	=> $status,
		        'alasan_ditolak'  	=> $alasan_ditolak
		);

		$this->db->replace('tb_matakuliah', $data);
	}

}

?>