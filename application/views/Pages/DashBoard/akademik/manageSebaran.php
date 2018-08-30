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
  <div class="p-5 bg-secondary" >
      <div class="row">
                      <div class=" align-self-center col-md-12">
                        <div class="card">
                          <div class="card-block p-5">
                            <h5 class="text-center">
                              {pesan}
                              <b>Anda Berada Di Halaman List Sebaran berdasarkan Prodi</b></h5>
                              }
                            <p class="text-center">
                              <b>0</b> Sebaran yang sudah tersimpan kedalam database
                            </p>


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
                    
                    echo '
                      <div class=" align-self-center col-md-6">
                        <div class="card">
                          <div class="card-block p-5">
                            <h5 class="text-center"><b>'.$row['nama_prodi'].'</b></h5>
                            <p class="text-center">
                              <b>3</b> sebaran yang sudah tersimpan di database<br>
                            </p>
                            <hr>
                            <div align="center">
                            '.
                              form_open(''.base_url().'dashboard/akademik/manageSebaranProdi')
                            .'
                            <input type="hidden" name="kodeProdiPOST" value="'.$row['kd_prodi'].'"/>
                            <button type="submit" class="btn btn-dark">Manage Sebaran Prodi ini</button>
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