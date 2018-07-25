<?php


class PageDashBoard extends CI_Controller
{
		
		function __construct()
			{
				parent::__construct();
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
			        echo "Akuntansi";
			        break;
			    case "KA":
			        echo "Komputerisasi Akuntansi";
			        break;
			    case "KB":
			        echo "Konstruksi Bangunan";
			        break;
			    case "MID":
			        echo "Mekatronik Industri dan Desain";
			        break;
			    case "MK":
			        echo "Mekatronik Industri dan Desain / Mekatronik";
			        break;
			    case "AB":
			        echo "MO / Alat Berat";
			        break;
			    case "MO":
			        echo "MO / Mekanik Otomotif";
			        break;
			    case "RM":
			        echo "Rekam Medik dan Informasi Kesehatan";
			        break;
			    case "ALL":
			        echo "Seluruh Prodi";
			        break;
			    case "TE":
			        echo "Teknik Elektronika";
			        break;
			    case "IF":
			        echo "Teknik Informatika";
			        break;
			    case "KIM":
			        echo "Teknik Kimia";
			        break;
			    case "TK":
			        echo "Teknik Komputer";
			        break;
			    case "TM":
			        echo "Teknik Mesin";
			        break;
			    case "TO":
			        echo "Teknik Otomasi";
			        break;
			}

		}
}