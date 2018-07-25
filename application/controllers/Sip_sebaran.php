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
	              	//Proses Eksekusi inputan Login
				      $username = $this->input->post('usernamePOST');
				      $password = $this->input->post('passwordPOST');
				      $eksekusiLogin = $this->akun->loginAkun($username,$password);
				      	
				      	//echo $eksekusiLogin;
				      	// jika $eksekusiLogin == 1 dianggap berhasil login dan == 0 dianggap ggl login 
				      	if ($eksekusiLogin	==	1) 
				      		{
				      			//Array untuk proses penambahan session
								$sessionData = array(
								        'username'  => $username,
								        'sudah_login' => 1
								);
								//perintah menambahkan nilai pada setiap session
								$this->session->set_userdata($sessionData);
								//debug testing pengecekan session
								echo $this->session->username;
								echo $this->session->sudah_login;
								echo "Login Benar";
								//perintah unset session
								$unsessionData	=   array('username', 'sudah_login' );
								$this->session->unset_userdata($sessionData);
				      		}
				      	else
				      		{
				      			echo " Salah";
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
