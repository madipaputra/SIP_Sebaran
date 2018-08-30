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
                            {pesan}
                            <h5 class="text-center"><b>Anda Berada Di Halaman List Matakuliah yang belum disetujui oleh Akademik berdasarkan Prodi</b></h5>

                           <p align="center"> 
                            Pada Halaman Matakuliah, Hanya Ditampilkan daftar Matakuliah yang disetujui saja!<br>
                            Data Matakuliah didapatkan dari file excel Sebaran Tahun Akademik <b>2017/2018</b><br>
                            <br>
                            <a href="<?php echo base_url()?>database/2017.2%20SEBARAN%20DAN%20JADWAL%20-ALLPRODI%20-%20Copy.xls" class="btn btn-primary text-white"> <i class="fas fa-download"></i> Download File Excel Sebaran</a>

                            <p class="text-center">
                              <b><?php echo $queryJumlahMatkul; ?></b> Matakuliah yang sudah tersimpan kedalam database
                            </p>
                            <div align="center">
 

                            <a href="<?php echo base_url();?>dashboard/akademik/manageMatkul/verify" class="btn text-white btn-success">Menuju Halaman Persetujuan data Matakuliah yang duajukan Oleh Prodi</a>

                            </div>
                            <hr>

<!-- 
                            <h5 class="text-center"><b>Cari Nama Prodi</b></h5>
                            <hr>
                            <div align="center">
             <?php //echo form_open(base_url().'dashboard/akademik/manageProdi/Search');?>
              <div class="input-group">
                <input  type="text" class="form-control" placeholder="Ketik Kata Kunci Pencarian" name="keywordPOST">
                <div class="input-group-append">
                  <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
                </div>
              </div>
            <?php //echo form_close();?>
                            </div> -->
                          </div>
                        </div><br>    
                      </div> 
      </div>

      <div class="row">
       
        <?php 
          $query  = $this->db->get('tb_prodi');

                  foreach ($query->result_array() as $row)
                  {
                     $queryJumlahMatkulPerProdi = $this->db->query('SELECT * FROM tb_matakuliah where kd_prodi="'.$row['kd_prodi'].'"');
                    $queryJumlahMatkulPerProdiDisetujui = $this->db->query('SELECT * FROM tb_matakuliah where status="1" AND kd_prodi="'.$row['kd_prodi'].'"');
                    $queryJumlahMatkulPerProdiDitolak = $this->db->query('SELECT * FROM tb_matakuliah where status="0" AND kd_prodi="'.$row['kd_prodi'].'"');

                    $JumlahMatkulProdiPerbagian  = $queryJumlahMatkulPerProdi->num_rows();
                    $JumlahMatkulProdiDisetujui  = $queryJumlahMatkulPerProdiDisetujui->num_rows();
                    $JumlahMatkulProdiDitolak  = $queryJumlahMatkulPerProdiDitolak->num_rows();

                    echo '
                      <div class=" align-self-center col-md-6">
                        <div class="card">
                          <div class="card-block p-5">
                            <h5 class="text-center"><b>'.$row['nama_prodi'].'</b></h5>
                            <table class="table">
                              <tr>
                                <td><b>Total</b></td>
                                <td align=center><b>Disetujui</b></td>
                                <td align=right><b>Belum Disetujui</b></td>
                              </tr>
                              <tr>
                                <td>'.$JumlahMatkulProdiPerbagian.'</td>
                                <td align=center>'.$JumlahMatkulProdiDisetujui.'</td>
                                <td align=right>'.$JumlahMatkulProdiDitolak.'</td>
                              </tr>
                            </table>
                            <hr>
                            <div align="center">
                            '.
                              form_open(''.base_url().'dashboard/akademik/manageMatkulProdi')
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