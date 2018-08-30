<script type="text/javascript">


$(document).ready(function()
{
    


    function updatePrice()
    {
         var price = parseFloat($("#dare_price").val());
         var price2 = price+1;
         $("#total_price_amount").val(price2);
    };
    

    function updatekdKelas()
    {
        var semester = $('#semesterJS option:selected').text();
        semester.options[semester.selectedIndex].value;
        $("#kd_kelasJS").val(semester);
    };

    $(document).on("change, keyup", "#dare_price", updatePrice);
    $(document).on("change, keyup", "#semesterJS", updatekdKelas);
});

</script>

  <nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <div class="container">
      <img src="<?php echo base_url();?>external/logo/logo.png" width=40 height=40>
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
            <a class="nav-link" href="<?php echo base_url();?>dashboard/akademik/manageMatkul">Matakuliah</a>
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

<?php 
  $querygetProdi = $this->db->get_where('tb_prodi', array('kd_prodi'=>$kode_prodi));
  foreach ($querygetProdi->result_array() as $rowProdi) { ?>

  <div class="p-2 bg-secondary">

        <div class="p-1 align-self-center col-md-12">
          <div class="card">
            <h1 class="display-6 text-center">Halaman Sebaran Prodi <?php echo $rowProdi['nama_prodi']?></h1>
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

  x

             <?php echo form_open(base_url().'dashboard/akademik/manageProdi/Search');?>
              <div class="input-group">
                <div class="input-group-append">
                  <button type="button" data-toggle="collapse" data-target="#formAdd" class="btn btn-dark">
                    <i class="fas fa-plus"></i>
                  </button>
                </div>
                <input  type="text" class="form-control" placeholder="Ketik Kata Kunci Pencarian" name="keywordPOST">
                <select name="fieldPOST" class="form-control">
                  <option value="">Pencarian Berdasarkan</option>
                  <option value="kd_prodi">Kode Matakuliah</option>
                  <option value="nama_prodi">Nama Matakuliah</option>
                </select>
                <div class="input-group-append">
                  <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
                </div>
              </div>

            <?php echo form_close();?>

<br>
  <div id="formAdd" class="collapse container-fluid">
    <h3 align="center"><b>Form Penambahan Data Sebaran Prodi <?php echo $rowProdi['nama_prodi']?></b></h3><br>


  <?php echo form_open(base_url().'dashboard/akademik/manageSebaran/AddPreview');?>
    <div class="form-row">

        <input type="hidden" name="kodeProdiPOST" value="<?php echo $rowProdi['kd_prodi']?>">

        <div class="form-group col-md-2">
          <label for="inputPassword4">Tipe Kelas</label>
          <select class="form-control" name="tipeKelasPOST">
            <option value="">Pilih</option>
            <option value="R">Reguler</option>
            <option value="S">Sore</option>
          </select>
        </div>
        <div class="form-group col-md-2">
          <label for="inputPassword4">Group</label>
          <input type="text" class="form-control" name="groupKelasPOST">
        </div>
        <div class="form-group col-md-2">
          <label for="inputEmail4">Semester</label>
          <select class="form-control" name="semesterPOST" />
            <option value="">Pilih</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
          </select>
        </div>

        <div class="form-group col-md-6">
          <label for="inputEmail4">Nama Matakuliah</label>
    
            <select name="kodeMatkulPOST" id="select-namamatkulAdd" class="form-control">
              <option></option>
                <?php 
                  $querygetNamaMatkul = $this->db->query('SELECT * FROM tb_matakuliah where status="1" AND kd_prodi="'.$rowProdi['kd_prodi'].'"');
                  foreach ($querygetNamaMatkul->result_array() as $rowAddNamaMatkul) {
                    echo '<option value="'.$rowAddNamaMatkul['id_matkul'].'">'.$rowAddNamaMatkul['nama_matkul'].'</option>';
                  } ?>
            </select>

            <script>
              $('#select-namamatkulAdd').selectize({
                create: true,
                sortField: {
                field: 'text',
                direction: 'asc'
              },
                dropdownParent: 'body'
            });
            </script>
        </div>

        <div class="form-group col-md-6">
          <label for="inputEmail4">Dosen Pengajar</label>
    
            <select name="dosen1POST" id="select-namadosenAdd" class="form-control">
              <option></option>
                <?php 
                  $querygetNamaDosen = $this->db->get('tb_dosen');
                  foreach ($querygetNamaDosen->result_array() as $rowAddNamaDosen) {
                    echo '<option value="'.$rowAddNamaDosen['nama_dosen'].'">'.$rowAddNamaDosen['nama_dosen'].'</option>';
                  } ?>
            </select>

            <script>
              $('#select-namadosenAdd').selectize({
                create: true,
                sortField: {
                field: 'text',
                direction: 'asc'
              },
                dropdownParent: 'body'
            });
            </script>
        </div>

        <div class="form-group col-md-6">
          <label for="inputEmail4">Dosen Pengajar 2</label>
    
            <select name="dosen2POST" id="select-namadosen2Add" class="form-control">
              <option></option>
                <?php 
                  $querygetNamaDosen = $this->db->get('tb_dosen');
                  foreach ($querygetNamaDosen->result_array() as $rowAddNamaDosen) {
                    echo '<option value="'.$rowAddNamaDosen['nama_dosen'].'">'.$rowAddNamaDosen['nama_dosen'].'</option>';
                  } ?>
            </select>

            <script>
              $('#select-namadosen2Add').selectize({
                create: true,
                sortField: {
                field: 'text',
                direction: 'asc'
              },
                dropdownParent: 'body'
            });
            </script>
        </div>

        <div class="form-group col-sm-12">
            <label for="inputEmail4">Keterangan</label>
            <input type="text" name="ketPOST" class="form-control">
        </div>

    </div>

    <button type="submit" class="btn btn-success">Tambahkan</button>
    <button type="reset" class="btn">Reset</button>
  <?php echo form_close()?>
  </div>
<br>


<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-smt1-tab" data-toggle="tab" href="#nav-smt1" role="tab" aria-controls="nav-home" aria-selected="true">Semester 1</a>
    <a class="nav-item nav-link" id="nav-smt2-tab" data-toggle="tab" href="#nav-smt2" role="tab" aria-controls="nav-smt2" aria-selected="false">Semester 2</a>
    <a class="nav-item nav-link" id="nav-smt3-tab" data-toggle="tab" href="#nav-smt3" role="tab" aria-controls="nav-smt3" aria-selected="false">Semester 3</a>
    <a class="nav-item nav-link" id="nav-smt4-tab" data-toggle="tab" href="#nav-smt4" role="tab" aria-controls="nav-smt4" aria-selected="false">Semester 4</a>
    <a class="nav-item nav-link" id="nav-smt5-tab" data-toggle="tab" href="#nav-smt5" role="tab" aria-controls="nav-smt5" aria-selected="false">Semester 5</a>
    <a class="nav-item nav-link" id="nav-smt6-tab" data-toggle="tab" href="#nav-smt6" role="tab" aria-controls="nav-smt6" aria-selected="false">Semester 6</a>
    <a class="nav-item nav-link" id="nav-smt7-tab" data-toggle="tab" href="#nav-smt7" role="tab" aria-controls="nav-smt7" aria-selected="false">Semester 7</a>
    <a class="nav-item nav-link" id="nav-smt8-tab" data-toggle="tab" href="#nav-smt8" role="tab" aria-controls="nav-smt8" aria-selected="false">Semester 8</a>
    <!--<a class="nav-item nav-link disabled" id="nav-smtd-tab" data-toggle="tab" href="#nav-smtd" role="tab" aria-controls="nav-smtd" aria-selected="false">Semester 8 (Disabled)</a>-->
  </div>
</nav>
<!-- Semester -->
<div class="tab-content" id="nav-tabContent">
  <!-- Konten Semester 1 -->
  <div class="tab-pane fade show active" id="nav-smt1" role="tabpanel" aria-labelledby="nav-smt1-tab"><br>
    
    <!-- Tipe Kelas Semester 1--> 
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="pills-reguler-smt1-tab" data-toggle="pill" href="#pills-reguler-smt1" role="tab" aria-controls="pills-reguler-smt1" aria-selected="true">Kelas Reguler</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="pills-sore-smt1-tab" data-toggle="pill" href="#pills-sore-smt1" role="tab" aria-controls="pills-sore-smt1" aria-selected="false">Kelas Sore</a>
      </li>
    </ul>
    <!-- Konten Tipe Kelas -->
    <div class="tab-content" id="pills-tabContent">

      <div class="tab-pane fade show active" id="pills-reguler-smt1" role="tabpanel" aria-labelledby="pills-reguler-smt1-tab">
        <h4 align="center">Kelas Reguler Semester 1</h4><br>

                  <!-- Kelas Reguler SMT 1 -->
                  <div class="row">
                    <?php
                    $query = $this->db->query('SELECT * FROM tb_sebaran where smt="1" and tipe_kelas="R" and  kd_prodi="'.$kode_prodi.'"');

                      foreach ($query->result_array() as $rowSebarans)
                      {
                    ?>
                      <div class="col-sm-12">
                        <div class="card-body">

                          <div class="accordion" id="accordionSebaran<?php echo $rowSebarans['id_sebaran']?>">
                              <div id="headingSebaran<?php echo $rowSebarans['id_sebaran']?>">
                                <h4 class="mb-0">
                                  <a href="#" data-toggle="collapse" data-target="#collapseSebaran<?php echo $rowSebarans['id_sebaran']?>" aria-expanded="true" aria-controls="collapseSebaran<?php echo $rowSebarans['id_sebaran']?>">
                                    <b>
                                      <?php echo $rowSebarans['kd_kelas'] ?>
                                      <?php echo $rowSebarans['nama_matkul'] ?> 
                                  </b>
                                  </a>
                                </h4>
                              </div>

                              <div id="collapseSebaran<?php echo $rowSebarans['id_sebaran']?>" class="collapse hide" aria-labelledby="headingSebaran<?php echo $rowSebarans['id_sebaran']?>" data-parent="#accordionSebaran<?php echo $rowSebarans['id_sebaran']?>">
                                <div class="card-body">
                                                    <table class="table">
                                                      <tr>
                                                        <td><b>Kode Kelas</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['kd_kelas'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td><b>Kode Matakuliah</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['kd_matkul'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td><b>SKS Teori</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['sks_teori'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td><b>SKS Praktek</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['sks_praktek'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td><b>SKS</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['sks'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td><b>Jam Mengajar</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['jam'] ?> Jam
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td colspan="2">
                                                          <b>Dosen</b><br><br>
                                                          <?php echo $rowSebarans['dosen'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td colspan="2">
                                                          <b>Keterangan</b><br><br>
                                                          <?php echo $rowSebarans['ket'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td align="right" colspan="2">
                                                          <a href="#" class="btn btn-danger">Go somewhere</a>
                                                        </td>
                                                      </tr>
                                                    </table>
                                </div>
                              </div>
                          </div>

                          
                      </div>
                    </div>

                  <?php }?>

                  </div>


      </div>
      <div class="tab-pane fade" id="pills-sore-smt1" role="tabpanel" aria-labelledby="pills-sore-smt1">
                <h4 align="center">Kelas Sore Semester 1</h4><br>

                  <!-- Kelas Sore SMT 1 -->
                  <div class="row">
                    <?php
                    $query = $this->db->query('SELECT * FROM tb_sebaran where smt="1" and tipe_kelas="S" and  kd_prodi="'.$kode_prodi.'"');

                      foreach ($query->result_array() as $rowSebarans)
                      {
                    ?>
                      <div class="col-sm-12">
                        <div class="card-body">

                          <div class="accordion" id="accordionSebaran<?php echo $rowSebarans['id_sebaran']?>">
                              <div id="headingSebaran<?php echo $rowSebarans['id_sebaran']?>">
                                <h4 class="mb-0">
                                  <a href="#" data-toggle="collapse" data-target="#collapseSebaran<?php echo $rowSebarans['id_sebaran']?>" aria-expanded="true" aria-controls="collapseSebaran<?php echo $rowSebarans['id_sebaran']?>">
                                    <b>
                                      <?php echo $rowSebarans['kd_kelas'] ?>
                                      <?php echo $rowSebarans['nama_matkul'] ?> 
                                  </b>
                                  </a>
                                </h4>
                              </div>

                              <div id="collapseSebaran<?php echo $rowSebarans['id_sebaran']?>" class="collapse hide" aria-labelledby="headingSebaran<?php echo $rowSebarans['id_sebaran']?>" data-parent="#accordionSebaran<?php echo $rowSebarans['id_sebaran']?>">
                                <div class="card-body">
                                                    <table class="table">
                                                      <tr>
                                                        <td><b>Kode Kelas</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['kd_kelas'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td><b>Kode Matakuliah</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['kd_matkul'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td><b>SKS Teori</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['sks_teori'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td><b>SKS Praktek</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['sks_praktek'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td><b>SKS</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['sks'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td><b>Jam Mengajar</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['jam'] ?> Jam
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td colspan="2">
                                                          <b>Dosen</b><br><br>
                                                          <?php echo $rowSebarans['dosen'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td colspan="2">
                                                          <b>Keterangan</b><br><br>
                                                          <?php echo $rowSebarans['ket'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td align="right" colspan="2">
                                                          <a href="#" class="btn btn-danger">Go somewhere</a>
                                                        </td>
                                                      </tr>
                                                    </table>
                                </div>
                              </div>
                          </div>

                          
                      </div>
                    </div>

                  <?php }?>

                  </div>

      </div>
    </div>

  </div>
  <!-- Konten Semester 2 -->
  <div class="tab-pane fade" id="nav-smt2" role="tabpanel" aria-labelledby="nav-smt2-tab">
   <br>
    <!-- Tipe Kelas Semester 2--> 
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="pills-reguler-smt2-tab" data-toggle="pill" href="#pills-reguler-smt2" role="tab" aria-controls="pills-reguler-smt2" aria-selected="true">Kelas Reguler</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="pills-sore-smt2-tab" data-toggle="pill" href="#pills-sore-smt2" role="tab" aria-controls="pills-sore-smt2" aria-selected="false">Kelas Sore</a>
      </li>
    </ul>
    <!-- Konten Tipe Kelas -->
    <div class="tab-content" id="pills-tabContent">

      <div class="tab-pane fade show active" id="pills-reguler-smt2" role="tabpanel" aria-labelledby="pills-reguler-smt2-tab">
        <h4 align="center">Kelas Reguler Semester 2</h4><br>

                  <!-- Kelas Reguler SMT 2 -->
                  <div class="row">
                    <?php
                    $query = $this->db->query('SELECT * FROM tb_sebaran where smt="2" and tipe_kelas="R" and  kd_prodi="'.$kode_prodi.'"');

                      foreach ($query->result_array() as $rowSebarans)
                      {
                    ?>
                      <div class="col-sm-12">
                        <div class="card-body">

                          <div class="accordion" id="accordionSebaran<?php echo $rowSebarans['id_sebaran']?>">
                              <div id="headingSebaran<?php echo $rowSebarans['id_sebaran']?>">
                                <h4 class="mb-0">
                                  <a href="#" data-toggle="collapse" data-target="#collapseSebaran<?php echo $rowSebarans['id_sebaran']?>" aria-expanded="true" aria-controls="collapseSebaran<?php echo $rowSebarans['id_sebaran']?>">
                                    <b>
                                      <?php echo $rowSebarans['kd_kelas'] ?>
                                      <?php echo $rowSebarans['nama_matkul'] ?> 
                                  </b>
                                  </a>
                                </h4>
                              </div>

                              <div id="collapseSebaran<?php echo $rowSebarans['id_sebaran']?>" class="collapse hide" aria-labelledby="headingSebaran<?php echo $rowSebarans['id_sebaran']?>" data-parent="#accordionSebaran<?php echo $rowSebarans['id_sebaran']?>">
                                <div class="card-body">
                                                    <table class="table">
                                                      <tr>
                                                        <td><b>Kode Kelas</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['kd_kelas'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td><b>Kode Matakuliah</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['kd_matkul'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td><b>SKS Teori</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['sks_teori'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td><b>SKS Praktek</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['sks_praktek'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td><b>SKS</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['sks'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td><b>Jam Mengajar</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['jam'] ?> Jam
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td colspan="2">
                                                          <b>Dosen</b><br><br>
                                                          <?php echo $rowSebarans['dosen'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td colspan="2">
                                                          <b>Keterangan</b><br><br>
                                                          <?php echo $rowSebarans['ket'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td align="right" colspan="2">
                                                          <a href="#" class="btn btn-danger">Go somewhere</a>
                                                        </td>
                                                      </tr>
                                                    </table>
                                </div>
                              </div>
                          </div>

                          
                      </div>
                    </div>

                  <?php }?>

                  </div>

      </div>
      <div class="tab-pane fade" id="pills-sore-smt2" role="tabpanel" aria-labelledby="pills-sore-smt2-tab">
                <h4 align="center">Kelas Sore Semester 2</h4><br>

                  <!-- Kelas Sore SMT 2 -->
                  <div class="row">
                    <?php
                    $query = $this->db->query('SELECT * FROM tb_sebaran where smt="2" and tipe_kelas="S" and  kd_prodi="'.$kode_prodi.'"');

                      foreach ($query->result_array() as $rowSebarans)
                      {
                    ?>
                      <div class="col-sm-12">
                        <div class="card-body">

                          <div class="accordion" id="accordionSebaran<?php echo $rowSebarans['id_sebaran']?>">
                              <div id="headingSebaran<?php echo $rowSebarans['id_sebaran']?>">
                                <h4 class="mb-0">
                                  <a href="#" data-toggle="collapse" data-target="#collapseSebaran<?php echo $rowSebarans['id_sebaran']?>" aria-expanded="true" aria-controls="collapseSebaran<?php echo $rowSebarans['id_sebaran']?>">
                                    <b>
                                      <?php echo $rowSebarans['kd_kelas'] ?>
                                      <?php echo $rowSebarans['nama_matkul'] ?> 
                                  </b>
                                  </a>
                                </h4>
                              </div>

                              <div id="collapseSebaran<?php echo $rowSebarans['id_sebaran']?>" class="collapse hide" aria-labelledby="headingSebaran<?php echo $rowSebarans['id_sebaran']?>" data-parent="#accordionSebaran<?php echo $rowSebarans['id_sebaran']?>">
                                <div class="card-body">
                                                    <table class="table">
                                                      <tr>
                                                        <td><b>Kode Kelas</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['kd_kelas'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td><b>Kode Matakuliah</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['kd_matkul'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td><b>SKS Teori</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['sks_teori'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td><b>SKS Praktek</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['sks_praktek'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td><b>SKS</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['sks'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td><b>Jam Mengajar</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['jam'] ?> Jam
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td colspan="2">
                                                          <b>Dosen</b><br><br>
                                                          <?php echo $rowSebarans['dosen'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td colspan="2">
                                                          <b>Keterangan</b><br><br>
                                                          <?php echo $rowSebarans['ket'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td align="right" colspan="2">
                                                          <a href="#" class="btn btn-danger">Go somewhere</a>
                                                        </td>
                                                      </tr>
                                                    </table>
                                </div>
                              </div>
                          </div>

                          
                      </div>
                    </div>

                  <?php }?>

                  </div>

      </div>
    </div>

  </div>
  <!-- Konten Semester 3 --> 
  <div class="tab-pane fade" id="nav-smt3" role="tabpanel" aria-labelledby="nav-smt3-tab">
    <br>
    <!-- Tipe Kelas Semester 3--> 
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="pills-reguler-smt3-tab" data-toggle="pill" href="#pills-reguler-smt3" role="tab" aria-controls="pills-reguler-smt3" aria-selected="true">Kelas Reguler</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="pills-sore-smt3-tab" data-toggle="pill" href="#pills-sore-smt3" role="tab" aria-controls="pills-sore-smt3" aria-selected="false">Kelas Sore</a>
      </li>
    </ul>
    <!-- Konten Tipe Kelas -->
    <div class="tab-content" id="pills-tabContent">

      <div class="tab-pane fade show active" id="pills-reguler-smt3" role="tabpanel" aria-labelledby="pills-reguler-smt3-tab">
        <h4 align="center">Kelas Reguler Semester 3</h4><br>

                  <!-- Kelas Reguler SMT 3 -->
                  <div class="row">
                    <?php
                    $query = $this->db->query('SELECT * FROM tb_sebaran where smt="3" and tipe_kelas="R" and  kd_prodi="'.$kode_prodi.'"');

                      foreach ($query->result_array() as $rowSebarans)
                      {
                    ?>
                      <div class="col-sm-12">
                        <div class="card-body">

                          <div class="accordion" id="accordionSebaran<?php echo $rowSebarans['id_sebaran']?>">
                              <div id="headingSebaran<?php echo $rowSebarans['id_sebaran']?>">
                                <h4 class="mb-0">
                                  <a href="#" data-toggle="collapse" data-target="#collapseSebaran<?php echo $rowSebarans['id_sebaran']?>" aria-expanded="true" aria-controls="collapseSebaran<?php echo $rowSebarans['id_sebaran']?>">
                                    <b>
                                      <?php echo $rowSebarans['kd_kelas'] ?>
                                      <?php echo $rowSebarans['nama_matkul'] ?> 
                                  </b>
                                  </a>
                                </h4>
                              </div>

                              <div id="collapseSebaran<?php echo $rowSebarans['id_sebaran']?>" class="collapse hide" aria-labelledby="headingSebaran<?php echo $rowSebarans['id_sebaran']?>" data-parent="#accordionSebaran<?php echo $rowSebarans['id_sebaran']?>">
                                <div class="card-body">
                                                    <table class="table">
                                                      <tr>
                                                        <td><b>Kode Kelas</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['kd_kelas'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td><b>Kode Matakuliah</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['kd_matkul'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td><b>SKS Teori</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['sks_teori'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td><b>SKS Praktek</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['sks_praktek'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td><b>SKS</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['sks'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td><b>Jam Mengajar</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['jam'] ?> Jam
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td colspan="2">
                                                          <b>Dosen</b><br><br>
                                                          <?php echo $rowSebarans['dosen'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td colspan="2">
                                                          <b>Keterangan</b><br><br>
                                                          <?php echo $rowSebarans['ket'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td align="right" colspan="2">
                                                          <a href="#" class="btn btn-danger">Go somewhere</a>
                                                        </td>
                                                      </tr>
                                                    </table>
                                </div>
                              </div>
                          </div>

                          
                      </div>
                    </div>

                  <?php }?>

                  </div>

      </div>
      <div class="tab-pane fade" id="pills-sore-smt3" role="tabpanel" aria-labelledby="pills-sore-smt3">
                <h4 align="center">Kelas Sore Semester 3</h4><br>

                  <!-- Kelas Sore SMT 3 -->
                  <div class="row">
                    <?php
                    $query = $this->db->query('SELECT * FROM tb_sebaran where smt="3" and tipe_kelas="S" and  kd_prodi="'.$kode_prodi.'"');

                      foreach ($query->result_array() as $rowSebarans)
                      {
                    ?>
                      <div class="col-sm-12">
                        <div class="card-body">

                          <div class="accordion" id="accordionSebaran<?php echo $rowSebarans['id_sebaran']?>">
                              <div id="headingSebaran<?php echo $rowSebarans['id_sebaran']?>">
                                <h4 class="mb-0">
                                  <a href="#" data-toggle="collapse" data-target="#collapseSebaran<?php echo $rowSebarans['id_sebaran']?>" aria-expanded="true" aria-controls="collapseSebaran<?php echo $rowSebarans['id_sebaran']?>">
                                    <b>
                                      <?php echo $rowSebarans['kd_kelas'] ?>
                                      <?php echo $rowSebarans['nama_matkul'] ?> 
                                  </b>
                                  </a>
                                </h4>
                              </div>

                              <div id="collapseSebaran<?php echo $rowSebarans['id_sebaran']?>" class="collapse hide" aria-labelledby="headingSebaran<?php echo $rowSebarans['id_sebaran']?>" data-parent="#accordionSebaran<?php echo $rowSebarans['id_sebaran']?>">
                                <div class="card-body">
                                                    <table class="table">
                                                      <tr>
                                                        <td><b>Kode Kelas</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['kd_kelas'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td><b>Kode Matakuliah</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['kd_matkul'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td><b>SKS Teori</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['sks_teori'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td><b>SKS Praktek</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['sks_praktek'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td><b>SKS</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['sks'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td><b>Jam Mengajar</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['jam'] ?> Jam
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td colspan="2">
                                                          <b>Dosen</b><br><br>
                                                          <?php echo $rowSebarans['dosen'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td colspan="2">
                                                          <b>Keterangan</b><br><br>
                                                          <?php echo $rowSebarans['ket'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td align="right" colspan="2">
                                                          <a href="#" class="btn btn-danger">Go somewhere</a>
                                                        </td>
                                                      </tr>
                                                    </table>
                                </div>
                              </div>
                          </div>

                          
                      </div>
                    </div>

                  <?php }?>

                  </div>

      </div>
    </div>

  </div>
  <!-- Konten Semester 4 -->
  <div class="tab-pane fade" id="nav-smt4" role="tabpanel" aria-labelledby="nav-smt4-tab">
    <br>
    <!-- Tipe Kelas Semester 1--> 
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="pills-reguler-smt4-tab" data-toggle="pill" href="#pills-reguler-smt4" role="tab" aria-controls="pills-reguler-smt4" aria-selected="true">Kelas Reguler</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="pills-sore-smt4-tab" data-toggle="pill" href="#pills-sore-smt4" role="tab" aria-controls="pills-sore-smt4" aria-selected="false">Kelas Sore</a>
      </li>
    </ul>
    <!-- Konten Tipe Kelas -->
    <div class="tab-content" id="pills-tabContent">

      <div class="tab-pane fade show active" id="pills-reguler-smt4" role="tabpanel" aria-labelledby="pills-reguler-smt4-tab">
        <h4 align="center">Kelas Reguler Semester 4</h4><br>

                  <!-- Kelas Reguler SMT 4 -->
                  <div class="row">
                    <?php
                    $query = $this->db->query('SELECT * FROM tb_sebaran where smt="4" and tipe_kelas="R" and  kd_prodi="'.$kode_prodi.'"');

                      foreach ($query->result_array() as $rowSebarans)
                      {
                    ?>
                      <div class="col-sm-12">
                        <div class="card-body">

                          <div class="accordion" id="accordionSebaran<?php echo $rowSebarans['id_sebaran']?>">
                              <div id="headingSebaran<?php echo $rowSebarans['id_sebaran']?>">
                                <h4 class="mb-0">
                                  <a href="#" data-toggle="collapse" data-target="#collapseSebaran<?php echo $rowSebarans['id_sebaran']?>" aria-expanded="true" aria-controls="collapseSebaran<?php echo $rowSebarans['id_sebaran']?>">
                                    <b>
                                      <?php echo $rowSebarans['kd_kelas'] ?>
                                      <?php echo $rowSebarans['nama_matkul'] ?> 
                                  </b>
                                  </a>
                                </h4>
                              </div>

                              <div id="collapseSebaran<?php echo $rowSebarans['id_sebaran']?>" class="collapse hide" aria-labelledby="headingSebaran<?php echo $rowSebarans['id_sebaran']?>" data-parent="#accordionSebaran<?php echo $rowSebarans['id_sebaran']?>">
                                <div class="card-body">
                                                    <table class="table">
                                                      <tr>
                                                        <td><b>Kode Kelas</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['kd_kelas'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td><b>Kode Matakuliah</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['kd_matkul'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td><b>SKS Teori</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['sks_teori'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td><b>SKS Praktek</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['sks_praktek'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td><b>SKS</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['sks'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td><b>Jam Mengajar</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['jam'] ?> Jam
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td colspan="2">
                                                          <b>Dosen</b><br><br>
                                                          <?php echo $rowSebarans['dosen'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td colspan="2">
                                                          <b>Keterangan</b><br><br>
                                                          <?php echo $rowSebarans['ket'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td align="right" colspan="2">
                                                          <a href="#" class="btn btn-danger">Go somewhere</a>
                                                        </td>
                                                      </tr>
                                                    </table>
                                </div>
                              </div>
                          </div>

                          
                      </div>
                    </div>

                  <?php }?>

                  </div>

      </div>
      <div class="tab-pane fade" id="pills-sore-smt4" role="tabpanel" aria-labelledby="pills-sore-smt4">
                <h4 align="center">Kelas Sore Semester 4</h4><br>

                  <!-- Kelas Sore SMT 4 -->
                  <div class="row">
                    <?php
                    $query = $this->db->query('SELECT * FROM tb_sebaran where smt="4" and tipe_kelas="S" and  kd_prodi="'.$kode_prodi.'"');

                      foreach ($query->result_array() as $rowSebarans)
                      {
                    ?>
                      <div class="col-sm-12">
                        <div class="card-body">

                          <div class="accordion" id="accordionSebaran<?php echo $rowSebarans['id_sebaran']?>">
                              <div id="headingSebaran<?php echo $rowSebarans['id_sebaran']?>">
                                <h4 class="mb-0">
                                  <a href="#" data-toggle="collapse" data-target="#collapseSebaran<?php echo $rowSebarans['id_sebaran']?>" aria-expanded="true" aria-controls="collapseSebaran<?php echo $rowSebarans['id_sebaran']?>">
                                    <b>
                                      <?php echo $rowSebarans['kd_kelas'] ?>
                                      <?php echo $rowSebarans['nama_matkul'] ?> 
                                  </b>
                                  </a>
                                </h4>
                              </div>

                              <div id="collapseSebaran<?php echo $rowSebarans['id_sebaran']?>" class="collapse hide" aria-labelledby="headingSebaran<?php echo $rowSebarans['id_sebaran']?>" data-parent="#accordionSebaran<?php echo $rowSebarans['id_sebaran']?>">
                                <div class="card-body">
                                                    <table class="table">
                                                      <tr>
                                                        <td><b>Kode Kelas</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['kd_kelas'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td><b>Kode Matakuliah</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['kd_matkul'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td><b>SKS Teori</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['sks_teori'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td><b>SKS Praktek</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['sks_praktek'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td><b>SKS</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['sks'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td><b>Jam Mengajar</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['jam'] ?> Jam
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td colspan="2">
                                                          <b>Dosen</b><br><br>
                                                          <?php echo $rowSebarans['dosen'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td colspan="2">
                                                          <b>Keterangan</b><br><br>
                                                          <?php echo $rowSebarans['ket'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td align="right" colspan="2">
                                                          <a href="#" class="btn btn-danger">Go somewhere</a>
                                                        </td>
                                                      </tr>
                                                    </table>
                                </div>
                              </div>
                          </div>

                          
                      </div>
                    </div>

                  <?php }?>

                  </div>

      </div>
    </div>
  </div>
  <!-- Konten Semester 5 -->
  <div class="tab-pane fade" id="nav-smt5" role="tabpanel" aria-labelledby="nav-smt5-tab">
    <br>
    <!-- Tipe Kelas Semester 1--> 
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="pills-reguler-smt5-tab" data-toggle="pill" href="#pills-reguler-smt5" role="tab" aria-controls="pills-reguler-smt5" aria-selected="true">Kelas Reguler</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="pills-sore-smt5-tab" data-toggle="pill" href="#pills-sore-smt5" role="tab" aria-controls="pills-sore-smt5" aria-selected="false">Kelas Sore</a>
      </li>
    </ul>
    <!-- Konten Tipe Kelas -->
    <div class="tab-content" id="pills-tabContent">

      <div class="tab-pane fade show active" id="pills-reguler-smt5" role="tabpanel" aria-labelledby="pills-reguler-smt5-tab">
        <h4 align="center">Kelas Reguler Semester 5</h4><br>

                  <!-- Kelas Reguler SMT 5 -->
                  <div class="row">
                    <?php
                    $query = $this->db->query('SELECT * FROM tb_sebaran where smt="5" and tipe_kelas="R" and  kd_prodi="'.$kode_prodi.'"');

                      foreach ($query->result_array() as $rowSebarans)
                      {
                    ?>
                      <div class="col-sm-12">
                        <div class="card-body">

                          <div class="accordion" id="accordionSebaran<?php echo $rowSebarans['id_sebaran']?>">
                              <div id="headingSebaran<?php echo $rowSebarans['id_sebaran']?>">
                                <h4 class="mb-0">
                                  <a href="#" data-toggle="collapse" data-target="#collapseSebaran<?php echo $rowSebarans['id_sebaran']?>" aria-expanded="true" aria-controls="collapseSebaran<?php echo $rowSebarans['id_sebaran']?>">
                                    <b>
                                      <?php echo $rowSebarans['kd_kelas'] ?>
                                      <?php echo $rowSebarans['nama_matkul'] ?> 
                                  </b>
                                  </a>
                                </h4>
                              </div>

                              <div id="collapseSebaran<?php echo $rowSebarans['id_sebaran']?>" class="collapse hide" aria-labelledby="headingSebaran<?php echo $rowSebarans['id_sebaran']?>" data-parent="#accordionSebaran<?php echo $rowSebarans['id_sebaran']?>">
                                <div class="card-body">
                                                    <table class="table">
                                                      <tr>
                                                        <td><b>Kode Kelas</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['kd_kelas'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td><b>Kode Matakuliah</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['kd_matkul'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td><b>SKS Teori</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['sks_teori'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td><b>SKS Praktek</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['sks_praktek'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td><b>SKS</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['sks'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td><b>Jam Mengajar</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['jam'] ?> Jam
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td colspan="2">
                                                          <b>Dosen</b><br><br>
                                                          <?php echo $rowSebarans['dosen'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td colspan="2">
                                                          <b>Keterangan</b><br><br>
                                                          <?php echo $rowSebarans['ket'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td align="right" colspan="2">
                                                          <a href="#" class="btn btn-danger">Go somewhere</a>
                                                        </td>
                                                      </tr>
                                                    </table>
                                </div>
                              </div>
                          </div>

                          
                      </div>
                    </div>

                  <?php }?>

                  </div>

      </div>
      <div class="tab-pane fade" id="pills-sore-smt5" role="tabpanel" aria-labelledby="pills-sore-smt5">
                <h4 align="center">Kelas Sore Semester 5</h4><br>

                  <!-- Kelas Sore SMT 5 -->
                  <div class="row">
                    <?php
                    $query = $this->db->query('SELECT * FROM tb_sebaran where smt="5" and tipe_kelas="S" and  kd_prodi="'.$kode_prodi.'"');

                      foreach ($query->result_array() as $rowSebarans)
                      {
                    ?>
                      <div class="col-sm-12">
                        <div class="card-body">

                          <div class="accordion" id="accordionSebaran<?php echo $rowSebarans['id_sebaran']?>">
                              <div id="headingSebaran<?php echo $rowSebarans['id_sebaran']?>">
                                <h4 class="mb-0">
                                  <a href="#" data-toggle="collapse" data-target="#collapseSebaran<?php echo $rowSebarans['id_sebaran']?>" aria-expanded="true" aria-controls="collapseSebaran<?php echo $rowSebarans['id_sebaran']?>">
                                    <b>
                                      <?php echo $rowSebarans['kd_kelas'] ?>
                                      <?php echo $rowSebarans['nama_matkul'] ?> 
                                  </b>
                                  </a>
                                </h4>
                              </div>

                              <div id="collapseSebaran<?php echo $rowSebarans['id_sebaran']?>" class="collapse hide" aria-labelledby="headingSebaran<?php echo $rowSebarans['id_sebaran']?>" data-parent="#accordionSebaran<?php echo $rowSebarans['id_sebaran']?>">
                                <div class="card-body">
                                                    <table class="table">
                                                      <tr>
                                                        <td><b>Kode Kelas</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['kd_kelas'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td><b>Kode Matakuliah</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['kd_matkul'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td><b>SKS Teori</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['sks_teori'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td><b>SKS Praktek</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['sks_praktek'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td><b>SKS</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['sks'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td><b>Jam Mengajar</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['jam'] ?> Jam
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td colspan="2">
                                                          <b>Dosen</b><br><br>
                                                          <?php echo $rowSebarans['dosen'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td colspan="2">
                                                          <b>Keterangan</b><br><br>
                                                          <?php echo $rowSebarans['ket'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td align="right" colspan="2">
                                                          <a href="#" class="btn btn-danger">Go somewhere</a>
                                                        </td>
                                                      </tr>
                                                    </table>
                                </div>
                              </div>
                          </div>

                          
                      </div>
                    </div>

                  <?php }?>

                  </div>

      </div>
    </div>

  </div>
  <!-- Konten Semester 6 -->
  <div class="tab-pane fade" id="nav-smt6" role="tabpanel" aria-labelledby="nav-smt6-tab">
    <br>
    <!-- Tipe Kelas Semester 1--> 
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="pills-reguler-smt6-tab" data-toggle="pill" href="#pills-reguler-smt6" role="tab" aria-controls="pills-reguler-smt6" aria-selected="true">Kelas Reguler</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="pills-sore-smt6-tab" data-toggle="pill" href="#pills-sore-smt6" role="tab" aria-controls="pills-sore-smt6" aria-selected="false">Kelas Sore</a>
      </li>
    </ul>
    <!-- Konten Tipe Kelas -->
    <div class="tab-content" id="pills-tabContent">

      <div class="tab-pane fade show active" id="pills-reguler-smt6" role="tabpanel" aria-labelledby="pills-reguler-smt6-tab">
        <h4 align="center">Kelas Reguler Semester 6</h4><br>

                  <!-- Kelas Reguler SMT 6 -->
                  <div class="row">
                    <?php
                    $query = $this->db->query('SELECT * FROM tb_sebaran where smt="6" and tipe_kelas="R" and  kd_prodi="'.$kode_prodi.'"');

                      foreach ($query->result_array() as $rowSebarans)
                      {
                    ?>
                      <div class="col-sm-12">
                        <div class="card-body">

                          <div class="accordion" id="accordionSebaran<?php echo $rowSebarans['id_sebaran']?>">
                              <div id="headingSebaran<?php echo $rowSebarans['id_sebaran']?>">
                                <h4 class="mb-0">
                                  <a href="#" data-toggle="collapse" data-target="#collapseSebaran<?php echo $rowSebarans['id_sebaran']?>" aria-expanded="true" aria-controls="collapseSebaran<?php echo $rowSebarans['id_sebaran']?>">
                                    <b>
                                      <?php echo $rowSebarans['kd_kelas'] ?>
                                      <?php echo $rowSebarans['nama_matkul'] ?> 
                                  </b>
                                  </a>
                                </h4>
                              </div>

                              <div id="collapseSebaran<?php echo $rowSebarans['id_sebaran']?>" class="collapse hide" aria-labelledby="headingSebaran<?php echo $rowSebarans['id_sebaran']?>" data-parent="#accordionSebaran<?php echo $rowSebarans['id_sebaran']?>">
                                <div class="card-body">
                                                    <table class="table">
                                                      <tr>
                                                        <td><b>Kode Kelas</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['kd_kelas'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td><b>Kode Matakuliah</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['kd_matkul'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td><b>SKS Teori</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['sks_teori'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td><b>SKS Praktek</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['sks_praktek'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td><b>SKS</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['sks'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td><b>Jam Mengajar</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['jam'] ?> Jam
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td colspan="2">
                                                          <b>Dosen</b><br><br>
                                                          <?php echo $rowSebarans['dosen'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td colspan="2">
                                                          <b>Keterangan</b><br><br>
                                                          <?php echo $rowSebarans['ket'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td align="right" colspan="2">
                                                          <a href="#" class="btn btn-danger">Go somewhere</a>
                                                        </td>
                                                      </tr>
                                                    </table>
                                </div>
                              </div>
                          </div>

                          
                      </div>
                    </div>

                  <?php }?>

                  </div>

      </div>
      <div class="tab-pane fade" id="pills-sore-smt6" role="tabpanel" aria-labelledby="pills-sore-smt6">
                <h4 align="center">Kelas Sore Semester 6</h4><br>

                  <!-- Kelas Sore SMT 6 -->
                  <div class="row">
                    <?php
                    $query = $this->db->query('SELECT * FROM tb_sebaran where smt="6" and tipe_kelas="S" and  kd_prodi="'.$kode_prodi.'"');

                      foreach ($query->result_array() as $rowSebarans)
                      {
                    ?>
                      <div class="col-sm-12">
                        <div class="card-body">

                          <div class="accordion" id="accordionSebaran<?php echo $rowSebarans['id_sebaran']?>">
                              <div id="headingSebaran<?php echo $rowSebarans['id_sebaran']?>">
                                <h4 class="mb-0">
                                  <a href="#" data-toggle="collapse" data-target="#collapseSebaran<?php echo $rowSebarans['id_sebaran']?>" aria-expanded="true" aria-controls="collapseSebaran<?php echo $rowSebarans['id_sebaran']?>">
                                    <b>
                                      <?php echo $rowSebarans['kd_kelas'] ?>
                                      <?php echo $rowSebarans['nama_matkul'] ?> 
                                  </b>
                                  </a>
                                </h4>
                              </div>

                              <div id="collapseSebaran<?php echo $rowSebarans['id_sebaran']?>" class="collapse hide" aria-labelledby="headingSebaran<?php echo $rowSebarans['id_sebaran']?>" data-parent="#accordionSebaran<?php echo $rowSebarans['id_sebaran']?>">
                                <div class="card-body">
                                                    <table class="table">
                                                      <tr>
                                                        <td><b>Kode Kelas</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['kd_kelas'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td><b>Kode Matakuliah</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['kd_matkul'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td><b>SKS Teori</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['sks_teori'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td><b>SKS Praktek</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['sks_praktek'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td><b>SKS</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['sks'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td><b>Jam Mengajar</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['jam'] ?> Jam
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td colspan="2">
                                                          <b>Dosen</b><br><br>
                                                          <?php echo $rowSebarans['dosen'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td colspan="2">
                                                          <b>Keterangan</b><br><br>
                                                          <?php echo $rowSebarans['ket'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td align="right" colspan="2">
                                                          <a href="#" class="btn btn-danger">Go somewhere</a>
                                                        </td>
                                                      </tr>
                                                    </table>
                                </div>
                              </div>
                          </div>

                          
                      </div>
                    </div>

                  <?php }?>

                  </div>

      </div>
    </div>

  </div>
  <!-- Konten Semester 7 -->
  <div class="tab-pane fade" id="nav-smt7" role="tabpanel" aria-labelledby="nav-smt7-tab">
    <br>
    <!-- Tipe Kelas Semester 1--> 
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="pills-reguler-smt7-tab" data-toggle="pill" href="#pills-reguler-smt7" role="tab" aria-controls="pills-reguler-smt7" aria-selected="true">Kelas Reguler</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="pills-sore-smt7-tab" data-toggle="pill" href="#pills-sore-smt7" role="tab" aria-controls="pills-sore-smt7" aria-selected="false">Kelas Sore</a>
      </li>
    </ul>
    <!-- Konten Tipe Kelas -->
    <div class="tab-content" id="pills-tabContent">

      <div class="tab-pane fade show active" id="pills-reguler-smt7" role="tabpanel" aria-labelledby="pills-reguler-smt7-tab">
        <h4 align="center">Kelas Reguler Semester 7</h4><br>

                  <!-- Kelas Reguler SMT 7 -->
                  <div class="row">
                    <?php
                    $query = $this->db->query('SELECT * FROM tb_sebaran where smt="7" and tipe_kelas="R" and  kd_prodi="'.$kode_prodi.'"');

                      foreach ($query->result_array() as $rowSebarans)
                      {
                    ?>
                      <div class="col-sm-12">
                        <div class="card-body">

                          <div class="accordion" id="accordionSebaran<?php echo $rowSebarans['id_sebaran']?>">
                              <div id="headingSebaran<?php echo $rowSebarans['id_sebaran']?>">
                                <h4 class="mb-0">
                                  <a href="#" data-toggle="collapse" data-target="#collapseSebaran<?php echo $rowSebarans['id_sebaran']?>" aria-expanded="true" aria-controls="collapseSebaran<?php echo $rowSebarans['id_sebaran']?>">
                                    <b>
                                      <?php echo $rowSebarans['kd_kelas'] ?>
                                      <?php echo $rowSebarans['nama_matkul'] ?> 
                                  </b>
                                  </a>
                                </h4>
                              </div>

                              <div id="collapseSebaran<?php echo $rowSebarans['id_sebaran']?>" class="collapse hide" aria-labelledby="headingSebaran<?php echo $rowSebarans['id_sebaran']?>" data-parent="#accordionSebaran<?php echo $rowSebarans['id_sebaran']?>">
                                <div class="card-body">
                                                    <table class="table">
                                                      <tr>
                                                        <td><b>Kode Kelas</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['kd_kelas'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td><b>Kode Matakuliah</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['kd_matkul'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td><b>SKS Teori</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['sks_teori'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td><b>SKS Praktek</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['sks_praktek'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td><b>SKS</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['sks'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td><b>Jam Mengajar</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['jam'] ?> Jam
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td colspan="2">
                                                          <b>Dosen</b><br><br>
                                                          <?php echo $rowSebarans['dosen'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td colspan="2">
                                                          <b>Keterangan</b><br><br>
                                                          <?php echo $rowSebarans['ket'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td align="right" colspan="2">
                                                          <a href="#" class="btn btn-danger">Go somewhere</a>
                                                        </td>
                                                      </tr>
                                                    </table>
                                </div>
                              </div>
                          </div>

                          
                      </div>
                    </div>

                  <?php }?>

                  </div>

      </div>
      <div class="tab-pane fade" id="pills-sore-smt7" role="tabpanel" aria-labelledby="pills-sore-smt7">
                <h4 align="center">Kelas Sore Semester 7</h4><br>

                  <!-- Kelas Sore SMT 8 -->
                  <div class="row">
                    <?php
                    $query = $this->db->query('SELECT * FROM tb_sebaran where smt="7" and tipe_kelas="S" and  kd_prodi="'.$kode_prodi.'"');

                      foreach ($query->result_array() as $rowSebarans)
                      {
                    ?>
                      <div class="col-sm-12">
                        <div class="card-body">

                          <div class="accordion" id="accordionSebaran<?php echo $rowSebarans['id_sebaran']?>">
                              <div id="headingSebaran<?php echo $rowSebarans['id_sebaran']?>">
                                <h4 class="mb-0">
                                  <a href="#" data-toggle="collapse" data-target="#collapseSebaran<?php echo $rowSebarans['id_sebaran']?>" aria-expanded="true" aria-controls="collapseSebaran<?php echo $rowSebarans['id_sebaran']?>">
                                    <b>
                                      <?php echo $rowSebarans['kd_kelas'] ?>
                                      <?php echo $rowSebarans['nama_matkul'] ?> 
                                  </b>
                                  </a>
                                </h4>
                              </div>

                              <div id="collapseSebaran<?php echo $rowSebarans['id_sebaran']?>" class="collapse hide" aria-labelledby="headingSebaran<?php echo $rowSebarans['id_sebaran']?>" data-parent="#accordionSebaran<?php echo $rowSebarans['id_sebaran']?>">
                                <div class="card-body">
                                                    <table class="table">
                                                      <tr>
                                                        <td><b>Kode Kelas</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['kd_kelas'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td><b>Kode Matakuliah</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['kd_matkul'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td><b>SKS Teori</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['sks_teori'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td><b>SKS Praktek</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['sks_praktek'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td><b>SKS</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['sks'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td><b>Jam Mengajar</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['jam'] ?> Jam
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td colspan="2">
                                                          <b>Dosen</b><br><br>
                                                          <?php echo $rowSebarans['dosen'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td colspan="2">
                                                          <b>Keterangan</b><br><br>
                                                          <?php echo $rowSebarans['ket'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td align="right" colspan="2">
                                                          <a href="#" class="btn btn-danger">Go somewhere</a>
                                                        </td>
                                                      </tr>
                                                    </table>
                                </div>
                              </div>
                          </div>

                          
                      </div>
                    </div>

                  <?php }?>

                  </div>

      </div>
    </div>

  </div>
  <!-- Konten Semester 8 -->
  <div class="tab-pane fade" id="nav-smt8" role="tabpanel" aria-labelledby="nav-smt7-tab">
    <br>
    <!-- Tipe Kelas Semester 1--> 
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="pills-reguler-smt8-tab" data-toggle="pill" href="#pills-reguler-smt8" role="tab" aria-controls="pills-reguler-smt8" aria-selected="true">Kelas Reguler</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="pills-sore-smt8-tab" data-toggle="pill" href="#pills-sore-smt8" role="tab" aria-controls="pills-sore-smt8" aria-selected="false">Kelas Sore</a>
      </li>
    </ul>
    <!-- Konten Tipe Kelas -->
    <div class="tab-content" id="pills-tabContent">

      <div class="tab-pane fade show active" id="pills-reguler-smt8" role="tabpanel" aria-labelledby="pills-reguler-smt8-tab">
        <h4 align="center">Kelas Reguler Semester 8</h4><br>

                  <!-- Kelas Reguler SMT 8 -->
                  <div class="row">
                    <?php
                    $query = $this->db->query('SELECT * FROM tb_sebaran where smt="8" and tipe_kelas="R" and  kd_prodi="'.$kode_prodi.'"');

                      foreach ($query->result_array() as $rowSebarans)
                      {
                    ?>
                      <div class="col-sm-12">
                        <div class="card-body">

                          <div class="accordion" id="accordionSebaran<?php echo $rowSebarans['id_sebaran']?>">
                              <div id="headingSebaran<?php echo $rowSebarans['id_sebaran']?>">
                                <h4 class="mb-0">
                                  <a href="#" data-toggle="collapse" data-target="#collapseSebaran<?php echo $rowSebarans['id_sebaran']?>" aria-expanded="true" aria-controls="collapseSebaran<?php echo $rowSebarans['id_sebaran']?>">
                                    <b>
                                      <?php echo $rowSebarans['kd_kelas'] ?>
                                      <?php echo $rowSebarans['nama_matkul'] ?> 
                                  </b>
                                  </a>
                                </h4>
                              </div>

                              <div id="collapseSebaran<?php echo $rowSebarans['id_sebaran']?>" class="collapse hide" aria-labelledby="headingSebaran<?php echo $rowSebarans['id_sebaran']?>" data-parent="#accordionSebaran<?php echo $rowSebarans['id_sebaran']?>">
                                <div class="card-body">
                                                    <table class="table">
                                                      <tr>
                                                        <td><b>Kode Kelas</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['kd_kelas'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td><b>Kode Matakuliah</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['kd_matkul'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td><b>SKS Teori</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['sks_teori'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td><b>SKS Praktek</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['sks_praktek'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td><b>SKS</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['sks'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td><b>Jam Mengajar</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['jam'] ?> Jam
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td colspan="2">
                                                          <b>Dosen</b><br><br>
                                                          <?php echo $rowSebarans['dosen'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td colspan="2">
                                                          <b>Keterangan</b><br><br>
                                                          <?php echo $rowSebarans['ket'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td align="right" colspan="2">
                                                          <a href="#" class="btn btn-danger">Go somewhere</a>
                                                        </td>
                                                      </tr>
                                                    </table>
                                </div>
                              </div>
                          </div>

                          
                      </div>
                    </div>

                  <?php }?>

                  </div>

      </div>
      <div class="tab-pane fade" id="pills-sore-smt8" role="tabpanel" aria-labelledby="pills-sore-smt8">
                <h4 align="center">Kelas Sore Semester 8</h4><br>

                  <!-- Kelas Sore SMT 8 -->
                  <div class="row">
                    <?php
                    $query = $this->db->query('SELECT * FROM tb_sebaran where smt="8" and tipe_kelas="S" and  kd_prodi="'.$kode_prodi.'"');

                      foreach ($query->result_array() as $rowSebarans)
                      {
                    ?>
                      <div class="col-sm-12">
                        <div class="card-body">

                          <div class="accordion" id="accordionSebaran<?php echo $rowSebarans['id_sebaran']?>">
                              <div id="headingSebaran<?php echo $rowSebarans['id_sebaran']?>">
                                <h4 class="mb-0">
                                  <a href="#" data-toggle="collapse" data-target="#collapseSebaran<?php echo $rowSebarans['id_sebaran']?>" aria-expanded="true" aria-controls="collapseSebaran<?php echo $rowSebarans['id_sebaran']?>">
                                    <b>
                                      <?php echo $rowSebarans['kd_kelas'] ?>
                                      <?php echo $rowSebarans['nama_matkul'] ?> 
                                  </b>
                                  </a>
                                </h4>
                              </div>

                              <div id="collapseSebaran<?php echo $rowSebarans['id_sebaran']?>" class="collapse hide" aria-labelledby="headingSebaran<?php echo $rowSebarans['id_sebaran']?>" data-parent="#accordionSebaran<?php echo $rowSebarans['id_sebaran']?>">
                                <div class="card-body">
                                                    <table class="table">
                                                      <tr>
                                                        <td><b>Kode Kelas</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['kd_kelas'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td><b>Kode Matakuliah</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['kd_matkul'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td><b>SKS Teori</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['sks_teori'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td><b>SKS Praktek</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['sks_praktek'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td><b>SKS</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['sks'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td><b>Jam Mengajar</b></td>
                                                        <td align="right">
                                                          <?php echo $rowSebarans['jam'] ?> Jam
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td colspan="2">
                                                          <b>Dosen</b><br><br>
                                                          <?php echo $rowSebarans['dosen'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td colspan="2">
                                                          <b>Keterangan</b><br><br>
                                                          <?php echo $rowSebarans['ket'] ?>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td align="right" colspan="2">
                                                          <a href="#" class="btn btn-danger">Go somewhere</a>
                                                        </td>
                                                      </tr>
                                                    </table>
                                </div>
                              </div>
                          </div>

                          
                      </div>
                    </div>

                  <?php }?>

                  </div>

      </div>
    </div>

  </div>


<br>


            </div>
          </div>
        </div>
  </div>
<?php }?>