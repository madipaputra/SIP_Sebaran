<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
  Controller SIP Sebaran Matakuliah Default.
    
    Ada beberapa function di Controller ini

    - function 

 */

class Sip_sebaran extends CI_Controller {

	function __construct()
	{
	    parent::__construct();
	    $this->load->database();
		$this->load->model('akun');
	}

	public function index(){}

			//function yang menampilkan halaman login
			public function loginPage()
			{

				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Halaman Login',
								'webMuatHalaman'	=>	'Pages/login'
				);

				$this->parser->parse('Template/element_header', $element_header);
				$this->load->view('Template/element_footer');
			}

			//function yang menampilkan halaman login
			public function doLogin()
			{

				$element_header = array(
				 'webJudul'			=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				 'webBagian'		=>	'Halaman Login',
				 'webMuatHalaman'	=>	'Pages/login',
				 'pesan'			=>	''
				);

		        $this->form_validation->set_rules('usernamePOST', 'Username',
		          'required', array('required' => 'Username Harus Diisi')
		        );
		        $this->form_validation->set_rules('passwordPOST', 'Password', 
		          'required', array('required' => 'Password Harus Diisi'));

	            //Logika Form Validation
	              if ($this->form_validation->run() == FALSE)
	              {
	                $this->parser->parse('Template/element_header', $element_header);
	                $this->load->view('Template/element_footer');
	              }
	              
	              //jika validasi login sudah tepat
	              else
	              {

	              	//array data untuk terima inputan dari user
					$data = array(
					'username' => $this->input->post('usernamePOST'),
					'password' => $this->input->post('passwordPOST')
					);
					$result = $this->akun->cekLogin($data);

						// Logika jika $result yang didapatkan dari model akun!
						// lihat bagian baris kode logika kueri (yang ada di dalam function cekLogin())
						if ($result ==	TRUE)
						{
							//jika nilai $result true maka sistem wajib mendaftarkan session data
							//variable sessionnya
							$session_data = array(
							'username'	=> $result[0]->username,
							'kd_akun'	=> $result[0]->kd_akun
							);
							// perintah menambahkan session data
							// userdata('data_login', $session_data) sama dengan 
							// $data_login = array('username' => row_username, 'password' => row_password);
							$this->session->set_userdata('data_login', $session_data);
							$this->load->view('admin_page');
						}
						else
						{

						}

	              }
			}

			//function yang menampilkan halaman pendaftaran
			public function registerPage()
			{
		        //Variabel untuk Template Parser
		        $element_header = array(
		            //Halaman Dasar
		                'webJudul'        =>  'Sistem Informasi Pengajuan Sebaran Matakuliah',
		                'webBagian'       =>  'Memroses Pendaftaran Akun...',
		                'webMuatHalaman'  =>  'Pages/daftar',
		                'pesan'          =>  ''

		        );

				$this->parser->parse('Template/element_header', $element_header);
				$this->load->view('Template/element_footer');
			}

}
