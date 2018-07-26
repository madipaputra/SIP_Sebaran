  <nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="<?php echo base_url();?>dashboard">{webBagian} {inisialisasiKodeAkun}</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item text-light">
            <a class="nav-link text-white" href="<?php echo base_url();?>dashboard/akademik/manageProdi">Prodi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url();?>dashboard/akademik/manageDosen">Dosen</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url();?>dashboard/akademik/manageMatkul">Matakuliah</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url();?>dashboard/akademik/manageKelas">Kelas</a>
          </li>
        </ul>
        <form class="form-inline m-0">
          <button class="btn btn-success text-light" type="submit">
            <b>Akun</b>
          </button>
          <button class="btn btn-danger text-light" type="submit">
            <b>Logout</b>
          </button>
        </form>
      </div>
    </div>
  </nav>
  <div class="p-5 bg-secondary">
    <div class="container">
      <div class="row">
        <div class="p-3 align-self-center col-md-12">
          <div class="card">
            <h1 class="display-3 text-center">Manage Prodi</h1>
            <div class="card-block p-3">

              <?php               
                //validasi gagal
                echo validation_errors('
                <br><div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <i class="fas fa-exclamation-triangle"></i> ', '
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>');
              ?>
                {pesan}

              <div class="input-group">
                <div class="input-group-append">
                  <button onclick="addFunction()" class="btn btn-dark">
                    <i class="fas fa-plus"></i>
                  </button>
                  <a href="#" class="btn btn-secondary"><i class="fas fa-file-pdf"></i></a>
                </div>
                <input type="text" class="form-control" placeholder="Ketik Kata Kunci Pencarian">
                <select class="form-control">
                  <option>Filter Pencarian Berdasarkan</option>
                  <option>Kode Prodi</option>
                  <option>Nama Prodi</option>
                </select>
                <div class="input-group-append">
                  <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                </div>
              </div>

                <div class="card" id="formDaftar" style="display: none;">
                  <div class="card-header m-1" >
                    <b>Form Penambahan Data Prodi</b>
                  </div>
                  <div class="card-body">
                    <?php echo form_open('dashboard/akademik/manageProdi/Add');?>
                      <div class="form-group">
                        <label>Kode Prodi</label>
                        <input type="text" class="form-control form-control-sm" placeholder="Masukkan Kode Prodi" name="kd_prodiPOST">
                        <small class="form-text text-muted">Masukkan 3 digit huruf inisial Program Studi</small>
                      </div>
                      <div class="form-group">
                        <label>Nama Prodi</label>
                        <input type="text" class="form-control form-control-sm" placeholder="Masukkan Nama Prodi" name="nama_prodiPOST"> </div>
                      <button type="submit" class="btn btn-success"><i class="fas fa-check"></i> Tambahkan</button>
                      <button type="reset" class="btn btn-info"><i class="fas fa-undo"></i> Reset</button>
                      <?php echo form_close();?>
                    </form>
                  </div>
                </div>

              <table class="table">
                <thead>
                  <tr align="center">
                    <th>Kode Prodi</th>
                    <th>Nama Prodi</th>
                    <th>Aksi</th>
                  </tr>
                </thead>

                <tbody>
                <?php
                $query = $this->db->get('tb_prodi');

                  foreach ($query->result_array() as $row)
                  {
                          ;
                          
                          echo '
                            <tr>
                              <td>'.$row['kd_prodi'].'</td>
                              <td>'.$row['nama_prodi'].'</td>
                              <td align="center">
                                <button data-toggle="modal" data-target="#editData'.$row['kd_prodi'].'" class="btn btn-warning"><i class="fas fa-edit"></i></button>

                                <button data-toggle="modal" data-target="#deleteData'.$row['kd_prodi'].'" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>

                              </td>

<!-- Modal Edit Data '.$row['nama_prodi'] .'-->
<div class="modal fade" id="editData'.$row['kd_prodi'].'" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <form action="'.base_url().'dashboard/akademik/manageProdi/Edit" method="post">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><b>Form Edit Data Prodi '.$row['nama_prodi'].'</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
                      <div class="form-group">
                        <label>Kode Prodi</label>
                        <input type="text" class="form-control form-control-sm" name="kd_prodiPOST" value="'.$row['kd_prodi'].'">
                        <small class="form-text text-muted">Masukkan 3 digit huruf inisial Program Studi</small>
                      </div>
                      <div class="form-group">
                        <label>Nama Prodi</label>
                        <input type="text" class="form-control form-control-sm" value="'.$row['nama_prodi'].' name="nama_prodiPOST"> </div>

                    
      </div>

      <div class="modal-footer">
        <button type="reset" class="btn btn-info"><i class="fas fa-undo"></i> Reset</button>
        <button type="submit" class="btn btn-success"><i class="fas fa-check"></i> Perbarui</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal Hapus Data '.$row['nama_prodi'] .'-->
<div class="modal fade" id="deleteData'.$row['kd_prodi'].'" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <form action="'.base_url().'dashboard/akademik/manageProdi/Delete" method="post">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><b>Hapus data prodi '.$row['nama_prodi'].'</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <p> Yakin ingin menghapus data ini?
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-success"><i class="fas fa-trash-alt"></i> Hapus</button>
      </div>
      </form>
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
    </div>
  </div>

<!-- Tombol Tambah bisa menampilkan elemen baru atau menyembunyikannya -->
<script>
function addFunction () {
   var x = document.getElementById('formDaftar');
    if (x.style.display === 'none') {
        x.style.display = 'block';
    } else {
        x.style.display = 'none';
    }
}

</script>