  <nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <div class="container">
      <img src="<?php echo base_url();?>external/logo/logo.png" width=40 height=40>
      <a class="navbar-brand" href="<?php echo base_url();?>dashboard">Dashboard <br>
        <small><b>{inisialisasiKodeAkun}</b></small></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link text-white" href="<?php echo base_url();?>dashboard/prodi/manageMatkul">Matakuliah</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url();?>dashboard/prodi/manageSebaran">Sebaran</a>
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

<?php 
  $querygetProdi = $this->db->get_where('tb_prodi', array('kd_prodi'=>$nama_prodi));
  foreach ($querygetProdi->result_array() as $rowProdi) { ?>

  <div class="p-2 bg-secondary">

        <div class="p-1 align-self-center col-md-12">
          <div class="card">
            <h1 class="display-6 text-center">Manage Matakuliah Prodi <?php echo $rowProdi['nama_prodi']?></h1>
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
<!-- <select class="form-control demoNamaSingle" >
  <option value="AL">Maulana </option>
  <option value="AL">Zihan</option>
  <option value="WY">Iqbal</option>
</select> -->



             <?php echo form_open(base_url().'dashboard/prodi/manageMatkul/Search');?>
              <div class="input-group">
                <input  type="text" class="form-control" placeholder="Ketik Kata Kunci Pencarian" name="keywordPOST">
                <select name="fieldPOST" class="form-control">
                  <option value="">Pencarian Berdasarkan</option>
                  <option value="kd_matkul">Kode Matakuliah</option>
                  <option value="nama_matkul">Nama Matakuliah</option>
                </select>
                <div class="input-group-append">
                  <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
                </div>
              </div>

            <?php echo form_close();?>

<br>
  <div id="formAdd" class="collapse container-fluid">
    <h3 align="center"><b>Form Penambahan Data Matakuliah Prodi <?php echo $rowProdi['nama_prodi']?></b></h3>
  <?php echo form_open(base_url().'dashboard/akademik/manageMatkul/Add');?>
    <div class="form-row">
      <div class="form-group col-md-2">
        <input type="hidden" name="kodeProdiPOST" value="<?php echo $rowProdi['kd_prodi']?>"/>
        <label for="inputEmail4">Kode Matakuliah</label>
        <input name="kd_matkulPOST" type="text" class="form-control" placeholder="Masukkan Kode">
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Nama Matakuliah</label>
        <input name="nama_matkulPOST" type="text" class="form-control" placeholder="Masukkan Nama Matakuliah">
      </div>
      <div class="form-group col-md-2">
        <label for="inputEmail4">SKS Teori</label>
        <input name="sks_teoriPOST" type="number" class="form-control" placeholder="Jumlah SKS Teori">
      </div>
      <div class="form-group col-md-2">
        <label for="inputEmail4">SKS Praktek</label>
        <input name="sks_praktekPOST" type="number" class="form-control" placeholder="Jumlah SKS Praktek">
      </div>
    </div>


    <button type="submit" class="btn btn-success">Tambahkan</button>
    <button type="reset" class="btn">Reset</button>
  <?php echo form_close()?>
  </div>
<br>

<!-- Modal -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    <?php echo form_open(base_url().'dashboard/akademik/manageProdi/Add');?>
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle"><b>Form Penambahan Data Prodi</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
                      <div class="form-group">
                        <label>Kode Prodi</label>
                        <input name="kd_prodiPOST" type="text" class="form-control form-control-sm" placeholder="Msukkan Kode Prodi">
                        <small class="form-text text-muted">Masukkan 3 digit huruf inisial Program Studi</small>
                      </div>
                      <div class="form-group">
                        <label>Nama Prodi</label>
                        <input type="text" class="form-control form-control-sm" placeholder="Masukkan Nama Prodi" name="nama_prodiPOST"> </div>

                    
      </div>


      <div class="modal-footer">
        <button type="reset" class="btn btn-info"><i class="fas fa-undo"></i> Reset</button>
        <button type="submit" class="btn btn-success"><i class="fas fa-plus"></i> Tambahkan</button>
      </div>
      <?php echo form_close();?>
    </div>
  </div>
</div>




              <table class="table">
                <thead>
                  <tr align="center">
                    <th>Kode Matakuliah</th>
                    <th>Nama Matakuliah</th>
                    <th>SKS</th>
                    <th>SKS Teori</th>
                    <th>SKS Praktek</th>
                    <th>Status</th>

                  </tr>
                </thead>

                <tbody>
                <?php
                $query = $this->db->get_where('tb_matakuliah', array('kd_prodi'=>$nama_prodi));


                  foreach ($query->result_array() as $row)
                  {

                              if ($row['status'] = 1) {
                                $statusMatkul = 'Disetujui';
                              }
                              else{
                                $statusMatkul = "Ditolak";
                              }

                          echo '
                            <tr>
                              <td>'.$row['kd_matkul'].'</td>
                              <td>'.$row['nama_matkul'].'</td>
                              <td>'.$row['sks'].'</td>
                              <td>'.$row['sks_teori'].'</td>
                              <td>'.$row['sks_praktek'].'</td>
                              <td>'.$statusMatkul.'</td>


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

