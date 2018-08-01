  <nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <div class="container">
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
            <a class="nav-link" href="<?php echo base_url();?>dashboard/akademik/manageKelas">Kelas</a>
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
  <div class="p-5 bg-secondary" >
    <div class="container">
      <div class="row">
       

        <?php 
          $query  = $this->db->get('tb_prodi');

                  foreach ($query->result_array() as $row)
                  {
                    
                    echo '
                      <div class=" align-self-center col-md-6">
                        <div class="card">
                          <div class="card-block p-5">
                            <b><h5 class="text-center">'.$row['nama_prodi'].'</h5></b>
                            <p class="text-center">
                              <b>3</b> matakuliah sudah di setujui akademik<br>
                              <b>0</b> matakuliah belum di setujui akademik
                            </p>
                            <hr>
                            <div align="center">
                            '.
                              form_open(''.base_url().'dashboard/akademik/manageMatkul/'.$row['kd_prodi'], array('method'=>'get'))
                            .'
                            <a href class="btn btn-dark">Manage Matkul Prodi ini</a>
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
  </div>
