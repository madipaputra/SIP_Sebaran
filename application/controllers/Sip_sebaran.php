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
								$periksa = $this->db->get_where('tb_akun', array('username'=>$username));
									foreach ($periksa->result_array() as $row)
									{
									        $row['kd_akun'];
									        $row['username'];
									        $row['id_akun'];
									        $row['password'];
									}

				      			//Array untuk proses penambahan session
								$sessionData = array(
								        'username'  => $row['username'],
								        'kd_akun'	=> $row['kd_akun'],
								        'id_akun'	=> $row['id_akun'],
								        'sudah_login' => 1
								);
								//perintah menambahkan nilai pada setiap session
								$this->session->set_userdata($sessionData);
									//debug testing pengecekan session
									//echo $this->session->username;
									//echo $this->session->sudah_login;
									//echo "Login Benar";
									//perintah unset session
									//$unsessionData	=   array('username', 'sudah_login' );
									//$this->session->unset_userdata($sessionData);

				                // $element_header['pesan'] = '
				                // <br>
				                //   <div class="alert alert-success alert-dismissible fade show" role="alert">
				                //   <i class="fas fa-check-circle"></i> Login Berhasil. Untuk Sementara dialihkan ke default Page Dulu 
				                //     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				                //       <span aria-hidden="true">&times;</span>
				                //     </button>
				                //   </div>
				                //   ';

				                // $this->parser->parse('Template/element_header', $element_header);
				                // $this->load->view('Template/element_footer'); 
								redirect(base_url().'dashboard');
				      		}
				      	else
				      		{
				                $element_header['pesan'] = '
				                <br>
				                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
				                  <i class="fas fa-exclamation-circle"></i> Login Gagal Login! Username tau Password Salah!
				                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				                      <span aria-hidden="true">&times;</span>
				                    </button>
				                  </div>
				                  ';

				                $this->parser->parse('Template/element_header', $element_header);
				                $this->load->view('Template/element_footer'); 
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
