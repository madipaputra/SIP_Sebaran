<?php

/**
 * 
 */
class SebaranModel extends CI_Model
{
	
	//Function Insert Data Pendaftaran Akun
	public function insertSebaran()
	{

		//Kumpulan Variabel yang dipakai di script query builder 
		$kode_kelas 			=	$this->input->post('kd_kelasPOST');
		$tipe_kelas				=	$this->input->post('tipe_kelasPOST');
		$kode_prodi				=	$this->input->post('kodeprodiPOST');
		$semester				=	$this->input->post('semesterPOST');
		$kode_matkul			=	$this->input->post('kdMatkulPOST');
		$nama_matkul			=	$this->input->post('namaMatkulPOST');
		$sks					=	$this->input->post('sksPOST');
		$sks_teori				=	$this->input->post('sksTeoriPOST');
		$sks_praktek			=	$this->input->post('sksPraktekPOST');
		$jam_ajar				=	$this->input->post('jam_ajarPOST');
		$dosen1 				=   $this->input->post('dosen1POST');
		$dosen2					=   $this->input->post('dosen2POST');
		if ($dosen2!="") 
		{
			$dosen 				=	$this->input->post('dosen1POST')." / ".$this->input->post('dosen2POST');
		}
		else
		{
			$dosen 				=	$this->input->post('dosen1POST');
		}

		$keterangan				=   $this->input->post('ketPOST');

		$id_sebaran 			=	hash('crc32', $kode_prodi.'|'.$kode_kelas.'|'.$tipe_kelas.'|'.$kode_prodi.'|'.$kode_matkul.'|'.$keterangan.'|'.$dosen1.'|'.$dosen2);

			//Array data row yang ada di dalam tabel
			$data = array(
		    	'id_sebaran'		=> $id_sebaran,
		        'kd_kelas'			=> $kode_kelas,
		        'kd_matkul'			=> $kode_matkul,
		        'tipe_kelas'		=> $tipe_kelas,
		        'kd_prodi'			=> $kode_prodi,
		        'smt'				=> $semester,
		        'nama_matkul'		=> $nama_matkul,
		        'sks'				=> $sks,
		        'sks_teori'			=> $sks_teori,
		        'sks_praktek'		=> $sks_praktek,
		        'jam'				=> $jam_ajar,
		        'dosen'				=> $dosen,
		        'ket'				=> $keterangan
			);

		$this->db->insert('tb_sebaran', $data);
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