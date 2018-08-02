<?php


class ManageMatkul extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->cek_login();
		//$this->load->model('DosenModel');
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

	public function ManageMatkulPage()
	{
			switch ($this->session->kd_akun) {
			    case "AKA":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'List Manage Matakuliah',
				        'inisialisasiKodeAkun'	=>	'Akademik',
						'webMuatHalaman'		=>	'Pages/DashBoard/akademik/manageMatkul',
						'pesan'					=>	''
				);
				$this->parserTemplate($element_header);
			        break;

			    case "AK":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'List Manage Matakuliah',
				        'inisialisasiKodeAkun'	=>	'Akuntansi',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/manageMatkul'
				);
				$this->parserTemplate($element_header);
			        break;

			    case "KA":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'List Manage Matakuliah',
				        'inisialisasiKodeAkun'	=>	'Komputerisasi Akuntansi',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/manageMatkul'
				);
				$this->parserTemplate($element_header);
			        break;

			    case "KB":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'List Manage Matakuliah',
				        'inisialisasiKodeAkun'	=>	'Konstruksi Bangunan',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/manageMatkul'
				);
				$this->parserTemplate($element_header);
			        break;

			    case "MID":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'List Manage Matakuliah',
				        'inisialisasiKodeAkun'	=>	'Mekatronik Industri & Desain',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/manageMatkul'
				);
				$this->parserTemplate($element_header);
			        break;

			    case "MK":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'List Manage Matakuliah',
				        'inisialisasiKodeAkun'	=>	'Mekatronik Industri & Desain / Mekatronik',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/manageMatkul'
				);
				$this->parserTemplate($element_header);
			        break;

			    case "AB":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'List Manage Matakuliah',
				        'inisialisasiKodeAkun'	=>	'MO / Alat Berat',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/manageMatkul'
				);
				$this->parserTemplate($element_header);
			        break;

			    case "MO":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'List Manage Matakuliah',
				        'inisialisasiKodeAkun'	=>	'MO / Mekanik Otomotif',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/manageMatkul'
				);
				$this->parserTemplate($element_header);
			        break;

			    case "RM":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'List Manage Matakuliah',
				        'inisialisasiKodeAkun'	=>	'Rekam Medik & Informasi Kesehatan',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/manageMatkul'
				);
				$this->parserTemplate($element_header);
			        break;

			    case "ALL":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'List Manage Matakuliah',
				        'inisialisasiKodeAkun'	=>	'Seluruh Prodi',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/manageMatkul'
				);
				$this->parserTemplate($element_header);
			        break;

			    case "TE":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'List Manage Matakuliah',
				        'inisialisasiKodeAkun'	=>	'Teknik Elektronika',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/manageMatkul'
				);
				$this->parserTemplate($element_header);
			        break;

			    case "IF":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'List Manage Matakuliah',
				        'inisialisasiKodeAkun'	=>	'Teknik Informatika',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/manageMatkul'
				);
			    $this->parserTemplate($element_header);
			        break;

			    case "KIM":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'List Manage Matakuliah',
				        'inisialisasiKodeAkun'	=>	'Teknik Kimia',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/manageMatkul'
				);
				$this->parserTemplate($element_header);
			        break;

			    case "TK":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'List Manage Matakuliah',
				        'inisialisasiKodeAkun'	=>	'Teknik Komputer',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/manageMatkul'
				);
				$this->parserTemplate($element_header);
			        break;

			    case "TM":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'List Manage Matakuliah',
				        'inisialisasiKodeAkun'	=>	'Teknik Mesin',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/manageMatkul'
				);
				$this->parserTemplate($element_header);
			        break;

			    case "TO":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'List Manage Matakuliah',
				        'inisialisasiKodeAkun'	=>	'Teknik Otomasi',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/manageMatkul'
				);
				$this->parserTemplate($element_header);
			        break;

			}
	}

	public function AKAManageMatkulProdiPage()
	{
		if ($this->input->post('kodeProdiPOST')	== NULL) 
		{
			redirect(base_url().'dashboard/akademik/manageMatkul');
		}
			$nama_prodi	=	$this->input->post('kodeProdiPOST');
			switch ($this->input->post('kodeProdiPOST')) {
			    case "AK":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Manage Matakuliah',
				        'inisialisasiKodeAkun'	=>	'Akuntansi',
				        'nama_prodi'			=>	$nama_prodi,
						'webMuatHalaman'		=>	'Pages/DashBoard/akademik/manageMatkulProdi',
						'pesan'					=>	''
				);
				$this->parserTemplate($element_header);
			        break;
			    case "AK":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Manage Matakuliah',
				        'inisialisasiKodeAkun'	=>	'Akuntansi',
				        'nama_prodi'			=>	$nama_prodi,
						'webMuatHalaman'		=>	'Pages/DashBoard/akademik/manageMatkulProdi',
						'pesan'					=>	''
				);
				$this->parserTemplate($element_header);
			        break;

			    case "KA":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Manage Matakuliah',
				        'inisialisasiKodeAkun'	=>	'Komputerisasi Akuntansi',
				        'nama_prodi'			=>	$nama_prodi,
						'webMuatHalaman'		=>	'Pages/DashBoard/akademik/manageMatkulProdi/',
						'pesan'					=>	''
				);
				$this->parserTemplate($element_header);
			        break;

			    case "KB":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Manage Matakuliah',
				        'inisialisasiKodeAkun'	=>	'Konstruksi Bangunan',
				        'nama_prodi'			=>	$nama_prodi,
						'webMuatHalaman'		=>	'Pages/DashBoard/akademik/manageMatkulProdi',
						'pesan'					=>	''
				);
				$this->parserTemplate($element_header);
			        break;

			    case "MID":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Manage Matakuliah',
				        'inisialisasiKodeAkun'	=>	'Mekatronik Industri & Desain',
				        'nama_prodi'			=>	$nama_prodi,
						'webMuatHalaman'		=>	'Pages/DashBoard/akademik/manageMatkulProdi',
						'pesan'					=>	''
				);
				$this->parserTemplate($element_header);
			        break;

			    case "MK":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Manage Matakuliah',
				        'inisialisasiKodeAkun'	=>	'Mekatronik Industri & Desain / Mekatronik',
				        'nama_prodi'			=>	$nama_prodi,
						'webMuatHalaman'		=>	'Pages/DashBoard/akademik/manageMatkulProdi',
						'pesan'					=>	''
				);
				$this->parserTemplate($element_header);
			        break;

			    case "AB":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Manage Matakuliah',
				        'inisialisasiKodeAkun'	=>	'MO / Alat Berat',
				        'nama_prodi'			=>	$nama_prodi,
						'webMuatHalaman'		=>	'Pages/DashBoard/akademik/manageMatkulProdi',
						'pesan'					=>	''
				);
				$this->parserTemplate($element_header);
			        break;

			    case "MO":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Manage Matakuliah',
				        'inisialisasiKodeAkun'	=>	'MO / Mekanik Otomotif',
				        'nama_prodi'			=>	$nama_prodi,
						'webMuatHalaman'		=>	'Pages/DashBoard/akademik/manageMatkulProdi',
						'pesan'					=>	''
				);
				$this->parserTemplate($element_header);
			        break;

			    case "RM":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Manage Matakuliah',
				        'inisialisasiKodeAkun'	=>	'Rekam Medik & Informasi Kesehatan',
				        'nama_prodi'			=>	$nama_prodi,
						'webMuatHalaman'		=>	'Pages/DashBoard/akademik/manageMatkulProdi',
						'pesan'					=>	''
				);
				$this->parserTemplate($element_header);
			        break;

			    case "ALL":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Manage Matakuliah',
				        'inisialisasiKodeAkun'	=>	'Seluruh Prodi',
				        'nama_prodi'			=>	$nama_prodi,
						'webMuatHalaman'		=>	'Pages/DashBoard/akademik/manageMatkulProdi',
						'pesan'					=>	''
				);
				$this->parserTemplate($element_header);
			        break;

			    case "TE":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Manage Matakuliah',
				        'inisialisasiKodeAkun'	=>	'Teknik Elektronika',
				        'nama_prodi'			=>	$nama_prodi,
						'webMuatHalaman'		=>	'Pages/DashBoard/akademik/manageMatkulProdi',
						'pesan'					=>	''
				);
				$this->parserTemplate($element_header);
			        break;

			    case "IF":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Manage Matakuliah',
				        'inisialisasiKodeAkun'	=>	'Teknik Informatika',
				        'nama_prodi'			=>	$nama_prodi,
						'webMuatHalaman'		=>	'Pages/DashBoard/akademik/manageMatkulProdi',
						'pesan'					=>	''
				);
			    $this->parserTemplate($element_header);
			        break;

			    case "KIM":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Manage Matakuliah',
				        'inisialisasiKodeAkun'	=>	'Teknik Kimia',
				        'nama_prodi'			=>	$nama_prodi,
						'webMuatHalaman'		=>	'Pages/DashBoard/akademik/manageMatkulProdi',
						'pesan'					=>	''
				);
				$this->parserTemplate($element_header);
			        break;

			    case "TK":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Manage Matakuliah',
				        'inisialisasiKodeAkun'	=>	'Teknik Komputer',
				        'nama_prodi'			=>	$nama_prodi,
						'webMuatHalaman'		=>	'Pages/DashBoard/akademik/manageMatkulProdi',
						'pesan'					=>	''
				);
				$this->parserTemplate($element_header);
			        break;

			    case "TM":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Manage Matakuliah',
				        'inisialisasiKodeAkun'	=>	'Teknik Mesin',
				        'nama_prodi'			=>	$nama_prodi,
						'webMuatHalaman'		=>	'Pages/DashBoard/akademik/manageMatkulProdi',
						'pesan'					=>	''
				);
				$this->parserTemplate($element_header);
			        break;

			    case "TO":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Manage Matakuliah',
				        'inisialisasiKodeAkun'	=>	'Teknik Otomasi',
				        'nama_prodi'			=>	$nama_prodi,
						'webMuatHalaman'		=>	'Pages/DashBoard/akademik/manageMatkulProdi',
						'pesan'					=>	''
				);
				$this->parserTemplate($element_header);
			        break;

			}	

	}
}

?>