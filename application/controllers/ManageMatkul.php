<?php


class ManageMatkul extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->cek_login();
		$this->load->model('MatkulModel');
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

			    case "KA":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Manage Matakuliah',
				        'inisialisasiKodeAkun'	=>	'Komputerisasi Akuntansi',
				        'nama_prodi'			=>	$nama_prodi,
						'webMuatHalaman'		=>	'Pages/DashBoard/akademik/manageMatkulProdi',
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

	public function ManageMatkulAdd()
	{
		$nama_prodi	=	$this->input->post('kodeProdiPOST');
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Manage Matkul (Add)',
				        'inisialisasiKodeAkun'	=>	'',
				        'nama_prodi'			=>	$nama_prodi,
						'webMuatHalaman'		=>	'Pages/DashBoard/akademik/manageMatkulProdi',
						'pesan'					=>	''
				);


		        $this->form_validation->set_rules('kd_matkulPOST', 'Kode Matakuliah', 
		          'required', array('required' => 'Kode Matakuliah Harus Diisi')
		        );

		        $this->form_validation->set_rules('nama_matkulPOST', 'Nm Prodi', 
		          'required', array('required' => 'Nama Prodi Harus Diisi')
		        );

		        $this->form_validation->set_rules('sks_teoriPOST', 'SKS Teori', 
		          'required', array('required' => 'Anda Harus Memilih Jumlah SKS Teori')
		        );

		        $this->form_validation->set_rules('sks_praktekPOST', 'SKS Praktek', 
		          'required', array('required' => 'Anda Harus Memilih Jumlah SKS Praktek')
		        );

	            //Logika Form Validation
	              if ($this->form_validation->run() == FALSE)
	              {
	                $this->parser->parse('Template/Dashboard/element_header', $element_header);
	                $this->load->view('Template/Dashboard/element_footer');
	              }

	              else
	              {
	                $this->MatkulModel->insertMatkul();
	                $element_header['pesan'] = '
	                  <div class="alert alert-success alert-dismissible fade show" role="alert">
	                  Data Dosen Berhasil Ditambahkan ke dalam Database
	                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	                      <span aria-hidden="true">&times;</span>
	                    </button>
	                  </div>
	                  ';

	                $this->parser->parse('Template/Dashboard/element_header', $element_header);
	                $this->load->view('Template/Dashboard/element_footer');              
	              }
	}

	public function ManageMatkulVerifyPage()
	{
			switch ($this->session->kd_akun) {
			    case "AKA":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Halaman Persetujuan Mtakuliah (List Prodi)',
				        'inisialisasiKodeAkun'	=>	'Akademik',
						'webMuatHalaman'		=>	'Pages/DashBoard/akademik/verifyMatkul',
						'pesan'					=>	''
				);
				$this->parserTemplate($element_header);
			        break;

			    case "AK":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Halaman Persetujuan Mtakuliah (List Prodi)',
				        'inisialisasiKodeAkun'	=>	'Akuntansi',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/verifyMatkul'
				);
				$this->parserTemplate($element_header);
			        break;

			    case "KA":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Halaman Persetujuan Mtakuliah (List Prodi)',
				        'inisialisasiKodeAkun'	=>	'Komputerisasi Akuntansi',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/verifyMatkul'
				);
				$this->parserTemplate($element_header);
			        break;

			    case "KB":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Halaman Persetujuan Mtakuliah (List Prodi)',
				        'inisialisasiKodeAkun'	=>	'Konstruksi Bangunan',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/verifyMatkul'
				);
				$this->parserTemplate($element_header);
			        break;

			    case "MID":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Halaman Persetujuan Mtakuliah (List Prodi)',
				        'inisialisasiKodeAkun'	=>	'Mekatronik Industri & Desain',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/verifyMatkul'
				);
				$this->parserTemplate($element_header);
			        break;

			    case "MK":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Halaman Persetujuan Mtakuliah (List Prodi)',
				        'inisialisasiKodeAkun'	=>	'Mekatronik Industri & Desain / Mekatronik',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/verifyMatkul'
				);
				$this->parserTemplate($element_header);
			        break;

			    case "AB":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Halaman Persetujuan Mtakuliah (List Prodi)',
				        'inisialisasiKodeAkun'	=>	'MO / Alat Berat',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/verifyMatkul'
				);
				$this->parserTemplate($element_header);
			        break;

			    case "MO":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Halaman Persetujuan Mtakuliah (List Prodi)',
				        'inisialisasiKodeAkun'	=>	'MO / Mekanik Otomotif',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/verifyMatkul'
				);
				$this->parserTemplate($element_header);
			        break;

			    case "RM":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Halaman Persetujuan Mtakuliah (List Prodi)',
				        'inisialisasiKodeAkun'	=>	'Rekam Medik & Informasi Kesehatan',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/verifyMatkul'
				);
				$this->parserTemplate($element_header);
			        break;

			    case "ALL":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Halaman Persetujuan Mtakuliah (List Prodi)',
				        'inisialisasiKodeAkun'	=>	'Seluruh Prodi',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/verifyMatkul'
				);
				$this->parserTemplate($element_header);
			        break;

			    case "TE":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Halaman Persetujuan Mtakuliah (List Prodi)',
				        'inisialisasiKodeAkun'	=>	'Teknik Elektronika',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/verifyMatkul'
				);
				$this->parserTemplate($element_header);
			        break;

			    case "IF":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Halaman Persetujuan Mtakuliah (List Prodi)',
				        'inisialisasiKodeAkun'	=>	'Teknik Informatika',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/verifyMatkul'
				);
			    $this->parserTemplate($element_header);
			        break;

			    case "KIM":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Halaman Persetujuan Mtakuliah (List Prodi)',
				        'inisialisasiKodeAkun'	=>	'Teknik Kimia',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/verifyMatkul'
				);
				$this->parserTemplate($element_header);
			        break;

			    case "TK":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Halaman Persetujuan Mtakuliah (List Prodi)',
				        'inisialisasiKodeAkun'	=>	'Teknik Komputer',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/verifyMatkul'
				);
				$this->parserTemplate($element_header);
			        break;

			    case "TM":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Halaman Persetujuan Mtakuliah (List Prodi)',
				        'inisialisasiKodeAkun'	=>	'Teknik Mesin',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/verifyMatkul'
				);
				$this->parserTemplate($element_header);
			        break;

			    case "TO":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Halaman Persetujuan Mtakuliah (List Prodi)',
				        'inisialisasiKodeAkun'	=>	'Teknik Otomasi',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/verifyMatkul'
				);
				$this->parserTemplate($element_header);
			        break;

			}
	}

	public function MatkulProdiVerifyPage()
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
				        'webBagian'				=>	'Halaman Persetujuan Matakuliah yng diajukan oleh Prodi ',
				        'inisialisasiKodeAkun'	=>	'Akuntansi',
				        'nama_prodi'			=>	$nama_prodi,
						'webMuatHalaman'		=>	'Pages/DashBoard/akademik/verifyMatkulProdi',
						'pesan'					=>	''
				);
				$this->parserTemplate($element_header);
			        break;

			    case "KA":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Halaman Persetujuan Matakuliah yng diajukan oleh Prodi ',
				        'inisialisasiKodeAkun'	=>	'Komputerisasi Akuntansi',
				        'nama_prodi'			=>	$nama_prodi,
						'webMuatHalaman'		=>	'Pages/DashBoard/akademik/verifyMatkulProdi',
						'pesan'					=>	''
				);
				$this->parserTemplate($element_header);
			        break;

			    case "KB":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Halaman Persetujuan Matakuliah yng diajukan oleh Prodi ',
				        'inisialisasiKodeAkun'	=>	'Konstruksi Bangunan',
				        'nama_prodi'			=>	$nama_prodi,
						'webMuatHalaman'		=>	'Pages/DashBoard/akademik/verifyMatkulProdi',
						'pesan'					=>	''
				);
				$this->parserTemplate($element_header);
			        break;

			    case "MID":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Halaman Persetujuan Matakuliah yng diajukan oleh Prodi ',
				        'inisialisasiKodeAkun'	=>	'Mekatronik Industri & Desain',
				        'nama_prodi'			=>	$nama_prodi,
						'webMuatHalaman'		=>	'Pages/DashBoard/akademik/verifyMatkulProdi',
						'pesan'					=>	''
				);
				$this->parserTemplate($element_header);
			        break;

			    case "MK":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Halaman Persetujuan Matakuliah yng diajukan oleh Prodi ',
				        'inisialisasiKodeAkun'	=>	'Mekatronik Industri & Desain / Mekatronik',
				        'nama_prodi'			=>	$nama_prodi,
						'webMuatHalaman'		=>	'Pages/DashBoard/akademik/verifyMatkulProdi',
						'pesan'					=>	''
				);
				$this->parserTemplate($element_header);
			        break;

			    case "AB":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Halaman Persetujuan Matakuliah yng diajukan oleh Prodi ',
				        'inisialisasiKodeAkun'	=>	'MO / Alat Berat',
				        'nama_prodi'			=>	$nama_prodi,
						'webMuatHalaman'		=>	'Pages/DashBoard/akademik/verifyMatkulProdi',
						'pesan'					=>	''
				);
				$this->parserTemplate($element_header);
			        break;

			    case "MO":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Halaman Persetujuan Matakuliah yng diajukan oleh Prodi ',
				        'inisialisasiKodeAkun'	=>	'MO / Mekanik Otomotif',
				        'nama_prodi'			=>	$nama_prodi,
						'webMuatHalaman'		=>	'Pages/DashBoard/akademik/verifyMatkulProdi',
						'pesan'					=>	''
				);
				$this->parserTemplate($element_header);
			        break;

			    case "RM":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Halaman Persetujuan Matakuliah yng diajukan oleh Prodi ',
				        'inisialisasiKodeAkun'	=>	'Rekam Medik & Informasi Kesehatan',
				        'nama_prodi'			=>	$nama_prodi,
						'webMuatHalaman'		=>	'Pages/DashBoard/akademik/verifyMatkulProdi',
						'pesan'					=>	''
				);
				$this->parserTemplate($element_header);
			        break;

			    case "ALL":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Halaman Persetujuan Matakuliah yng diajukan oleh Prodi ',
				        'inisialisasiKodeAkun'	=>	'Seluruh Prodi',
				        'nama_prodi'			=>	$nama_prodi,
						'webMuatHalaman'		=>	'Pages/DashBoard/akademik/verifyMatkulProdi',
						'pesan'					=>	''
				);
				$this->parserTemplate($element_header);
			        break;

			    case "TE":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Halaman Persetujuan Matakuliah yng diajukan oleh Prodi ',
				        'inisialisasiKodeAkun'	=>	'Teknik Elektronika',
				        'nama_prodi'			=>	$nama_prodi,
						'webMuatHalaman'		=>	'Pages/DashBoard/akademik/verifyMatkulProdi',
						'pesan'					=>	''
				);
				$this->parserTemplate($element_header);
			        break;

			    case "IF":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Halaman Persetujuan Matakuliah yng diajukan oleh Prodi ',
				        'inisialisasiKodeAkun'	=>	'Teknik Informatika',
				        'nama_prodi'			=>	$nama_prodi,
						'webMuatHalaman'		=>	'Pages/DashBoard/akademik/verifyMatkulProdi',
						'pesan'					=>	''
				);
			    $this->parserTemplate($element_header);
			        break;

			    case "KIM":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Halaman Persetujuan Matakuliah yng diajukan oleh Prodi ',
				        'inisialisasiKodeAkun'	=>	'Teknik Kimia',
				        'nama_prodi'			=>	$nama_prodi,
						'webMuatHalaman'		=>	'Pages/DashBoard/akademik/verifyMatkulProdi',
						'pesan'					=>	''
				);
				$this->parserTemplate($element_header);
			        break;

			    case "TK":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Halaman Persetujuan Matakuliah yng diajukan oleh Prodi ',
				        'inisialisasiKodeAkun'	=>	'Teknik Komputer',
				        'nama_prodi'			=>	$nama_prodi,
						'webMuatHalaman'		=>	'Pages/DashBoard/akademik/verifyMatkulProdi',
						'pesan'					=>	''
				);
				$this->parserTemplate($element_header);
			        break;

			    case "TM":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Halaman Persetujuan Matakuliah yng diajukan oleh Prodi ',
				        'inisialisasiKodeAkun'	=>	'Teknik Mesin',
				        'nama_prodi'			=>	$nama_prodi,
						'webMuatHalaman'		=>	'Pages/DashBoard/akademik/verifyMatkulProdi',
						'pesan'					=>	''
				);
				$this->parserTemplate($element_header);
			        break;

			    case "TO":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Halaman Persetujuan Matakuliah yng diajukan oleh Prodi ',
				        'inisialisasiKodeAkun'	=>	'Teknik Otomasi',
				        'nama_prodi'			=>	$nama_prodi,
						'webMuatHalaman'		=>	'Pages/DashBoard/akademik/verifyMatkulProdi',
						'pesan'					=>	''
				);
				$this->parserTemplate($element_header);
			        break;

			}		
	}

	public function MatkulProdiVerifyNOW()
	{
		$nama_prodi	=	$this->input->post('kodeProdiPOST');
				if ($this->input->post('id_matkulPOST') == "") 
				{
					redirect(base_url().'dashboard/akademik/manageMatkul/verifyMatkulProdi/');
				}
				else
				{
				$element_header	=	array(
					'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
					 'webBagian'			=>	'Persetujuan Matakuliah',
					 'inisialisasiKodeAkun'	=>	'Akademik',
					'webMuatHalaman'		=>	'Pages/DashBoard/akademik/verifyMatkulProdi',
				        'nama_prodi'			=>	$nama_prodi,
		        	'id_matkul'				=>	$this->input->post('id_matkulPOST'),
		        	'kd_matkul'				=>	$this->input->post('kd_matkulPOST'),
		        	'nama_matkul'			=>	$this->input->post('nama_matkulPOST'),
		        	'sks'					=>	$this->input->post('sksPOST'),
		        	'sks_teori'				=>	$this->input->post('sks_teoriPOST'),
		        	'sks_praktek'			=>	$this->input->post('sks_praktekPOST'),
		        	'kd_prodi'				=>	$this->input->post('kd_prodiPOST'),
		        	'status'				=>	$this->input->post('statusPOST'),
		        	'alasan_ditolak'		=>	$this->input->post('alasanPOST'),
							'pesan'		=>	'
					<div class="alert alert-success alert-dismissible fade show" role="alert">
		            	Matkuliah  <b>'.$this->input->post('nama_matkulPOST').'</b> Telah Disetujui. Matkul tersebut sudah bisa dimasukkan ke Data Sebaran!.
		            	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		            	<span aria-hidden="true">&times;</span>
		            	</button>
		            </div>
							');
						$this->MatkulModel->verifyMatkul($element_header);
						$this->parserTemplate($element_header);
				}
	}

	public function MatkulProdiAbortNOW()
	{
		$nama_prodi	=	$this->input->post('kodeProdiPOST');
				if ($this->input->post('id_matkulPOST') == "") 
				{
					redirect(base_url().'dashboard/akademik/manageMatkul/verifyMatkulProdi/');
				}
				else
				{
				$element_header	=	array(
					'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
					 'webBagian'			=>	'Persetujuan Matakuliah',
					 'inisialisasiKodeAkun'	=>	'Akademik',
					'webMuatHalaman'		=>	'Pages/DashBoard/akademik/verifyMatkulProdi',
				        'nama_prodi'			=>	$nama_prodi,
		        	'id_matkul'				=>	$this->input->post('id_matkulPOST'),
		        	'kd_matkul'				=>	$this->input->post('kd_matkulPOST'),
		        	'nama_matkul'			=>	$this->input->post('nama_matkulPOST'),
		        	'sks'					=>	$this->input->post('sksPOST'),
		        	'sks_teori'				=>	$this->input->post('sks_teoriPOST'),
		        	'sks_praktek'			=>	$this->input->post('sks_praktekPOST'),
		        	'kd_prodi'				=>	$this->input->post('kd_prodiPOST'),
		        	'status'				=>	$this->input->post('statusPOST'),
		        	'alasan_ditolak'		=>	$this->input->post('alasanPOST'),
							'pesan'		=>	'
					<div class="alert alert-warning alert-dismissible fade show" role="alert">
		            	Matkuliah  <b>'.$this->input->post('nama_matkulPOST').'</b> Telah Ditolak. Matkul tersebut tidak akan ditampilkan ke bagian Sebaran, karena syarat sebelum sebaran dibuat adalah matakuliah sudah disetujui terlebih dahulu!.
		            	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		            	<span aria-hidden="true">&times;</span>
		            	</button>
		            </div>
							');
						$this->MatkulModel->verifyMatkul($element_header);
						$this->parserTemplate($element_header);
				}		
	}
}

?>