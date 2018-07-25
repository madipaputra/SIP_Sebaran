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
    $this->load->model('akun');
  }
  

      //function yang menampilkan halaman pendaftaran
      public function doRsegister()
      {
        //Variabel untuk Template Parser
        $element_header = array(
            //Halaman Dasar
                'webJudul'        =>  'Sistem Informasi Pengajuan Sebaran Matakuliah',
                'webBagian'       =>  'Memroses Pendaftaran Akun...',
                'webMuatHalaman'  =>  'Pages/daftar',
                'pesan'          =>  ''

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
                $this->akun->insertAkun();
                $element_header['pesan'] = '
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                  Akun Berhasil Didaftarkan ke dalam database
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


?>
