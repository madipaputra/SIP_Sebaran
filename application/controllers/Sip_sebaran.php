<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
  Controller SIP Sebaran Matakuliah Default.
    
    Ada beberapa function di Controller ini

    - function 

 */

class Sip_sebaran extends CI_Controller {

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
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Halaman Login',
								'webMuatHalaman'	=>	'Pages/login'
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
	              
	              else
	              {
	                $this->parser->parse('Template/element_header', $element_header);
	                $this->load->view('Template/element_footer');              
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
		                'sukses'          =>  ''

		        );

				$this->parser->parse('Template/element_header', $element_header);
				$this->load->view('Template/element_footer');
			}

}
