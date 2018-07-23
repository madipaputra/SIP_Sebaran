<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sip_sebaran extends CI_Controller {

			public function index()
			{
				/*
					File Controller ini adalah bagian awal dari Sistem Informasi Pengajuan Sebaran Matakuliah
					file ini memuat template dan memuat layout halaman login.
				*/
				$element_header = array(
				        'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
				        'webBagian'				=>	'Halaman Login',
								'webMuatHalaman'	=>	'Pages/login'
				);

				$this->parser->parse('Template/element_header', $element_header);
				$this->load->view('Template/element_footer');
			}

			public function akademikDashboard()
			{
			  /*
			    File Controller ini adalah bagian awal dari Sistem Informasi Pengajuan Sebaran Matakuliah
			    file ini memuat template dan memuat layout halaman login.
			  */
			  $element_header = array(
			          'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
			          'webBagian'				=>	'Halaman Dashboard Akademik',
			          'webMuatHalaman'	=>	'Pages/Logged_in/akademik_dashboard'
			  );

			  $this->parser->parse('Template/element_header', $element_header);
			  $this->load->view('Template/element_footer');
			}

}
