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
	            	//get the posted values
					$dataQuery = array
					(
						'username' => $this->input->post('usernamePOST'), 
						'password' => $this->input->post("passwordPOST")
					);

					//check if username and password is correct
					$akunResult = $this->akun->cekLogin($dataQuery);
					if ($akunResult > 0) //active user record is present
					{
						//set the session variables
						//$sessiondata = array(
						//	'username' => $username,
						//	'loginuser' => TRUE,
						//);
						// Login ok redireciona
						//$this->session->set_userdata($sessiondata);
						//redirect('login/pg_inicio');
						echo "Login Benar";
					} else {
						echo "Login Salah ";
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
