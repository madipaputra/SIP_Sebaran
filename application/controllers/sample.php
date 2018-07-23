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

public function prodiDashboard()
{
  /*
    File Controller ini adalah bagian awal dari Sistem Informasi Pengajuan Sebaran Matakuliah
    file ini memuat template dan memuat layout halaman login.
  */
  $element_header = array(
          'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
          'webBagian'				=>	'Halaman Dashboard Prodi',
          'webMuatHalaman'	=>	'Pages/Logged_in/prodi_dashboard'
  );

  $this->parser->parse('Template/element_header', $element_header);
  $this->load->view('Template/element_footer');
}

public function listDemo()
{
  /*
    File Controller ini adalah bagian awal dari Sistem Informasi Pengajuan Sebaran Matakuliah
    file ini memuat template dan memuat layout halaman login.
  */
  $element_header = array(
          'webJudul'				=> 	'Sistem Informasi Pengajuan Sebaran Matakuliah',
          'webBagian'				=>	'List Demo',
          'webMuatHalaman'	=>	'Pages/Logged_in/Akademik/listDemo'
  );

  $this->parser->parse('Template/element_header', $element_header);
  $this->load->view('Template/element_footer');
}
