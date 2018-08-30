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

		function logikaPencarian($element_header)
		{
		        $this->form_validation->set_rules('keywordPOST', 'Kata Kunci Pencarian', 
			          'required', array('required' => 'Kata Kunci Harus Diisi')
			        );

			        $this->form_validation->set_rules('fieldPOST', 'Field Table',
			          'required', array('required' => 'Anda Harus Memilih salah satu pilihan Pencarian Berdasarkan')
			        );

		            //Logika Form Validation
		              if ($this->form_validation->run() == FALSE)
		              {
		              	redirect(base_url().'dashboard/akademik/manageDosen/');
		              }
		              else
		              {
		              	$this->parserTemplate($element_header);
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
				        'webBagian'				=>	'Halaman Dosen',
				        'inisialisasiKodeAkun'	=>	'Akademik',
						'webMuatHalaman'		=>	'Pages/DashBoard/akademik/manageDosen',
						'pesan'					=>	''
				);
				$this->parserTemplate($element_header);
			        break;

			}
		}

		public function ManageDosenAdd()
		{
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Halaman Dosen (Add)',
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
	                  <i class="fas fa-check-circle"></i> Data Dosen Berhasil Ditambahkan ke dalam Database
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
	            	<i class="fas fa-check-circle"></i> Data Dosen <b>'.$this->input->post('nama_dosenPOST').'</b> Berhasil Dihapus dari Database
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
		            	<i class="fas fa-check-circle"></i> Informasi Data Dosen '.$this->input->post('nama_dosenPOST').' Berhasil Diperbarui
		            	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		            	<span aria-hidden="true">&times;</span>
		            	</button>
		            </div>
							');
						$this->DosenModel->updateDosen($element_header);
						$this->parserTemplate($element_header);
				}
		}

		public function ManageDosenSearch()
		{
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Halaman Pencarian Dosen',
				        'inisialisasiKodeAkun'	=>	'Akademik',
						'webMuatHalaman'		=>	'Pages/DashBoard/akademik/ManageDosenSearch',
						'pesan'					=>	'',
						'keywordData'			=>	$this->input->post('keywordPOST'),
						'fieldTable'			=>	$this->input->post('fieldPOST')
				);

				$this->logikaPencarian($element_header);

		}

}