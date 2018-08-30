s<?php


class PageDashBoard extends CI_Controller
{
		
	function __construct()
	{
		parent::__construct();
		$this->cek_login();
		$this->load->model('ProdiModel');
	}

	public function cek_login()
	{
		if ($this->session->userdata('username') == "" || $this->session->userdata('kd_akun') == "" || $this->session->userdata('id_akun') == "") 
		{
			redirect(base_url());
		}
	}


		function parserTemplate($element_header)
		{
				$this->parser->parse('Template/Dashboard/element_header', $element_header);
				$this->load->view('Template/Dashboard/element_footer');
		}

		public function DashBoardPage()
		{
			//echo $this->session->username;
			//echo $this->session->kd_akun;
			//echo $this->session->id_akun;

			switch ($this->session->kd_akun) {
			    case "AKA":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Dashboard',
				        'inisialisasiKodeAkun'	=>	'Akademik',
						'webMuatHalaman'		=>	'Pages/DashBoard/akademik/HomeDashBoard'

				);

				$this->parser->parse('Template/Dashboard/element_header', $element_header);
				$this->load->view('Template/Dashboard/element_footer');
			        break;

			    case "AK":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Dashboard Prodi',
				        'inisialisasiKodeAkun'	=>	'Akuntansi',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/HomeDashBoard',
						'kode_prodi'			=>	$this->session->kd_akun
				);

				$this->parser->parse('Template/Dashboard/element_header', $element_header);
				$this->load->view('Template/Dashboard/element_footer');
			        break;

			    case "KA":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Dashboard Prodi',
				        'inisialisasiKodeAkun'	=>	'Komputerisasi Akuntansi',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/HomeDashBoard',
						'kode_prodi'			=>	$this->session->kd_akun
				);

				$this->parser->parse('Template/Dashboard/element_header', $element_header);
				$this->load->view('Template/Dashboard/element_footer');
			        break;

			    case "KB":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Dashboard Prodi',
				        'inisialisasiKodeAkun'	=>	'Konstruksi Bangunan',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/HomeDashBoard',
						'kode_prodi'			=>	$this->session->kd_akun
				);

				$this->parser->parse('Template/Dashboard/element_header', $element_header);
				$this->load->view('Template/Dashboard/element_footer');
			        break;

			    case "MID":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Dashboard Prodi',
				        'inisialisasiKodeAkun'	=>	'Mekatronik Industri & Desain',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/HomeDashBoard',
						'kode_prodi'			=>	$this->session->kd_akun
				);

				$this->parser->parse('Template/Dashboard/element_header', $element_header);
				$this->load->view('Template/Dashboard/element_footer');
			        break;

			    case "MK":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Dashboard Prodi',
				        'inisialisasiKodeAkun'	=>	'Mekatronik Industri & Desain / Mekatronik',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/HomeDashBoard',
						'kode_prodi'			=>	$this->session->kd_akun
				);

				$this->parser->parse('Template/Dashboard/element_header', $element_header);
				$this->load->view('Template/Dashboard/element_footer');
			        break;

			    case "AB":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Dashboard Prodi',
				        'inisialisasiKodeAkun'	=>	'MO / Alat Berat',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/HomeDashBoard',
						'kode_prodi'			=>	$this->session->kd_akun
				);

				$this->parser->parse('Template/Dashboard/element_header', $element_header);
				$this->load->view('Template/Dashboard/element_footer');
			        break;

			    case "MO":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Dashboard Prodi',
				        'inisialisasiKodeAkun'	=>	'MO / Mekanik Otomotif',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/HomeDashBoard',
						'kode_prodi'			=>	$this->session->kd_akun
				);

				$this->parser->parse('Template/Dashboard/element_header', $element_header);
				$this->load->view('Template/Dashboard/element_footer');
			        break;

			    case "RM":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Dashboard Prodi',
				        'inisialisasiKodeAkun'	=>	'Rekam Medik & Informasi Kesehatan',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/HomeDashBoard',
						'kode_prodi'			=>	$this->session->kd_akun
				);

				$this->parser->parse('Template/Dashboard/element_header', $element_header);
				$this->load->view('Template/Dashboard/element_footer');
			        break;

			    case "ALL":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Dashboard Prodi',
				        'inisialisasiKodeAkun'	=>	'Seluruh Prodi',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/HomeDashBoard',
						'kode_prodi'			=>	$this->session->kd_akun
				);

				$this->parser->parse('Template/Dashboard/element_header', $element_header);
				$this->load->view('Template/Dashboard/element_footer');
			        break;

			    case "TE":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Dashboard Prodi',
				        'inisialisasiKodeAkun'	=>	'Teknik Elektronika',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/HomeDashBoard',
						'kode_prodi'			=>	$this->session->kd_akun
				);

				$this->parser->parse('Template/Dashboard/element_header', $element_header);
				$this->load->view('Template/Dashboard/element_footer');
			        break;

			    case "IF":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Dashboard Prodi',
				        'inisialisasiKodeAkun'	=>	'Teknik Informatika',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/HomeDashBoard',
						'kode_prodi'			=>	$this->session->kd_akun
				);

				$this->parser->parse('Template/Dashboard/element_header', $element_header);
				$this->load->view('Template/Dashboard/element_footer');
			        break;

			    case "KIM":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Dashboard Prodi',
				        'inisialisasiKodeAkun'	=>	'Teknik Kimia',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/HomeDashBoard',
						'kode_prodi'			=>	$this->session->kd_akun
				);

				$this->parser->parse('Template/Dashboard/element_header', $element_header);
				$this->load->view('Template/Dashboard/element_footer');
			        break;

			    case "TK":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Dashboard Prodi',
				        'inisialisasiKodeAkun'	=>	'Teknik Komputer',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/HomeDashBoard',
						'kode_prodi'			=>	$this->session->kd_akun
				);

				$this->parser->parse('Template/Dashboard/element_header', $element_header);
				$this->load->view('Template/Dashboard/element_footer');
			        break;

			    case "TM":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Dashboard Prodi',
				        'inisialisasiKodeAkun'	=>	'Teknik Mesin',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/HomeDashBoard',
						'kode_prodi'			=>	$this->session->kd_akun
				);

				$this->parser->parse('Template/Dashboard/element_header', $element_header);
				$this->load->view('Template/Dashboard/element_footer');
			        break;

			    case "TO":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Dashboard Prodi',
				        'inisialisasiKodeAkun'	=>	'Teknik Otomasi',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/HomeDashBoard',
						'kode_prodi'			=>	$this->session->kd_akun
				);

				$this->parser->parse('Template/Dashboard/element_header', $element_header);
				$this->load->view('Template/Dashboard/element_footer');
			        break;
			}

		}


}