<?php

/**
 * 
 */
class ManageDosen extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->cek_login();
		$this->load->model('DosenModel');
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

		public function ManageDosenPage()
		{
			switch ($this->session->kd_akun) {
			    case "AKA":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Manage Dosen',
				        'inisialisasiKodeAkun'	=>	'Akademik',
						'webMuatHalaman'		=>	'Pages/DashBoard/akademik/manageDosen',
						'pesan'					=>	''
				);
				$this->parserTemplate($element_header);
			        break;

			    case "AK":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Manage Dosen',
				        'inisialisasiKodeAkun'	=>	'Akuntansi',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/manageProdi'
				);
				$this->parserTemplate($element_header);
			        break;

			    case "KA":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Manage Dosen',
				        'inisialisasiKodeAkun'	=>	'Komputerisasi Akuntansi',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/manageProdi'
				);
				$this->parserTemplate($element_header);
			        break;

			    case "KB":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Manage Dosen',
				        'inisialisasiKodeAkun'	=>	'Konstruksi Bangunan',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/manageProdi'
				);
				$this->parserTemplate($element_header);
			        break;

			    case "MID":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Manage Dosen',
				        'inisialisasiKodeAkun'	=>	'Mekatronik Industri & Desain',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/manageProdi'
				);
				$this->parserTemplate($element_header);
			        break;

			    case "MK":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Manage Dosen',
				        'inisialisasiKodeAkun'	=>	'Mekatronik Industri & Desain / Mekatronik',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/manageProdi'
				);
				$this->parserTemplate($element_header);
			        break;

			    case "AB":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Manage Dosen',
				        'inisialisasiKodeAkun'	=>	'MO / Alat Berat',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/manageProdi'
				);
				$this->parserTemplate($element_header);
			        break;

			    case "MO":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Manage Dosen',
				        'inisialisasiKodeAkun'	=>	'MO / Mekanik Otomotif',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/manageProdi'
				);
				$this->parserTemplate($element_header);
			        break;

			    case "RM":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Manage Dosen',
				        'inisialisasiKodeAkun'	=>	'Rekam Medik & Informasi Kesehatan',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/manageProdi'
				);
				$this->parserTemplate($element_header);
			        break;

			    case "ALL":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Manage Dosen',
				        'inisialisasiKodeAkun'	=>	'Seluruh Prodi',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/manageProdi'
				);
				$this->parserTemplate($element_header);
			        break;

			    case "TE":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Manage Dosen',
				        'inisialisasiKodeAkun'	=>	'Teknik Elektronika',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/manageProdi'
				);
				$this->parserTemplate($element_header);
			        break;

			    case "IF":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Manage Dosen',
				        'inisialisasiKodeAkun'	=>	'Teknik Informatika',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/manageProdi'
				);
			    $this->parserTemplate($element_header);
			        break;

			    case "KIM":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Manage Dosen',
				        'inisialisasiKodeAkun'	=>	'Teknik Kimia',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/manageProdi'
				);
				$this->parserTemplate($element_header);
			        break;

			    case "TK":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Manage Dosen',
				        'inisialisasiKodeAkun'	=>	'Teknik Komputer',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/manageProdi'
				);
				$this->parserTemplate($element_header);
			        break;

			    case "TM":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Manage Dosen',
				        'inisialisasiKodeAkun'	=>	'Teknik Mesin',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/manageProdi'
				);
				$this->parserTemplate($element_header);
			        break;

			    case "TO":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Manage Dosen',
				        'inisialisasiKodeAkun'	=>	'Teknik Otomasi',
						'webMuatHalaman'		=>	'Pages/DashBoard/prodi/HomeDashBoard'
				);
				$this->parserTemplate($element_header);
			        break;

			}
		}

		public function ManageDosenAdd()
		{
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Manage Dosen (Add)',
				        'inisialisasiKodeAkun'	=>	'(Akademik)',
						'webMuatHalaman'		=>	'Pages/DashBoard/akademik/manageDosen',
						'pesan'					=>	''
				);


		        $this->form_validation->set_rules('nama_dosenPOST', 'Nama Dosen', 
		          'required', array('required' => 'Nama Dosen Harus Diisi')
		        );

	            //Logika Form Validation
	              if ($this->form_validation->run() == FALSE)
	              {
	                $this->parser->parse('Template/Dashboard/element_header', $element_header);
	                $this->load->view('Template/Dashboard/element_footer');
	              }

	              else
	              {
	                $this->DosenModel->insertDosen();
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

		public function ManageDosenDelete()
		{

				if ($this->input->post('idPOST') == "") 
				{
					$element_header	=	array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Manage Dosen (Delete)',
				        'inisialisasiKodeAkun'	=>	'(Akademik)',
						'webMuatHalaman'		=>	'Pages/DashBoard/akademik/ManageDosen',
						'pesan'		=>	'');
					$this->parserTemplate($element_header);
				}
				else
				{
					$element_header	=	array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Manage Dosen (Delete)',
				        'inisialisasiKodeAkun'	=>	'(Akademik)',
						'webMuatHalaman'		=>	'Pages/DashBoard/akademik/ManageDosen',
						'id_dosen'	=> $this->input->post('idPOST'),
						'pesan'		=>	'
				<div class="alert alert-success alert-dismissible fade show" role="alert">
	            	Data Dosen <b>'.$this->input->post('nama_dosenPOST').'</b> Berhasil Dihapus dari Database
	            	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	            	<span aria-hidden="true">&times;</span>
	            	</button>
	            </div>
						');
					$this->DosenModel->deleteDosen($element_header);
					$this->parserTemplate($element_header);
				}
		}

		public function ManageDosenEdit()
		{
				if ($this->input->post('idPOST') == "") 
				{
					redirect(base_url().'dashboard/akademik/manageDosen');
				}
				else
				{
				$element_header	=	array(
					'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
					 'webBagian'				=>	'Manage Dosen (Update)',
					 'inisialisasiKodeAkun'	=>	'Akademik',
					'webMuatHalaman'		=>	'Pages/DashBoard/akademik/ManageDosen',
		        	'id_dosen'				=>	$this->input->post('idPOST'),
		        	'nama_dosen'				=>	$this->input->post('nama_dosenPOST'),
		        	'nidn'			=>	$this->input->post('nidnPOST'),
							'pesan'		=>	'
					<div class="alert alert-success alert-dismissible fade show" role="alert">
		            	Informasi Data Dosen '.$this->input->post('nama_dosenPOST').' Berhasil Diperbarui
		            	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		            	<span aria-hidden="true">&times;</span>
		            	</button>
		            </div>
							');
						$this->DosenModel->updateDosen($element_header);
						$this->parserTemplate($element_header);
				}
		}

}