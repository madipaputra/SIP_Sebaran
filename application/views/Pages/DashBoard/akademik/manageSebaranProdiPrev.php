<?php
$queryGetProdi  = $this->db->query('SELECT * FROM tb_prodi');
$queryGetDosen  = $this->db->query('SELECT * FROM tb_dosen');
$queryGetMatkul = $this->db->query('SELECT * FROM tb_matakuliah');

$queryJumlahProdi   = $queryGetProdi->num_rows();
$queryJumlahDosen   = $queryGetDosen->num_rows();
$queryJumlahMatkul  = $queryGetMatkul->num_rows();


$querylistProdi = $this->db->query('SELECT * FROM tb_prodi where kd_prodi="'.$kode_prodi.'"');
$querylistMatkul = $this->db->query('SELECT * FROM tb_matakuliah where id_matkul="'.$id_matkul.'" ');
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
            <a class="nav-link " href="<?php echo base_url();?>dashboard/akademik/manageMatkul">Matakuliah</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="<?php echo base_url();?>dashboard/akademik/manageSebaran">Sebaran</a>
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
                              <a href="<?php echo(base_url())?>dashboard/akademik/manageSebaran" class="btn btn-dark text-white">Kembali Ke Halaman List Sebaran (Semua Prodi)</a>
                          <div class="card-block p-5">
                            {pesan}
                            <h5 class="text-center"><b>Preview Add Sebaran Prodi  {kode_prodi}</b></h5>

                      <table class='table container'>
                      <?php echo form_open(base_url().'dashboard/akademik/manageSebaran/Add');?>

                        <tr>
                          <td><b>Kode Kelas</b></td>
                          <td align="right" >{kode_prodi}-{semester}{grup_kelas}<b></b></td>
                          <input type="hidden" name="kd_kelasPOST" value="{kode_prodi}-{semester}{grup_kelas}">
                        </tr>
                        <tr>
                          <td><b>Tipe Kelas</b></td>
                          <td align="right" >
                            <?php
                            if ($tipe_kelas="R") {
                              $teksKelas = "Reguler";
                            }
                            else{
                              $teksKelas ="Karyawan";
                            }

                             echo $teksKelas;
                            ?>
                            <input type="hidden" name="tipe_kelasPOST" value="{tipe_kelas}">
                            <b></b></td>
                        </tr>
                        <tr>
                          <td><b> Kode Prodi</b></td>
                          <td align="right">
                            {kode_prodi}
                            <input type="hidden" name="kodeprodiPOST" value="{kode_prodi}">
                          </td>
                        </tr>
                        <tr>
                          <td><b>Progrm Studi</b></td>
                          <td align="right">
                      <?php
                      foreach ($querylistProdi->result_array() as $rowlistProdi)
                      {
                        echo 
                            $rowlistProdi['nama_prodi'];
                        echo '<input type="hidden" name="nama_prodiPOST" value="'.$rowlistProdi['nama_prodi'].'">';
                      }
                        ?>
                            <b></b></td>
                        </tr>
                        <tr>
                          <td><b>Semester</b></td>
                          <td align="right">{semester}
                            <input type="hidden" name="semesterPOST" value="{semester}">
                          </td>
                        </tr>
                        <tr>
                          <td><b>Kode Matakuliah</b></td>
                          <td align="right" >
                      <?php
                      foreach ($querylistMatkul->result_array() as $rowlistMatkul)
                      {
                        echo 
                            $rowlistMatkul['kd_matkul']
                            .'<input type="hidden" name="kdMatkulPOST" value="'.$rowlistMatkul['kd_matkul'].'">'
                            ;
                      }
                        ?>          
                         </td>
                        </tr>
                        <tr>
                          <td><b>Nama Matakuliah</b></td>
                          <td align="right" >
                      <?php
                      foreach ($querylistMatkul->result_array() as $rowlistMatkul)
                      {
                        echo 
                            $rowlistMatkul['nama_matkul']
                            .'<input type="hidden" name="namaMatkulPOST" value="'.$rowlistMatkul['nama_matkul'].'">';
                      }
                        ?>
                            <b></b></td>
                        </tr>
                        <tr>
                          <td><b>SKS</b></td>
                          <td align="right" >
                      <?php
                      foreach ($querylistMatkul->result_array() as $rowlistMatkul)
                      {
                        echo 
                            $rowlistMatkul['sks']
                            .'<input type="hidden" name="sksPOST" value="'.$rowlistMatkul['sks'].'">';
                      }
                        ?> 
                            <b></b></td>
                        </tr>
                        <tr>
                          <td><b>SKS Teori</b></td>
                          <td align="right" >
                      <?php
                      foreach ($querylistMatkul->result_array() as $rowlistMatkul)
                      {
                        echo 
                            $rowlistMatkul['sks_teori']
                            .'<input type="hidden" name="sksTeoriPOST" value="'.$rowlistMatkul['sks_teori'].'">';
                      }
                        ?> 
                            <b></b></td>
                        </tr>
                        <tr>
                          <td><b>SKS Praktek</b></td>
                          <td align="right" >
                      <?php
                      foreach ($querylistMatkul->result_array() as $rowlistMatkul)
                      {
                        echo 
                            $rowlistMatkul['sks_praktek']
                            .'<input type="hidden" name="sksPraktekPOST" value="'.$rowlistMatkul['sks_praktek'].'">';
                      }
                        ?> 
                            <b></b></td>
                        </tr>
                        <tr>
                          <td><b>Jam Mengajar</b></td>
                          <td align="right" >
                      <?php
                      foreach ($querylistMatkul->result_array() as $rowlistMatkul)
                      {
                         
                            $teori    = $rowlistMatkul['sks_praktek']*1;
                            $praktek  = $rowlistMatkul['sks_praktek']*2;
                            $jam_ajar = $teori+$praktek;
                            echo $jam_ajar.' Jam'
                            .'<input type="hidden" name="jam_ajarPOST" value="'.$jam_ajar.'">';
                      }
                      ?>

                            <b></b></td>
                        </tr>
                        <tr>
                          <td><b>Dosen</b></td>
                          <td align="right" >
                              {dosen1}
                            <input type="hidden" name="dosen1POST" value="{dosen1}">
                            </td>
                        </tr>
                        <tr>
                          <td><b>Dosen 2</b></td>
                          <td align="right" >
                              {dosen2}
                              <input type="hidden" name="dosen2POST" value="{dosen2}">
                            <b></b></td>
                        </tr>
                        <tr>
                          <td><b>Keterangan</b></td>
                          <td align="right" >
                              {keterangan}
                              <input type="hidden" name="ketPOST" value="{keterangan}">
                            <b></b></td>
                        </tr>
                        <tr>
                          <td colspan="2"><button type="submit" class="btn btn-success"> Tambahkan</button></td>
                        </tr>
                        <?php echo form_close();?>
                      </table>

                            </div>
                            <hr>

                          </div>
                        </div><br>    
                      </div> 
      </div>

        
      </div>
  </div>