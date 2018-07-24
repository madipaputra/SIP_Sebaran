  <!--
    Muat file sesuai dengan objek class yang ditargetkan.
    Nilai webMuatHalaman adalah nama file yang akan dimuat sesuai dengan class yang aktif pada saat itu.
  -->
  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="<?php echo base_url();?>">Sistem Informasi Pengajuan Matakuliah</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent"> </div>
    </div>
  </nav>
  <div class="py-5 text-white bg-secondary" >
    <div class="container">
          <div>
          </div>
      <div class="row">
        <div class="col-md-7 text-md-left text-center align-self-center my-5">
          <h1 align="center">
            <b>Halaman Pendaftaran Akun</b>
          </h1>
          <p class="lead text-justify text-capitalize text-light">Silahkan lakukan pengisian form pendaftran akun sesui dengan datayang anda miliki. Pada Form Pendaftaran terdapat 2 tab berbeda yaitu tab akademik dan tab prodi. silahkan pilih salahsatu sesuai dengan jabatan anda saat ini di jajaran struktur
            organisasi universitas/politeknik.
            <br> </p>
          <br>
          <p>

            <!--
            
          Teks yang belum dienkripsi :  maulanapratama777<br>

   
          Teks Yang sudah di enkripsi : Eyb5VgfTl7OAb1103glJXvTvfIJ003ZF5E98YbSOGfiR4n0dmXfcIVxvooVnOmPM977GPjW8GOTmCpxtlGb29Q== dengan panjang karakter 88          Teks Yang sudah di dekripsi : ������B����.���6��*UwR)��-->

          </p>
        </div>
        <div class="col-md-5" style="background-color:white;">
            <?php               
              //validasi gagal
              echo validation_errors('
              <br><div class="alert alert-warning alert-dismissible fade show" role="alert">', '
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
              ?>
              {sukses}
          <div class="card text-white p-5" style="background-color:white;">
            <div class="card-body">
              <b>
                <h1 class="mb-4 text-center text-dark">Register form</h1>
              </b>
              <?php 
              echo form_open('Daftar/prosesDaftar');?>
                <div class="form-group">
                  <label class="text-dark">Pilih Jabatan Anda</label>
                  <select name="kd_akunPOST" class="form-control">
                    <option value="">Silahkan Pilih</option>
                    <option value=""></option>
                    <option value="AKA">Akademik</option>
                    <option value=""></option>
                    <option value="AK">Akuntansi</option>
                    <option value="KA">Komputerisasi Akuntansi</option>
                    <option value="KB">Konstruksi Bangunan</option>
                    <option value="MID">Mekanik Industri & Desain</option>
                    <option value="MK">Mekanik Industri & Desain / Mekatronik</option>
                    <option value="AB">Alat Berat</option>
                    <option value="MO">Mekanik Otomotif</option>
                    <option value="RM">Rekam Medik & Informasi Kesehatan</option>
                    <option value="TE">Teknik Elektronika</option>
                    <option value="IF">Teknik Informatika</option>
                    <option value="KIM">Teknik Kimia</option>
                    <option value="TK">Teknik Komputer</option>
                    <option value="TM">Teknik Mesin</option>
                    <option value="TO">Teknik Otomasi</option>
                  </select>
                  <div class="form-group">
                    <label class="text-dark">Username</label>
                    <input name="usernamePOST" type="text" class="form-control" placeholder="Masukkan Username"> </div>
                  <div class="form-group">
                    <label class="text-dark">Password</label>
                    <input name="passwordPOST" type="password" class="form-control" placeholder="Masukkan Password"> </div>
                  <div align="center">
                    <button type="submit" class="btn btn-secondary">Daftar</button>
                    <button type="reset" class="btn btn-dark">Reset</button>
                    <a href="<?php echo base_url();?>" class="btn btn-success">Loginr</a> </div>
                </div>
              <?php echo form_close(); ?>
            </div>
          </div>
        </div>
      </div>
    </div>