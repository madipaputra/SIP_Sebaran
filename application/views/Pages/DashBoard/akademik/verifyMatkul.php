<?php
$queryGetProdi  = $this->db->query('SELECT * FROM tb_prodi');
$queryGetDosen  = $this->db->query('SELECT * FROM tb_dosen');
$queryGetMatkul = $this->db->query('SELECT * FROM tb_matakuliah');

$queryJumlahProdi   = $queryGetProdi->num_rows();
$queryJumlahDosen   = $queryGetDosen->num_rows();
$queryJumlahMatkul  = $queryGetMatkul->num_rows();

$querylistProdi = $this->db->get('tb_prodi');
?>

  <nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <div class="container">
      <img src="<?php echo base_url();?>external/logo/logo.png" width=40 height=40>
      <a class="navbar-brand" href="<?php echo base_url();?>dashboard">Dashboard <br>
        <small>{inisialisasiKodeAkun}</small></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item text-light">
            <a class="nav-link" href="<?php echo base_url();?>dashboard/akademik/manageProdi">Prodi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url();?>dashboard/akademik/manageDosen">Dosen</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="<?php echo base_url();?>dashboard/akademik/manageMatkul">Matakuliah</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url();?>dashboard/akademik/manageSebaran">Sebaran</a>
          </li>
        </ul>
        <form class="form-inline m-0">
          <a href="<?php echo base_url();?>logout" class="btn btn-danger text-light" type="submit">
            <b><i class="fas fa-sign-out-alt"></i> Logout</b>
          </a>
        </form>
      </div>
    </div>
  </nav>
  <div class="p-5 bg-secondary" >
      <div class="row">
                      <div class=" align-self-center col-md-12">
                        <div class="card">
                          <div class="card-block p-5">
                            <h5 class="text-center"><b>Halaman List Matakuliah yang akan disetujui.</b></h5>

                           <p align="center"> Data Matakuliah didapatkan dari file excel Sebaran Tahun Akademik <b>2017/2018</b><br><br>
                            <a href="<?php echo base_url()?>database/2017.2%20SEBARAN%20DAN%20JADWAL%20-ALLPRODI%20-%20Copy.xls" class="btn btn-primary text-white"> <i class="fas fa-download"></i> Download File Excel Sebaran</a>

                            <p class="text-center">

                            <div align="center">
 
                              <b><?php echo $queryJumlahMatkul; ?></b> Matakuliah yang sudah tersimpan kedalam database
                            </p>
                            <a href="<?php echo base_url();?>dashboard/akademik/manageMatkul" class="btn text-white btn-success">Kembali Ke Halaman Manage Matakuliah (List Prodi)</a>

                            </div>

                          </div>
                        </div><br>    
                      </div> 
      </div>

      <div class="row">
       
        <?php 
          $query  = $this->db->get('tb_prodi');

                  foreach ($query->result_array() as $row)
                  {
                    
                    echo '
                      <div class=" align-self-center col-md-6">
                        <div class="card">
                          <div class="card-block p-5">
                            <h5 class="text-center"><b>'.$row['nama_prodi'].'</b></h5>
                            <p class="text-center">
                              <b>0</b> matakuliah belum di setujui akademik
                            </p>
                            <hr>
                            <div align="center">
                            '.
                              form_open(''.base_url().'dashboard/akademik/manageMatkul/verifyMatkulProdi')
                            .'
                            <input type="hidden" name="kodeProdiPOST" value="'.$row['kd_prodi'].'"/>
                            <button type="submit" class="btn btn-dark">Manage Matkul Prodi ini</button>
                            '.
                              form_close()
                            .'
                            </div>
                          </div>
                        </div><br>    
                      </div> 
                    ';

                  }
        ?>
        
      </div>
  </div>