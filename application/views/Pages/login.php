  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">Sistem Informasi Pengajuan Matakuliah</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent"> </div>
    </div>
  </nav>
  <div class="py-5 text-white bg-secondary">
    <div class="container">
      <div class="row">
        <div class="col-md-7 text-md-left text-center align-self-center my-5">
          <h1 class="display-3 text-center">Selamat Datang&nbsp;</h1>
          <p class="lead text-justify text-capitalize text-light">Sistem Informasi Pengajuan Sebaran matakuliah merupakan sebuah sistem informasi yang dirancang khusus untuk digunakan oleh pihak akademik menangani proses yang berhubungan dengan sebaran matakuliah. &nbsp;</p>
        </div>
        <div class="col-md-5">
          <div class="card text-white p-5 bg-secondary">
            <div class="card-body">
              <h1 class="mb-4 text-center text-light">Login form</h1>
              <form action="https://formspree.io/YOUREMAILHERE">
                <div class="form-group">
                  <label>Username</label>
                  <input type="email" class="form-control" placeholder="Masukkan Username"> </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control" placeholder="Masukkan Password"> </div>
                <div align="center">
                  <button type="submit" class="btn btn-dark">Login</button>
                  <button type="button" class="btn btn-info" data-target="#panelPendaftaran" data-toggle="modal">Daftar</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="panelPendaftaran">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="display-4" align="center" contenteditable="true">Pendaftaran Akun</h3>
          <button type="button" class="close" data-dismiss="modal">
            <span>×</span>
          </button>
        </div>
        <div class="modal-body">
          <p class="lead text-justify">Silahkan Masukkan Form dibawah sesuai dengan label yang sudah ditentukan.
            <br>Form Pendaftaran ini bisa diakses oleh pihak akademik ataupun pihak prodi untuk melakukan proses pendaftaran akun baru ke dalam sistem informasi ini.</p>
          <form class="">
            <div class="form-group">
              <label>Nama Akun</label>
              <input type="email" class="form-control" placeholder="Masukkan Nama Akun">
              <small class="form-text text-muted"></small>
            </div>
            <div class="form-group">
              <label>Username</label>
              <input type="email" class="form-control" placeholder="Masukkan Username">
              <small class="form-text text-muted"></small>
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="email" class="form-control" placeholder="Masukkan Password">
              <small class="form-text text-muted"></small>
            </div>
            <div class="form-group">
              <label>Password</label>
              <select class="form-control">
                <option>Silahkan Pilih</option>
                <option>Akademik</option>
                <option>Prodi</option>
              </select>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Daftar</button>
          <button type="button" class="btn btn-dark" data-dismiss="modal" >Close</button>
        </div>
      </div>
    </div>
  </div>