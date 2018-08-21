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
            <a href="<?php echo(base_url())?>dashboard/akademik/manageSebaran" class="btn btn-dark text-white">Kembali Ke Halaman List Sebaran (Semua Prodi)</a>
            <h1 class="display-6 text-center">Manage Sebaran Prodi <?php echo $rowProdi['nama_prodi']?></h1>
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

<select id='s'>
    <option>First</option>
    <option selected>Second</option>
    <option>Third</option>
</select>

<script type="text/javascript">
var select = document.getElementById('s');

// return the index of the selected option
//console.log(select.selectedIndex); // 1

// return the value of the selected option
console.log(select.options[select.selectedIndex].value) // Second
</script>

  <?php echo form_open(base_url().'dashboard/akademik/manageMatkul/Add');?>
    <div class="form-row">
      <div class="form-group col-md-2">
          <input type="hidden" name="kodeProdiPOST" value="<?php echo $rowProdi['kd_prodi']?>"/>
          <label for="inputEmail4">Kode Kelas</label>



        <div class="input-group-prepend">
          <div class="input-group-text col-md-3"><?php echo $rowProdi['kd_prodi'];?>-</div>
          <input type="text" readonly="readonly" class="form-control" id="kd_kelasJS">
        </div>    

        </div>
        <div class="form-group col-md-1">
          <label for="inputPassword4">Tipe Kelas</label>
          <select class="form-control">
            <option>Pilih</option>
            <option>Reguler</option>
            <option>Sore</option>
          </select>
        </div>
        <div class="form-group col-md-2">
          <label for="inputPassword4">Group</label>
          <input type="text" class="form-control" name="">
        </div>
        <div class="form-group col-md-1">
          <label for="inputEmail4">Semester</label>
          <select class="form-control" id="semesterJS" onClick="updatekdKelas()" />
            <option>Pilih</option>
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
          <label for="inputEmail4">Dosen Pengajar</label>
    
            <select id="select-namadosenAdd" class="form-control">
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

        <div class="form-group col-md-8">
          <label for="inputEmail4">Nama Matakuliah</label>
    
            <select id="select-namamatkulAdd" class="form-control">
              <option></option>
                <?php 
                  $querygetNamaMatkul = $this->db->query('SELECT * FROM tb_matakuliah where status="1" AND kd_prodi="'.$rowProdi['kd_prodi'].'"');
                  foreach ($querygetNamaMatkul->result_array() as $rowAddNamaMatkul) {
                    echo '<option value="'.$rowAddNamaMatkul['nama_matkul'].'">'.$rowAddNamaMatkul['nama_matkul'].'</option>';
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

        <div class="form-group col-md-1">
          <label for="inputPassword4">SKS Teori</label>
          <input class="form-control" type="text" name="" disabled="true" >
        </div>
        <div class="form-group col-md-1">
          <label for="inputPassword4">SKS Praktek</label>
          <input class="form-control" type="text" name="" disabled="true" >
        </div>
        <div class="form-group col-md-1">
          <label for="inputPassword4">SKS</label>
          <input class="form-control" type="text" name="" disabled="true" >
        </div>
        <div class="form-group col-md-1">
          <label for="inputPassword4">Jam</label>
          <input class="form-control" type="text" name="" disabled="true" >
        </div>

        <div class="form-group col-md-12">
          <label for="inputPassword4">Keterangan</label>
          <input class="form-control" type="text" name="">
        </div>

      <div class="form-group col-md-12">
        <input class="span4 input-big form-control" id="dare_price" name="price" size="30" type="text" onChange="updatePrice()" />
        <input class="span4 input-big form-control" id="total_price_amount" readonly="readonly" value=""/>
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
              <table class="table">
                <thead>
                  <tr align="center">
                    <th>Kode Matakuliah</th>
                    <th>Nama Matakuliah</th>
                    <th>SKS Teori</th>
                    <th>SKS Praktek</th>
                    <th>Status</th>
                    <th>Aksi</th>

                  </tr>
                </thead>

                <tbody>
                <?php
                $query = $this->db->get_where('tb_matakuliah', array('kd_prodi'=>$nama_prodi));

                  foreach ($query->result_array() as $row)
                  {
                          ;
                          
                          echo '
                            <tr>
                              <td>'.$row['kd_matkul'].'</td>
                              <td>'.$row['nama_matkul'].'</td>
                              <td>'.$row['sks_teori'].'</td>
                              <td>'.$row['sks_praktek'].'</td>
                              <td>'.$row['status'].'</td>
                              <td align="center">
                                <button data-toggle="modal" data-target="#editData'.$row['kd_matkul'].'" class="btn btn-warning"><i class="fas fa-edit"></i></button>

                                <button data-toggle="modal" data-target="#deleteData'.$row['kd_matkul'].'" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>

                              </td>

                            </tr>

                          ';
                  }
                ?>
                </tbody>
              </table>
      </div>
      <div class="tab-pane fade" id="pills-sore-smt1" role="tabpanel" aria-labelledby="pills-sore-smt1">
                <h4 align="center">Kelas Sore Semester 1</h4><br>
              <table class="table">
                <thead>
                  <tr align="center">
                    <th>Kode Matakuliah</th>
                    <th>Nama Matakuliah</th>
                    <th>SKS Teori</th>
                    <th>SKS Praktek</th>
                    <th>Status</th>
                    <th>Aksi</th>

                  </tr>
                </thead>

                <tbody>
                <?php
                $query = $this->db->get_where('tb_matakuliah', array('kd_prodi'=>$nama_prodi));

                  foreach ($query->result_array() as $row)
                  {
                          ;
                          
                          echo '
                            <tr>
                              <td>'.$row['kd_matkul'].'</td>
                              <td>'.$row['nama_matkul'].'</td>
                              <td>'.$row['sks_teori'].'</td>
                              <td>'.$row['sks_praktek'].'</td>
                              <td>'.$row['status'].'</td>
                              <td align="center">
                                <button data-toggle="modal" data-target="#editData'.$row['kd_matkul'].'" class="btn btn-warning"><i class="fas fa-edit"></i></button>

                                <button data-toggle="modal" data-target="#deleteData'.$row['kd_matkul'].'" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>

                              </td>

                            </tr>

                          ';
                  }
                ?>
                </tbody>
              </table>
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
              <table class="table">
                <thead>
                  <tr align="center">
                    <th>Kode Matakuliah</th>
                    <th>Nama Matakuliah</th>
                    <th>SKS Teori</th>
                    <th>SKS Praktek</th>
                    <th>Status</th>
                    <th>Aksi</th>

                  </tr>
                </thead>

                <tbody>
                <?php
                $query = $this->db->get_where('tb_matakuliah', array('kd_prodi'=>$nama_prodi));

                  foreach ($query->result_array() as $row)
                  {
                          ;
                          
                          echo '
                            <tr>
                              <td>'.$row['kd_matkul'].'</td>
                              <td>'.$row['nama_matkul'].'</td>
                              <td>'.$row['sks_teori'].'</td>
                              <td>'.$row['sks_praktek'].'</td>
                              <td>'.$row['status'].'</td>
                              <td align="center">
                                <button data-toggle="modal" data-target="#editData'.$row['kd_matkul'].'" class="btn btn-warning"><i class="fas fa-edit"></i></button>

                                <button data-toggle="modal" data-target="#deleteData'.$row['kd_matkul'].'" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>

                              </td>

                            </tr>

                          ';
                  }
                ?>
                </tbody>
              </table>
      </div>
      <div class="tab-pane fade" id="pills-sore-smt2" role="tabpanel" aria-labelledby="pills-sore-smt2-tab">
                <h4 align="center">Kelas Sore Semester 2</h4><br>
              <table class="table">
                <thead>
                  <tr align="center">
                    <th>Kode Matakuliah</th>
                    <th>Nama Matakuliah</th>
                    <th>SKS Teori</th>
                    <th>SKS Praktek</th>
                    <th>Status</th>
                    <th>Aksi</th>

                  </tr>
                </thead>

                <tbody>
                <?php
                $query = $this->db->get_where('tb_matakuliah', array('kd_prodi'=>$nama_prodi));

                  foreach ($query->result_array() as $row)
                  {
                          ;
                          
                          echo '
                            <tr>
                              <td>'.$row['kd_matkul'].'</td>
                              <td>'.$row['nama_matkul'].'</td>
                              <td>'.$row['sks_teori'].'</td>
                              <td>'.$row['sks_praktek'].'</td>
                              <td>'.$row['status'].'</td>
                              <td align="center">
                                <button data-toggle="modal" data-target="#editData'.$row['kd_matkul'].'" class="btn btn-warning"><i class="fas fa-edit"></i></button>

                                <button data-toggle="modal" data-target="#deleteData'.$row['kd_matkul'].'" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>

                              </td>

                            </tr>

                          ';
                  }
                ?>
                </tbody>
              </table>
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
              <table class="table">
                <thead>
                  <tr align="center">
                    <th>Kode Matakuliah</th>
                    <th>Nama Matakuliah</th>
                    <th>SKS Teori</th>
                    <th>SKS Praktek</th>
                    <th>Status</th>
                    <th>Aksi</th>

                  </tr>
                </thead>

                <tbody>
                <?php
                $query = $this->db->get_where('tb_matakuliah', array('kd_prodi'=>$nama_prodi));

                  foreach ($query->result_array() as $row)
                  {
                          ;
                          
                          echo '
                            <tr>
                              <td>'.$row['kd_matkul'].'</td>
                              <td>'.$row['nama_matkul'].'</td>
                              <td>'.$row['sks_teori'].'</td>
                              <td>'.$row['sks_praktek'].'</td>
                              <td>'.$row['status'].'</td>
                              <td align="center">
                                <button data-toggle="modal" data-target="#editData'.$row['kd_matkul'].'" class="btn btn-warning"><i class="fas fa-edit"></i></button>

                                <button data-toggle="modal" data-target="#deleteData'.$row['kd_matkul'].'" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>

                              </td>

                            </tr>

                          ';
                  }
                ?>
                </tbody>
              </table>
      </div>
      <div class="tab-pane fade" id="pills-sore-smt3" role="tabpanel" aria-labelledby="pills-sore-smt3">
                <h4 align="center">Kelas Sore Semester 3</h4><br>
              <table class="table">
                <thead>
                  <tr align="center">
                    <th>Kode Matakuliah</th>
                    <th>Nama Matakuliah</th>
                    <th>SKS Teori</th>
                    <th>SKS Praktek</th>
                    <th>Status</th>
                    <th>Aksi</th>

                  </tr>
                </thead>

                <tbody>
                <?php
                $query = $this->db->get_where('tb_matakuliah', array('kd_prodi'=>$nama_prodi));

                  foreach ($query->result_array() as $row)
                  {
                          ;
                          
                          echo '
                            <tr>
                              <td>'.$row['kd_matkul'].'</td>
                              <td>'.$row['nama_matkul'].'</td>
                              <td>'.$row['sks_teori'].'</td>
                              <td>'.$row['sks_praktek'].'</td>
                              <td>'.$row['status'].'</td>
                              <td align="center">
                                <button data-toggle="modal" data-target="#editData'.$row['kd_matkul'].'" class="btn btn-warning"><i class="fas fa-edit"></i></button>

                                <button data-toggle="modal" data-target="#deleteData'.$row['kd_matkul'].'" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>

                              </td>

                            </tr>

                          ';
                  }
                ?>
                </tbody>
              </table>
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
              <table class="table">
                <thead>
                  <tr align="center">
                    <th>Kode Matakuliah</th>
                    <th>Nama Matakuliah</th>
                    <th>SKS Teori</th>
                    <th>SKS Praktek</th>
                    <th>Status</th>
                    <th>Aksi</th>

                  </tr>
                </thead>

                <tbody>
                <?php
                $query = $this->db->get_where('tb_matakuliah', array('kd_prodi'=>$nama_prodi));

                  foreach ($query->result_array() as $row)
                  {
                          ;
                          
                          echo '
                            <tr>
                              <td>'.$row['kd_matkul'].'</td>
                              <td>'.$row['nama_matkul'].'</td>
                              <td>'.$row['sks_teori'].'</td>
                              <td>'.$row['sks_praktek'].'</td>
                              <td>'.$row['status'].'</td>
                              <td align="center">
                                <button data-toggle="modal" data-target="#editData'.$row['kd_matkul'].'" class="btn btn-warning"><i class="fas fa-edit"></i></button>

                                <button data-toggle="modal" data-target="#deleteData'.$row['kd_matkul'].'" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>

                              </td>

                            </tr>

                          ';
                  }
                ?>
                </tbody>
              </table>
      </div>
      <div class="tab-pane fade" id="pills-sore-smt4" role="tabpanel" aria-labelledby="pills-sore-smt4">
                <h4 align="center">Kelas Sore Semester 4</h4><br>
              <table class="table">
                <thead>
                  <tr align="center">
                    <th>Kode Matakuliah</th>
                    <th>Nama Matakuliah</th>
                    <th>SKS Teori</th>
                    <th>SKS Praktek</th>
                    <th>Status</th>
                    <th>Aksi</th>

                  </tr>
                </thead>

                <tbody>
                <?php
                $query = $this->db->get_where('tb_matakuliah', array('kd_prodi'=>$nama_prodi));

                  foreach ($query->result_array() as $row)
                  {
                          ;
                          
                          echo '
                            <tr>
                              <td>'.$row['kd_matkul'].'</td>
                              <td>'.$row['nama_matkul'].'</td>
                              <td>'.$row['sks_teori'].'</td>
                              <td>'.$row['sks_praktek'].'</td>
                              <td>'.$row['status'].'</td>
                              <td align="center">
                                <button data-toggle="modal" data-target="#editData'.$row['kd_matkul'].'" class="btn btn-warning"><i class="fas fa-edit"></i></button>

                                <button data-toggle="modal" data-target="#deleteData'.$row['kd_matkul'].'" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>

                              </td>

                            </tr>

                          ';
                  }
                ?>
                </tbody>
              </table>
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
              <table class="table">
                <thead>
                  <tr align="center">
                    <th>Kode Matakuliah</th>
                    <th>Nama Matakuliah</th>
                    <th>SKS Teori</th>
                    <th>SKS Praktek</th>
                    <th>Status</th>
                    <th>Aksi</th>

                  </tr>
                </thead>

                <tbody>
                <?php
                $query = $this->db->get_where('tb_matakuliah', array('kd_prodi'=>$nama_prodi));

                  foreach ($query->result_array() as $row)
                  {
                          ;
                          
                          echo '
                            <tr>
                              <td>'.$row['kd_matkul'].'</td>
                              <td>'.$row['nama_matkul'].'</td>
                              <td>'.$row['sks_teori'].'</td>
                              <td>'.$row['sks_praktek'].'</td>
                              <td>'.$row['status'].'</td>
                              <td align="center">
                                <button data-toggle="modal" data-target="#editData'.$row['kd_matkul'].'" class="btn btn-warning"><i class="fas fa-edit"></i></button>

                                <button data-toggle="modal" data-target="#deleteData'.$row['kd_matkul'].'" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>

                              </td>

                            </tr>

                          ';
                  }
                ?>
                </tbody>
              </table>
      </div>
      <div class="tab-pane fade" id="pills-sore-smt5" role="tabpanel" aria-labelledby="pills-sore-smt5">
                <h4 align="center">Kelas Sore Semester 5</h4><br>
              <table class="table">
                <thead>
                  <tr align="center">
                    <th>Kode Matakuliah</th>
                    <th>Nama Matakuliah</th>
                    <th>SKS Teori</th>
                    <th>SKS Praktek</th>
                    <th>Status</th>
                    <th>Aksi</th>

                  </tr>
                </thead>

                <tbody>
                <?php
                $query = $this->db->get_where('tb_matakuliah', array('kd_prodi'=>$nama_prodi));

                  foreach ($query->result_array() as $row)
                  {
                          ;
                          
                          echo '
                            <tr>
                              <td>'.$row['kd_matkul'].'</td>
                              <td>'.$row['nama_matkul'].'</td>
                              <td>'.$row['sks_teori'].'</td>
                              <td>'.$row['sks_praktek'].'</td>
                              <td>'.$row['status'].'</td>
                              <td align="center">
                                <button data-toggle="modal" data-target="#editData'.$row['kd_matkul'].'" class="btn btn-warning"><i class="fas fa-edit"></i></button>

                                <button data-toggle="modal" data-target="#deleteData'.$row['kd_matkul'].'" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>

                              </td>

                            </tr>

                          ';
                  }
                ?>
                </tbody>
              </table>
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
              <table class="table">
                <thead>
                  <tr align="center">
                    <th>Kode Matakuliah</th>
                    <th>Nama Matakuliah</th>
                    <th>SKS Teori</th>
                    <th>SKS Praktek</th>
                    <th>Status</th>
                    <th>Aksi</th>

                  </tr>
                </thead>

                <tbody>
                <?php
                $query = $this->db->get_where('tb_matakuliah', array('kd_prodi'=>$nama_prodi));

                  foreach ($query->result_array() as $row)
                  {
                          ;
                          
                          echo '
                            <tr>
                              <td>'.$row['kd_matkul'].'</td>
                              <td>'.$row['nama_matkul'].'</td>
                              <td>'.$row['sks_teori'].'</td>
                              <td>'.$row['sks_praktek'].'</td>
                              <td>'.$row['status'].'</td>
                              <td align="center">
                                <button data-toggle="modal" data-target="#editData'.$row['kd_matkul'].'" class="btn btn-warning"><i class="fas fa-edit"></i></button>

                                <button data-toggle="modal" data-target="#deleteData'.$row['kd_matkul'].'" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>

                              </td>

                            </tr>

                          ';
                  }
                ?>
                </tbody>
              </table>
      </div>
      <div class="tab-pane fade" id="pills-sore-smt6" role="tabpanel" aria-labelledby="pills-sore-smt6">
                <h4 align="center">Kelas Sore Semester 6</h4><br>
              <table class="table">
                <thead>
                  <tr align="center">
                    <th>Kode Matakuliah</th>
                    <th>Nama Matakuliah</th>
                    <th>SKS Teori</th>
                    <th>SKS Praktek</th>
                    <th>Status</th>
                    <th>Aksi</th>

                  </tr>
                </thead>

                <tbody>
                <?php
                $query = $this->db->get_where('tb_matakuliah', array('kd_prodi'=>$nama_prodi));

                  foreach ($query->result_array() as $row)
                  {
                          ;
                          
                          echo '
                            <tr>
                              <td>'.$row['kd_matkul'].'</td>
                              <td>'.$row['nama_matkul'].'</td>
                              <td>'.$row['sks_teori'].'</td>
                              <td>'.$row['sks_praktek'].'</td>
                              <td>'.$row['status'].'</td>
                              <td align="center">
                                <button data-toggle="modal" data-target="#editData'.$row['kd_matkul'].'" class="btn btn-warning"><i class="fas fa-edit"></i></button>

                                <button data-toggle="modal" data-target="#deleteData'.$row['kd_matkul'].'" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>

                              </td>

                            </tr>

                          ';
                  }
                ?>
                </tbody>
              </table>
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
              <table class="table">
                <thead>
                  <tr align="center">
                    <th>Kode Matakuliah</th>
                    <th>Nama Matakuliah</th>
                    <th>SKS Teori</th>
                    <th>SKS Praktek</th>
                    <th>Status</th>
                    <th>Aksi</th>

                  </tr>
                </thead>

                <tbody>
                <?php
                $query = $this->db->get_where('tb_matakuliah', array('kd_prodi'=>$nama_prodi));

                  foreach ($query->result_array() as $row)
                  {
                          ;
                          
                          echo '
                            <tr>
                              <td>'.$row['kd_matkul'].'</td>
                              <td>'.$row['nama_matkul'].'</td>
                              <td>'.$row['sks_teori'].'</td>
                              <td>'.$row['sks_praktek'].'</td>
                              <td>'.$row['status'].'</td>
                              <td align="center">
                                <button data-toggle="modal" data-target="#editData'.$row['kd_matkul'].'" class="btn btn-warning"><i class="fas fa-edit"></i></button>

                                <button data-toggle="modal" data-target="#deleteData'.$row['kd_matkul'].'" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>

                              </td>

                            </tr>

                          ';
                  }
                ?>
                </tbody>
              </table>
      </div>
      <div class="tab-pane fade" id="pills-sore-smt7" role="tabpanel" aria-labelledby="pills-sore-smt7">
                <h4 align="center">Kelas Sore Semester 7</h4><br>
              <table class="table">
                <thead>
                  <tr align="center">
                    <th>Kode Matakuliah</th>
                    <th>Nama Matakuliah</th>
                    <th>SKS Teori</th>
                    <th>SKS Praktek</th>
                    <th>Status</th>
                    <th>Aksi</th>

                  </tr>
                </thead>

                <tbody>
                <?php
                $query = $this->db->get_where('tb_matakuliah', array('kd_prodi'=>$nama_prodi));

                  foreach ($query->result_array() as $row)
                  {
                          ;
                          
                          echo '
                            <tr>
                              <td>'.$row['kd_matkul'].'</td>
                              <td>'.$row['nama_matkul'].'</td>
                              <td>'.$row['sks_teori'].'</td>
                              <td>'.$row['sks_praktek'].'</td>
                              <td>'.$row['status'].'</td>
                              <td align="center">
                                <button data-toggle="modal" data-target="#editData'.$row['kd_matkul'].'" class="btn btn-warning"><i class="fas fa-edit"></i></button>

                                <button data-toggle="modal" data-target="#deleteData'.$row['kd_matkul'].'" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>

                              </td>

                            </tr>

                          ';
                  }
                ?>
                </tbody>
              </table>
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
              <table class="table">
                <thead>
                  <tr align="center">
                    <th>Kode Matakuliah</th>
                    <th>Nama Matakuliah</th>
                    <th>SKS Teori</th>
                    <th>SKS Praktek</th>
                    <th>Status</th>
                    <th>Aksi</th>

                  </tr>
                </thead>

                <tbody>
                <?php
                $query = $this->db->get_where('tb_matakuliah', array('kd_prodi'=>$nama_prodi));

                  foreach ($query->result_array() as $row)
                  {
                          ;
                          
                          echo '
                            <tr>
                              <td>'.$row['kd_matkul'].'</td>
                              <td>'.$row['nama_matkul'].'</td>
                              <td>'.$row['sks_teori'].'</td>
                              <td>'.$row['sks_praktek'].'</td>
                              <td>'.$row['status'].'</td>
                              <td align="center">
                                <button data-toggle="modal" data-target="#editData'.$row['kd_matkul'].'" class="btn btn-warning"><i class="fas fa-edit"></i></button>

                                <button data-toggle="modal" data-target="#deleteData'.$row['kd_matkul'].'" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>

                              </td>

                            </tr>

                          ';
                  }
                ?>
                </tbody>
              </table>
      </div>
      <div class="tab-pane fade" id="pills-sore-smt8" role="tabpanel" aria-labelledby="pills-sore-smt8">
                <h4 align="center">Kelas Sore Semester 8</h4><br>
              <table class="table">
                <thead>
                  <tr align="center">
                    <th>Kode Matakuliah</th>
                    <th>Nama Matakuliah</th>
                    <th>SKS Teori</th>
                    <th>SKS Praktek</th>
                    <th>Status</th>
                    <th>Aksi</th>

                  </tr>
                </thead>

                <tbody>
                <?php
                $query = $this->db->get_where('tb_matakuliah', array('kd_prodi'=>$nama_prodi));

                  foreach ($query->result_array() as $row)
                  {
                          ;
                          
                          echo '
                            <tr>
                              <td>'.$row['kd_matkul'].'</td>
                              <td>'.$row['nama_matkul'].'</td>
                              <td>'.$row['sks_teori'].'</td>
                              <td>'.$row['sks_praktek'].'</td>
                              <td>'.$row['status'].'</td>
                              <td align="center">
                                <button data-toggle="modal" data-target="#editData'.$row['kd_matkul'].'" class="btn btn-warning"><i class="fas fa-edit"></i></button>

                                <button data-toggle="modal" data-target="#deleteData'.$row['kd_matkul'].'" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>

                              </td>

                            </tr>

                          ';
                  }
                ?>
                </tbody>
              </table>
      </div>
    </div>

  </div>



<br>




            </div>
          </div>
        </div>
  </div>
<?php }?>

