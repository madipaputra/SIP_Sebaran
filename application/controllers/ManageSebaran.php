<?php

/**
 * 
 */
class ManageSebaran extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->cek_login();
		$this->load->model('SebaranModel');
	}

	public function cek_login()
	{
		if ($this->session->userdata('username') == "" || $this->session->userdata('kd_akun') == "" || $this->session->userdata('id_akun') == "") {
			redirect(base_url());
		}
	}

	function parserTemplate($element_header)
	{
		$this->parser->parse('Template/Dashboard/element_header', $element_header);
		$this->load->view('Template/Dashboard/element_footer');
	}

	public function SebaranPage()
	{
			switch ($this->session->kd_akun) {
			    case "AKA":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'List Prodi Manage Sebaran',
				        'inisialisasiKodeAkun'	=>	'Akademik',
						'webMuatHalaman'		=>	'Pages/DashBoard/akademik/manageSebaran',
						'pesan'					=>	''
				);
				$this->parserTemplate($element_header);
			        break;

			    case "AK":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'List Prodi Manage Sebaran',
				        'inisialisasiKodeAkun'	=>	'Akuntansi',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/manageSebaran'
				);
				$this->parserTemplate($element_header);
			        break;

			    case "KA":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'List Prodi Manage Sebaran',
				        'inisialisasiKodeAkun'	=>	'Komputerisasi Akuntansi',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/manageSebaran'
				);
				$this->parserTemplate($element_header);
			        break;

			    case "KB":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'List Prodi Manage Sebaran',
				        'inisialisasiKodeAkun'	=>	'Konstruksi Bangunan',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/manageSebaran'
				);
				$this->parserTemplate($element_header);
			        break;

			    case "MID":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'List Prodi Manage Sebaran',
				        'inisialisasiKodeAkun'	=>	'Mekatronik Industri & Desain',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/manageSebaran'
				);
				$this->parserTemplate($element_header);
			        break;

			    case "MK":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'List Prodi Manage Sebaran',
				        'inisialisasiKodeAkun'	=>	'Mekatronik Industri & Desain / Mekatronik',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/manageSebaran'
				);
				$this->parserTemplate($element_header);
			        break;

			    case "AB":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'List Prodi Manage Sebaran',
				        'inisialisasiKodeAkun'	=>	'MO / Alat Berat',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/manageSebaran'
				);
				$this->parserTemplate($element_header);
			        break;

			    case "MO":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'List Prodi Manage Sebaran',
				        'inisialisasiKodeAkun'	=>	'MO / Mekanik Otomotif',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/manageSebaran'
				);
				$this->parserTemplate($element_header);
			        break;

			    case "RM":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'List Prodi Manage Sebaran',
				        'inisialisasiKodeAkun'	=>	'Rekam Medik & Informasi Kesehatan',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/manageSebaran'
				);
				$this->parserTemplate($element_header);
			        break;

			    case "ALL":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'List Prodi Manage Sebaran',
				        'inisialisasiKodeAkun'	=>	'Seluruh Prodi',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/manageSebaran'
				);
				$this->parserTemplate($element_header);
			        break;

			    case "TE":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'List Prodi Manage Sebaran',
				        'inisialisasiKodeAkun'	=>	'Teknik Elektronika',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/manageSebaran'
				);
				$this->parserTemplate($element_header);
			        break;

			    case "IF":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'List Prodi Manage Sebaran',
				        'inisialisasiKodeAkun'	=>	'Teknik Informatika',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/manageSebaran'
				);
			    $this->parserTemplate($element_header);
			        break;

			    case "KIM":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'List Prodi Manage Sebaran',
				        'inisialisasiKodeAkun'	=>	'Teknik Kimia',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/manageSebaran'
				);
				$this->parserTemplate($element_header);
			        break;

			    case "TK":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'List Prodi Manage Sebaran',
				        'inisialisasiKodeAkun'	=>	'Teknik Komputer',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/manageSebaran'
				);
				$this->parserTemplate($element_header);
			        break;

			    case "TM":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'List Prodi Manage Sebaran',
				        'inisialisasiKodeAkun'	=>	'Teknik Mesin',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/manageSebaran'
				);
				$this->parserTemplate($element_header);
			        break;

			    case "TO":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'List Prodi Manage Sebaran',
				        'inisialisasiKodeAkun'	=>	'Teknik Otomasi',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/manageSebaran'
				);
				$this->parserTemplate($element_header);
			        break;

			}
	}

	public function AKASebaranProdiPage()
	{
		if ($this->input->post('kodeProdiPOST')	== NULL) 
		{
			redirect(base_url().'dashboard/akademik/manageSebaran');
		}
			$nama_prodi	=	$this->input->post('kodeProdiPOST');
			switch ($this->input->post('kodeProdiPOST')) {
			    case "AK":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Manage Sebaran',
				        'inisialisasiKodeAkun'	=>	'Akuntansi',
				        'kode_prodi'			=>	$nama_prodi,
						'webMuatHalaman'		=>	'Pages/DashBoard/akademik/manageSebaranProdi',
						'pesan'					=>	''
				);
				$this->parserTemplate($element_header);
			        break;

			    case "KA":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Manage Sebaran',
				        'inisialisasiKodeAkun'	=>	'Komputerisasi Akuntansi',
				        'kode_prodi'			=>	$nama_prodi,
						'webMuatHalaman'		=>	'Pages/DashBoard/akademik/manageSebaranProdi',
						'pesan'					=>	''
				);
				$this->parserTemplate($element_header);
			        break;

			    case "KB":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Manage Sebaran',
				        'inisialisasiKodeAkun'	=>	'Konstruksi Bangunan',
				        'kode_prodi'			=>	$nama_prodi,
						'webMuatHalaman'		=>	'Pages/DashBoard/akademik/manageSebaranProdi',
						'pesan'					=>	''
				);
				$this->parserTemplate($element_header);
			        break;

			    case "MID":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Manage Sebaran',
				        'inisialisasiKodeAkun'	=>	'Mekatronik Industri & Desain',
				        'kode_prodi'			=>	$nama_prodi,
						'webMuatHalaman'		=>	'Pages/DashBoard/akademik/manageSebaranProdi',
						'pesan'					=>	''
				);
				$this->parserTemplate($element_header);
			        break;

			    case "MK":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Manage Sebaran',
				        'inisialisasiKodeAkun'	=>	'Mekatronik Industri & Desain / Mekatronik',
				        'kode_prodi'			=>	$nama_prodi,
						'webMuatHalaman'		=>	'Pages/DashBoard/akademik/manageSebaranProdi',
						'pesan'					=>	''
				);
				$this->parserTemplate($element_header);
			        break;

			    case "AB":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Manage Sebaran',
				        'inisialisasiKodeAkun'	=>	'MO / Alat Berat',
				        'kode_prodi'			=>	$nama_prodi,
						'webMuatHalaman'		=>	'Pages/DashBoard/akademik/manageSebaranProdi',
						'pesan'					=>	''
				);
				$this->parserTemplate($element_header);
			        break;

			    case "MO":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Manage Sebaran',
				        'inisialisasiKodeAkun'	=>	'MO / Mekanik Otomotif',
				        'kode_prodi'			=>	$nama_prodi,
						'webMuatHalaman'		=>	'Pages/DashBoard/akademik/manageSebaranProdi',
						'pesan'					=>	''
				);
				$this->parserTemplate($element_header);
			        break;

			    case "RM":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Manage Sebaran',
				        'inisialisasiKodeAkun'	=>	'Rekam Medik & Informasi Kesehatan',
				        'kode_prodi'			=>	$nama_prodi,
						'webMuatHalaman'		=>	'Pages/DashBoard/akademik/manageSebaranProdi',
						'pesan'					=>	''
				);
				$this->parserTemplate($element_header);
			        break;

			    case "ALL":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Manage Sebaran',
				        'inisialisasiKodeAkun'	=>	'Seluruh Prodi',
				        'kode_prodi'			=>	$nama_prodi,
						'webMuatHalaman'		=>	'Pages/DashBoard/akademik/manageSebaranProdi',
						'pesan'					=>	''
				);
				$this->parserTemplate($element_header);
			        break;

			    case "TE":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Manage Sebaran',
				        'inisialisasiKodeAkun'	=>	'Teknik Elektronika',
				        'kode_prodi'			=>	$nama_prodi,
						'webMuatHalaman'		=>	'Pages/DashBoard/akademik/manageSebaranProdi',
						'pesan'					=>	''
				);
				$this->parserTemplate($element_header);
			        break;

			    case "IF":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Manage Sebaran',
				        'inisialisasiKodeAkun'	=>	'Teknik Informatika',
				        'kode_prodi'			=>	$nama_prodi,
						'webMuatHalaman'		=>	'Pages/DashBoard/akademik/manageSebaranProdi',
						'pesan'					=>	''
				);
			    $this->parserTemplate($element_header);
			        break;

			    case "KIM":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Manage Sebaran',
				        'inisialisasiKodeAkun'	=>	'Teknik Kimia',
				        'kode_prodi'			=>	$nama_prodi,
						'webMuatHalaman'		=>	'Pages/DashBoard/akademik/manageSebaranProdi',
						'pesan'					=>	''
				);
				$this->parserTemplate($element_header);
			        break;

			    case "TK":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Manage Sebaran',
				        'inisialisasiKodeAkun'	=>	'Teknik Komputer',
				        'kode_prodi'			=>	$nama_prodi,
						'webMuatHalaman'		=>	'Pages/DashBoard/akademik/manageSebaranProdi',
						'pesan'					=>	''
				);
				$this->parserTemplate($element_header);
			        break;

			    case "TM":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Manage Sebaran',
				        'inisialisasiKodeAkun'	=>	'Teknik Mesin',
				        'kode_prodi'			=>	$nama_prodi,
						'webMuatHalaman'		=>	'Pages/DashBoard/akademik/manageSebaranProdi',
						'pesan'					=>	''
				);
				$this->parserTemplate($element_header);
			        break;

			    case "TO":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Manage Sebaran',
				        'inisialisasiKodeAkun'	=>	'Teknik Otomasi',
				        'kode_prodi'			=>	$nama_prodi,
						'webMuatHalaman'		=>	'Pages/DashBoard/akademik/manageSebaranProdi',
						'pesan'					=>	''
				);
				$this->parserTemplate($element_header);
			        break;

			}		
	}

	public function PRODISebaranProdiPage()
	{

			$nama_prodi	=	$this->session->userdata('kd_akun');
			switch ($this->session->userdata('kd_akun')) {
			    case "AK":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Manage Sebaran',
				        'inisialisasiKodeAkun'	=>	'Akuntansi',
				        'kode_prodi'			=>	$nama_prodi,
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/manageSebaranProdi',
						'pesan'					=>	''
				);
				$this->parserTemplate($element_header);
			        break;

			    case "KA":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Manage Sebaran',
				        'inisialisasiKodeAkun'	=>	'Komputerisasi Akuntansi',
				        'kode_prodi'			=>	$nama_prodi,
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/manageSebaranProdi',
						'pesan'					=>	''
				);
				$this->parserTemplate($element_header);
			        break;

			    case "KB":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Manage Sebaran',
				        'inisialisasiKodeAkun'	=>	'Konstruksi Bangunan',
				        'kode_prodi'			=>	$nama_prodi,
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/manageSebaranProdi',
						'pesan'					=>	''
				);
				$this->parserTemplate($element_header);
			        break;

			    case "MID":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Manage Sebaran',
				        'inisialisasiKodeAkun'	=>	'Mekatronik Industri & Desain',
				        'kode_prodi'			=>	$nama_prodi,
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/manageSebaranProdi',
						'pesan'					=>	''
				);
				$this->parserTemplate($element_header);
			        break;

			    case "MK":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Manage Sebaran',
				        'inisialisasiKodeAkun'	=>	'Mekatronik Industri & Desain / Mekatronik',
				        'kode_prodi'			=>	$nama_prodi,
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/manageSebaranProdi',
						'pesan'					=>	''
				);
				$this->parserTemplate($element_header);
			        break;

			    case "AB":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Manage Sebaran',
				        'inisialisasiKodeAkun'	=>	'MO / Alat Berat',
				        'kode_prodi'			=>	$nama_prodi,
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/manageSebaranProdi',
						'pesan'					=>	''
				);
				$this->parserTemplate($element_header);
			        break;

			    case "MO":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Manage Sebaran',
				        'inisialisasiKodeAkun'	=>	'MO / Mekanik Otomotif',
				        'kode_prodi'			=>	$nama_prodi,
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/manageSebaranProdi',
						'pesan'					=>	''
				);
				$this->parserTemplate($element_header);
			        break;

			    case "RM":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Manage Sebaran',
				        'inisialisasiKodeAkun'	=>	'Rekam Medik & Informasi Kesehatan',
				        'kode_prodi'			=>	$nama_prodi,
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/manageSebaranProdi',
						'pesan'					=>	''
				);
				$this->parserTemplate($element_header);
			        break;

			    case "ALL":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Manage Sebaran',
				        'inisialisasiKodeAkun'	=>	'Seluruh Prodi',
				        'kode_prodi'			=>	$nama_prodi,
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/manageSebaranProdi',
						'pesan'					=>	''
				);
				$this->parserTemplate($element_header);
			        break;

			    case "TE":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Manage Sebaran',
				        'inisialisasiKodeAkun'	=>	'Teknik Elektronika',
				        'kode_prodi'			=>	$nama_prodi,
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/manageSebaranProdi',
						'pesan'					=>	''
				);
				$this->parserTemplate($element_header);
			        break;

			    case "IF":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Manage Sebaran',
				        'inisialisasiKodeAkun'	=>	'Teknik Informatika',
				        'kode_prodi'			=>	$nama_prodi,
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/manageSebaranProdi',
						'pesan'					=>	''
				);
			    $this->parserTemplate($element_header);
			        break;

			    case "KIM":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Manage Sebaran',
				        'inisialisasiKodeAkun'	=>	'Teknik Kimia',
				        'kode_prodi'			=>	$nama_prodi,
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/manageSebaranProdi',
						'pesan'					=>	''
				);
				$this->parserTemplate($element_header);
			        break;

			    case "TK":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Manage Sebaran',
				        'inisialisasiKodeAkun'	=>	'Teknik Komputer',
				        'kode_prodi'			=>	$nama_prodi,
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/manageSebaranProdi',
						'pesan'					=>	''
				);
				$this->parserTemplate($element_header);
			        break;

			    case "TM":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Manage Sebaran',
				        'inisialisasiKodeAkun'	=>	'Teknik Mesin',
				        'kode_prodi'			=>	$nama_prodi,
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/manageSebaranProdi',
						'pesan'					=>	''
				);
				$this->parserTemplate($element_header);
			        break;

			    case "TO":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Manage Sebaran',
				        'inisialisasiKodeAkun'	=>	'Teknik Otomasi',
				        'kode_prodi'			=>	$nama_prodi,
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/manageSebaranProdi',
						'pesan'					=>	''
				);
				$this->parserTemplate($element_header);
			        break;

			}		
	}

	public function AKASebaranPagePrev(){
		echo "Preview Page";
			$kode_prodi		=	$this->input->post('kodeProdiPOST');
			$tipe_kelas		=	$this->input->post('tipeKelasPOST');
			$grup_kelas		=	$this->input->post('groupKelasPOST');
			$semester		=	$this->input->post('semesterPOST');
			$id_matkul		=	$this->input->post('kodeMatkulPOST');
			$dosen1			=	$this->input->post('dosen1POST');
			$dosen2			=	$this->input->post('dosen2POST');
			$keterangan		=	$this->input->post('ketPOST');

				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Preview Add Sebaran',
				        'inisialisasiKodeAkun'	=>	'Akademik',
				        'kode_prodi'			=>	$kode_prodi,
				        'tipe_kelas'			=>	$tipe_kelas,
				        'grup_kelas'			=>	$grup_kelas,
				        'semester'				=>	$semester,
				        'id_matkul'				=>	$id_matkul,
				        'dosen1'				=>	$dosen1,
				        'dosen2'				=>	$dosen2,
				        'keterangan'			=>	$keterangan,

						'webMuatHalaman'		=>	'Pages/DashBoard/akademik/manageSebaranProdiPrev',
						'pesan'					=>	''
				);
				$this->parserTemplate($element_header);


	}

	public function AddSebaran()
	{
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Halaman Sebaran (Add)',
				        'inisialisasiKodeAkun'	=>	'(Akademik)',
						'webMuatHalaman'		=>	'Pages/DashBoard/akademik/manageSebaran',
						'pesan'					=>	''
				);


		        $this->form_validation->set_rules('kd_kelasPOST', 'Kode Kelas', 
		          'required', array('required' => 'Kode Kelas Harus Diisi')
		        );
		        $this->form_validation->set_rules('tipe_kelasPOST', 'Tipe Kelas', 
		          'required', array('required' => 'Tipe Kelas Harus Diisi')
		        );
		        $this->form_validation->set_rules('nama_prodiPOST', 'Nma Prodi', 
		          'required', array('required' => 'Nama Prodi Harus Diisi')
		        );
		        $this->form_validation->set_rules('semesterPOST', 'Semester', 
		          'required', array('required' => 'Semester Harus Diisi')
		        );
		        $this->form_validation->set_rules('namaMatkulPOST', 'Nama Matakuliah', 
		          'required', array('required' => 'Nama Matakuliah Harus Diisi')
		        );
		        $this->form_validation->set_rules('dosen1POST', 'Nama Matakuliah', 
		          'required', array('required' => 'Nama Matakuliah Harus Diisi')
		        );

	            //Logika Form Validation
	              if ($this->form_validation->run() == FALSE)
	              {
	                $this->parser->parse('Template/Dashboard/element_header', $element_header);
	                $this->load->view('Template/Dashboard/element_footer');
	              }

	              else
	              {
	                $this->SebaranModel->insertSebaran();
	                $element_header['pesan'] = '
	                  <div class="alert alert-success alert-dismissible fade show" role="alert">
	                  <i class="fas fa-check-circle"></i> Data Sebaran Berhasil Ditambahkan ke dalam Database
	                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	                      <span aria-hidden="true">&times;</span>
	                    </button>
	                  </div>
	                  ';

	                $this->parser->parse('Template/Dashboard/element_header', $element_header);
	                $this->load->view('Template/Dashboard/element_footer');              
	              }	
	}

}