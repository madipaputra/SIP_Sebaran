<?php


class PageDashBoard extends CI_Controller
{
		
		function __construct()
			{
				parent::__construct();
				$this->load->model('ProdiModel');
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
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/HomeDashBoard'
				);

				$this->parser->parse('Template/Dashboard/element_header', $element_header);
				$this->load->view('Template/Dashboard/element_footer');
			        break;

			    case "KA":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Dashboard Prodi',
				        'inisialisasiKodeAkun'	=>	'Komputerisasi Akuntansi',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/HomeDashBoard'
				);

				$this->parser->parse('Template/Dashboard/element_header', $element_header);
				$this->load->view('Template/Dashboard/element_footer');
			        break;

			    case "KB":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Dashboard Prodi',
				        'inisialisasiKodeAkun'	=>	'Konstruksi Bangunan',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/HomeDashBoard'
				);

				$this->parser->parse('Template/Dashboard/element_header', $element_header);
				$this->load->view('Template/Dashboard/element_footer');
			        break;

			    case "MID":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Dashboard Prodi',
				        'inisialisasiKodeAkun'	=>	'Mekatronik Industri & Desain',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/HomeDashBoard'
				);

				$this->parser->parse('Template/Dashboard/element_header', $element_header);
				$this->load->view('Template/Dashboard/element_footer');
			        break;

			    case "MK":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Dashboard Prodi',
				        'inisialisasiKodeAkun'	=>	'Mekatronik Industri & Desain / Mekatronik',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/HomeDashBoard'
				);

				$this->parser->parse('Template/Dashboard/element_header', $element_header);
				$this->load->view('Template/Dashboard/element_footer');
			        break;

			    case "AB":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Dashboard Prodi',
				        'inisialisasiKodeAkun'	=>	'MO / Alat Berat',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/HomeDashBoard'
				);

				$this->parser->parse('Template/Dashboard/element_header', $element_header);
				$this->load->view('Template/Dashboard/element_footer');
			        break;

			    case "MO":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Dashboard Prodi',
				        'inisialisasiKodeAkun'	=>	'MO / Mekanik Otomotif',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/HomeDashBoard'
				);

				$this->parser->parse('Template/Dashboard/element_header', $element_header);
				$this->load->view('Template/Dashboard/element_footer');
			        break;

			    case "RM":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Dashboard Prodi',
				        'inisialisasiKodeAkun'	=>	'Rekam Medik & Informasi Kesehatan',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/HomeDashBoard'
				);

				$this->parser->parse('Template/Dashboard/element_header', $element_header);
				$this->load->view('Template/Dashboard/element_footer');
			        break;

			    case "ALL":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Dashboard Prodi',
				        'inisialisasiKodeAkun'	=>	'Seluruh Prodi',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/HomeDashBoard'
				);

				$this->parser->parse('Template/Dashboard/element_header', $element_header);
				$this->load->view('Template/Dashboard/element_footer');
			        break;

			    case "TE":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Dashboard Prodi',
				        'inisialisasiKodeAkun'	=>	'Teknik Elektronika',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/HomeDashBoard'
				);

				$this->parser->parse('Template/Dashboard/element_header', $element_header);
				$this->load->view('Template/Dashboard/element_footer');
			        break;

			    case "IF":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Dashboard Prodi',
				        'inisialisasiKodeAkun'	=>	'Teknik Informatika',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/HomeDashBoard'
				);

				$this->parser->parse('Template/Dashboard/element_header', $element_header);
				$this->load->view('Template/Dashboard/element_footer');
			        break;

			    case "KIM":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Dashboard Prodi',
				        'inisialisasiKodeAkun'	=>	'Teknik Kimia',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/HomeDashBoard'
				);

				$this->parser->parse('Template/Dashboard/element_header', $element_header);
				$this->load->view('Template/Dashboard/element_footer');
			        break;

			    case "TK":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Dashboard Prodi',
				        'inisialisasiKodeAkun'	=>	'Teknik Komputer',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/HomeDashBoard'
				);

				$this->parser->parse('Template/Dashboard/element_header', $element_header);
				$this->load->view('Template/Dashboard/element_footer');
			        break;

			    case "TM":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Dashboard Prodi',
				        'inisialisasiKodeAkun'	=>	'Teknik Mesin',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/HomeDashBoard'
				);

				$this->parser->parse('Template/Dashboard/element_header', $element_header);
				$this->load->view('Template/Dashboard/element_footer');
			        break;

			    case "TO":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Dashboard Prodi',
				        'inisialisasiKodeAkun'	=>	'Teknik Otomasi',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/HomeDashBoard'
				);

				$this->parser->parse('Template/Dashboard/element_header', $element_header);
				$this->load->view('Template/Dashboard/element_footer');
			        break;
			}

		}

		public function ManageProdiPage()
		{
			switch ($this->session->kd_akun) {
			    case "AKA":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Manage Prodi',
				        'inisialisasiKodeAkun'	=>	'(Akademik)',
						'webMuatHalaman'		=>	'Pages/DashBoard/akademik/manageProdi',
						'pesan'					=>	'<div class="alert alert-warning alert-dismissible fade show" role="alert">
                  Percobaan Menampilkan Pesan
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>'
				);

				$this->parser->parse('Template/Dashboard/element_header', $element_header);
				$this->load->view('Template/Dashboard/element_footer');
			        break;

			    case "AK":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Manage Prodi',
				        'inisialisasiKodeAkun'	=>	'(Akuntansi)',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/manageProdi'
				);

				$this->parser->parse('Template/Dashboard/element_header', $element_header);
				$this->load->view('Template/Dashboard/element_footer');
			        break;

			    case "KA":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Manage Prodi',
				        'inisialisasiKodeAkun'	=>	'(Komputerisasi Akuntansi)',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/manageProdi'
				);

				$this->parser->parse('Template/Dashboard/element_header', $element_header);
				$this->load->view('Template/Dashboard/element_footer');
			        break;

			    case "KB":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Manage Prodi',
				        'inisialisasiKodeAkun'	=>	'(Konstruksi Bangunan)',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/manageProdi'
				);

				$this->parser->parse('Template/Dashboard/element_header', $element_header);
				$this->load->view('Template/Dashboard/element_footer');
			        break;

			    case "MID":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Manage Prodi',
				        'inisialisasiKodeAkun'	=>	'(Mekatronik Industri & Desain)',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/manageProdi'
				);

				$this->parser->parse('Template/Dashboard/element_header', $element_header);
				$this->load->view('Template/Dashboard/element_footer');
			        break;

			    case "MK":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Manage Prodi',
				        'inisialisasiKodeAkun'	=>	'(Mekatronik Industri & Desain / Mekatronik)',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/manageProdi'
				);

				$this->parser->parse('Template/Dashboard/element_header', $element_header);
				$this->load->view('Template/Dashboard/element_footer');
			        break;

			    case "AB":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Manage Prodi',
				        'inisialisasiKodeAkun'	=>	'(MO / Alat Berat)',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/manageProdi'
				);

				$this->parser->parse('Template/Dashboard/element_header', $element_header);
				$this->load->view('Template/Dashboard/element_footer');
			        break;

			    case "MO":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Manage Prodi',
				        'inisialisasiKodeAkun'	=>	'(MO / Mekanik Otomotif)',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/manageProdi'
				);

				$this->parser->parse('Template/Dashboard/element_header', $element_header);
				$this->load->view('Template/Dashboard/element_footer');
			        break;

			    case "RM":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Manage Prodi',
				        'inisialisasiKodeAkun'	=>	'(Rekam Medik & Informasi Kesehatan)',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/manageProdi'
				);

				$this->parser->parse('Template/Dashboard/element_header', $element_header);
				$this->load->view('Template/Dashboard/element_footer');
			        break;

			    case "ALL":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Manage Prodi',
				        'inisialisasiKodeAkun'	=>	'(Seluruh Prodi)',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/manageProdi'
				);

				$this->parser->parse('Template/Dashboard/element_header', $element_header);
				$this->load->view('Template/Dashboard/element_footer');
			        break;

			    case "TE":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Manage Prodi',
				        'inisialisasiKodeAkun'	=>	'(Teknik Elektronika)',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/manageProdi'
				);

				$this->parser->parse('Template/Dashboard/element_header', $element_header);
				$this->load->view('Template/Dashboard/element_footer');
			        break;

			    case "IF":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'manageProdi Prodi',
				        'inisialisasiKodeAkun'	=>	'(Teknik Informatika)',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/manageProdi'
				);

				$this->parser->parse('Template/Dashboard/element_header', $element_header);
				$this->load->view('Template/Dashboard/element_footer');
			        break;

			    case "KIM":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Manage Prodi',
				        'inisialisasiKodeAkun'	=>	'(Teknik Kimia)',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/manageProdi'
				);

				$this->parser->parse('Template/Dashboard/element_header', $element_header);
				$this->load->view('Template/Dashboard/element_footer');
			        break;

			    case "TK":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Manage Prodi',
				        'inisialisasiKodeAkun'	=>	'(Teknik Komputer)',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/manageProdi'
				);

				$this->parser->parse('Template/Dashboard/element_header', $element_header);
				$this->load->view('Template/Dashboard/element_footer');
			        break;

			    case "TM":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Manage Prodi',
				        'inisialisasiKodeAkun'	=>	'(Teknik Mesin)',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/manageProdi'
				);

				$this->parser->parse('Template/Dashboard/element_header', $element_header);
				$this->load->view('Template/Dashboard/element_footer');
			        break;

			    case "TO":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Manage Prodi',
				        'inisialisasiKodeAkun'	=>	'(Teknik Otomasi)',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/HomeDashBoard'
				);

				$this->parser->parse('Template/Dashboard/element_header', $element_header);
				$this->load->view('Template/Dashboard/element_footer');
			        break;
			}
		}

		public function ManageProdiAdd()
		{
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Manage Prodi (Add)',
				        'inisialisasiKodeAkun'	=>	'(Akademik)',
						'webMuatHalaman'		=>	'Pages/DashBoard/akademik/manageProdi',
						'pesan'					=>	'<div class="alert alert-warning alert-dismissible fade show" role="alert">
                  Percobaan Menampilkan Pesan
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>'
				);


		        $this->form_validation->set_rules('kd_prodiPOST', 'Kode Prodi', 
		          'required', array('required' => 'Kode Prodi Harus Diisi')
		        );

		        $this->form_validation->set_rules('nama_prodiPOST', 'Nama Prodi',
		          'required', array('required' => 'Nama Prodi Harus Diisi')
		        );

	            //Logika Form Validation
	              if ($this->form_validation->run() == FALSE)
	              {
	                $this->parser->parse('Template/element_header', $element_header);
	                $this->load->view('Template/element_footer');
	              }

	              else
	              {
	                $this->ProdiModel->insertProdi();
	                $element_header['pesan'] = '
	                  <div class="alert alert-success alert-dismissible fade show" role="alert">
	                  Data Prodi Berhasil Ditambahkan ke dalam Database
	                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	                      <span aria-hidden="true">&times;</span>
	                    </button>
	                  </div>
	                  ';

	                $this->parser->parse('Template/element_header', $element_header);
	                $this->load->view('Template/element_footer');              
	              }

		}

		public function ManageProdiEdit()
		{

		}
}