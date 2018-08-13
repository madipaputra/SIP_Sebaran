  <nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="<?php echo base_url();?>dashboard">Dashboard <br>
        <small><b>Akademik</b></small></a>
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
            <a class="nav-link" href="<?php echo base_url();?>dashboard/akademik/manageKelas">Sebaran</a>
          </li>
        </ul>
        <form class="form-inline m-0">
          <a href="<?php echo base_url();?>logout" class="btn btn-danger text-light" type="submit">
            <b>Logout</b>
          </a>
        </form>
      </div>
    </div>
  </nav>

<?php 
  $querygetProdi = $this->db->get_where('tb_prodi', array('kd_prodi'=>$nama_prodi));
  foreach ($querygetProdi->result_array() as $rowProdi) { ?>

  <div class="p-2 bg-secondary">

        <div class="p-1 align-self-center col-md-12">
          <div class="card">
            <a href="<?php echo(base_url())?>dashboard/akademik/manageMatkul/verify" class="btn btn-dark text-white">Kembali Ke Halaman List Matakuliah (Semua Prodi)</a>
            <br>
            <h3 class="display-6 text-center">Halaman Persetujuan Matakuliah Prodi Prodi <?php echo $rowProdi['nama_prodi']?></h3>
            <div class="card-block p-3">

              <?php               
                //validasi gagal
                echo validation_errors('
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <i class="fas fa-exclamation-triangle"></i> ', '
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>');
              ?>
                {pesan}

             <?php echo form_open(base_url().'dashboard/akademik/manageProdi/Search');?>
              <div class="input-group">
                <input  type="text" class="form-control" placeholder="Ketik Kata Kunci Pencarian" name="keywordPOST">
                <select name="fieldPOST" class="form-control">
                  <option value="">Pencarian Berdasarkan</option>
                  <option value="nama_prodi">Nama Matakuliah</option>
                </select>
                <div class="input-group-append">
                  <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
                </div>
              </div>

            <?php echo form_close();?>

              <table class="table">
                <thead>
                  <tr align="center">
                    <th>Nama Matakuliah</th>
                    <th>SKS</th>
                    <th>Status</th>
                    <th>Alasan Ditolak</th>
                    <th>Aksi</th>

                  </tr>
                </thead>

                <tbody>
                <?php
                $query  = $this->db->query("SELECT * FROM tb_matakuliah WHERE kd_prodi='$nama_prodi' AND status='0'");
                //$query = $this->db->get_where('tb_matakuliah', array('kd_prodi'=>$nama_prodi));

                  foreach ($query->result_array() as $row)
                  {
                  	if ($row['status'] == 0) {
                  		$statusText = "Belum Disetujui";
                  	}
                  	else{
                  		$statusText = "Sudah Disetujui";
                  	}

                  	if ($row['alasan_ditolak'] == "") {
                  		$statusTextDitolak = "(Belum Ada)";
                  	}
                  	else{
                  		$statusTextDitolak = $row['alasan_ditolak'];
                  	}
                          ;
                          
                          echo '
                            <tr>
                              <td>'.$row['nama_matkul'].'</td>
                              <td>'.$row['sks'].'</td>
                              <td>'.$statusText.'</td>
                              <td>'.$statusTextDitolak.'</td>
                              <td align="center">
                                <button data-toggle="modal" data-target="#editData'.$row['id_matkul'].'" class="btn btn-danger"><i class="fas fa-edit"></i> Tolak</button>

                                '.
                         form_open(base_url().'dashboard/akademik/manageMatkul/verifyMatkulProdi/VerifyNow')
                         		.'
                         	<input name="kodeProdiPOST" type="hidden" value="'.$row['kd_prodi'].'">

                         	<input name="id_matkulPOST" type="hidden" value="'.$row['id_matkul'].'">
                         	<input name="kd_matkulPOST" type="hidden" value="'.$row['kd_matkul'].'">
                         	<input name="nama_matkulPOST" type="hidden" value="'.$row['nama_matkul'].'">
                         	<input name="sksPOST" type="hidden" value="'.$row['sks'].'">
                         	<input name="sks_teoriPOST" type="hidden" value="'.$row['sks_teori'].'">
                         	<input name="sks_praktekPOST" type="hidden" value="'.$row['sks_praktek'].'">
                         	<input name="kd_prodiPOST" type="hidden" value="'.$row['kd_prodi'].'">
                         	<input name="statusPOST" type="hidden" value="1">
                         	<input name="alasanPOST" type="hidden" value="">
                                <button class="btn btn-success"><i class="fas fa-check"></i> Setuju</button>
                                '.
                         form_close()
                                .'

                              </td>

<!-- Modal Hapus Data Mtakuliah '.$row['nama_matkul'] .'-->
<div class="modal fade" id="editData'.$row['id_matkul'].'" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      '.
      form_open(base_url().'dashboard/akademik/manageMatkul/verifyMatkulProdi/AbortNow')
      .'

                         	<input name="kodeProdiPOST" type="hidden" value="'.$row['kd_prodi'].'">

                         	<input name="id_matkulPOST" type="hidden" value="'.$row['id_matkul'].'">
                         	<input name="kd_matkulPOST" type="hidden" value="'.$row['kd_matkul'].'">
                         	<input name="nama_matkulPOST" type="hidden" value="'.$row['nama_matkul'].'">
                         	<input name="sksPOST" type="hidden" value="'.$row['sks'].'">
                         	<input name="sks_teoriPOST" type="hidden" value="'.$row['sks_teori'].'">
                         	<input name="sks_praktekPOST" type="hidden" value="'.$row['sks_praktek'].'">
                         	<input name="kd_prodiPOST" type="hidden" value="'.$row['kd_prodi'].'">
                         	<input name="statusPOST" type="hidden" value="0">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Tolak Matakuliah <br>
        <b>'.$row['nama_matkul'].'</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
      	<label>Alasan Menolak Matakuliah ini</label>
        <input name="alasanPOST" class="form-control" type="text" placeholder="Masukkan Alasan Ditolaknya Mtakuliah ini">
      </div>

      <div class="modal-footer">
        <button type="reset" class="btn btn-info"><i class="fas fa-undo"></i> Reset</button>
        <button type="submit" class="btn btn-success"><i class="fas fa-check"></i> Perbarui</button>
      </div>
      '.form_close().'
    </div>
  </div>
</div>

                            </tr>

                          ';
                  }

                ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
  </div>
<?php }?>

