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
            <h1 class="display-3 text-center" contenteditable="true" >Manage Dosen</h1>
            <div class="card-block p-3">
              <hr>
              <a href="#" class="btn btn-dark">Tambah</a>
              <a href="#" class="btn btn-dark">Export Ke PDF</a>
              <hr>
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Ketik Kata Kunci Pencarian">
                <select class="form-control">
                  <option>Filter Pencarian Berdasarkan</option>
                </select>
                <div class="input-group-append">
                  <button class="btn btn-primary" type="button">Cari</button>
                </div>
              </div>
              <table class="table">
                <thead>
                  <tr>
                    <th>Kode Prodi</th>
                    <th>Nama Prodi</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Mark</td>
                    <td>Otto</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Jacob</td>
                    <td>Thornton</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Larry</td>
                    <td>the Bird</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
