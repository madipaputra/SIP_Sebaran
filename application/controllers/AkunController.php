<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
  Controller Akun.
    
    - function registerProcess() adalah function yang menangani proses pendaftaran akun

 */

class AkunController extends CI_Controller
{
  
  function __construct()
  {
    parent::__construct();
  }
  

      //function yang menampilkan halaman pendaftaran
      public function doRsegister()
      {
        //Variabel untuk Template Parser
        $element_header = array(
                'webJudul'        =>  'Sistem Informasi Pengajuan Sebaran Matakuliah',
                'webBagian'       =>  'Memroses Pendaftaran Akun...',
                'webMuatHalaman'  =>  'Pages/daftar'
        );

        $this->form_validation->set_rules('kd_akunPOST', 'Pilihan Prodi', 
          'required', array('required' => 'Anda Harus Memilih Pilihan Prodi')
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
                $this->load->view('Template/element_footer');              }
      }

}


?>
