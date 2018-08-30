<?php

/**
 * 
 */
class ManageProdi extends CI_Controller
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

		public function ManageProdiPage()
		{
			switch ($this->session->kd_akun) {
			    case "AKA":
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Halaman Prodi',
				        'inisialisasiKodeAkun'	=>	'(Akademik)',
						'webMuatHalaman'		=>	'Pages/DashBoard/akademik/manageProdi',
						'pesan'					=>	''
				);
				$this->parserTemplate($element_header);
			        break;

			}
		}

		public function ManageProdiAdd()
		{
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Halaman Prodi (Add)',
				        'inisialisasiKodeAkun'	=>	'(Akademik)',
						'webMuatHalaman'		=>	'Pages/DashBoard/akademik/manageProdi',
						'pesan'					=>	''
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
	                $this->parser->parse('Template/Dashboard/element_header', $element_header);
	                $this->load->view('Template/Dashboard/element_footer');
	              }

	              else
	              {
	                $this->ProdiModel->insertProdi();
	                $element_header['pesan'] = '
	                  <div class="alert alert-success alert-dismissible fade show" role="alert">
	                  <i class="fas fa-check-circle"></i> Data Prodi Berhasil Ditambahkan ke dalam Database
	                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	                      <span aria-hidden="true">&times;</span>
	                    </button>
	                  </div>
	                  ';

	                $this->parser->parse('Template/Dashboard/element_header', $element_header);
	                $this->load->view('Template/Dashboard/element_footer');              
	              }

		}

		public function ManageProdiSearch()
		{
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Halaman Prodi (Add)',
				        'inisialisasiKodeAkun'	=>	'(Akademik)',
						'webMuatHalaman'		=>	'Pages/DashBoard/akademik/ManageProdiSearch',
						'pesan'					=>	'',
						'keywordData'			=>	$this->input->post('keywordPOST'),
						'fieldTable'			=>	$this->input->post('fieldPOST')
				);

		        $this->form_validation->set_rules('keywordPOST', 'Kata Kunci Pencarian', 
		          'required', array('required' => 'Kata Kunci Harus Diisi')
		        );

		        $this->form_validation->set_rules('fieldPOST', 'Field Table',
		          'required', array('required' => 'Anda Harus Memilih salah satu pilihan Pencarian Berdasarkan')
		        );

	            //Logika Form Validation
	              if ($this->form_validation->run() == FALSE)
	              {
	              	redirect(base_url().'dashboard/akademik/manageProdi/');
	              }
	              else
	              {
	              	$this->parserTemplate($element_header);
	              }

		}

		public function ManageProdiDelete()
		{

				if ($this->input->post('idPOST') == "") 
				{
					$element_header	=	array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Halaman Prodi (Delete)',
				        'inisialisasiKodeAkun'	=>	'(Akademik)',
						'webMuatHalaman'		=>	'Pages/DashBoard/akademik/ManageProdi',
						'pesan'		=>	'');
					$this->parserTemplate($element_header);
				}
				else
				{
					$element_header	=	array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Manage Prodi (Delete)',
				        'inisialisasiKodeAkun'	=>	'(Akademik)',
						'webMuatHalaman'		=>	'Pages/DashBoard/akademik/ManageProdi',
						'id_prodi'	=> $this->input->post('idPOST'),
						'pesan'		=>	'
				<div class="alert alert-success alert-dismissible fade show" role="alert">
	            	<i class="fas fa-check-circle"></i> Data Prodi <b>'.$this->input->post('nama_prodiPOST').'</b> Berhasil Dihapus dari Database
	            	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	            	<span aria-hidden="true">&times;</span>
	            	</button>
	            </div>
						');
					$this->ProdiModel->deleteProdi($element_header);
					$this->parserTemplate($element_header);
				}
		}

		public function ManageProdiEdit()
		{
				if ($this->input->post('idPOST') == "") 
				{
					// $this->parserTemplate($element_header);
				}
				else
				{
				$element_header	=	array(
					'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
					 'webBagian'			=>	'Halaman Prodi (Update)',
					 'inisialisasiKodeAkun'	=>	'(Akademik)',
					'webMuatHalaman'		=>	'Pages/DashBoard/akademik/ManageProdi',
		        	'id_prodi'				=>	$this->input->post('idPOST'),
		        	'kd_prodi'				=>	$this->input->post('kd_prodiPOST'),
		        	'nama_prodi'			=>	$this->input->post('nama_prodiPOST'),
							'pesan'		=>	'
					<div class="alert alert-success alert-dismissible fade show" role="alert">
		            	<i class="fas fa-check-circle"></i> Informasi Data Prodi <b>'.$this->input->post('nama_prodiPOST').'</b> Berhasil Diperbarui
		            	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		            	<span aria-hidden="true">&times;</span>
		            	</button>
		            </div>
							');
						$this->ProdiModel->updateProdi($element_header);
						$this->parserTemplate($element_header);
				}
		}

}