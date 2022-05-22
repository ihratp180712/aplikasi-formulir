<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Register &mdash; Stisla</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="../node_modules/selectric/public/selectric.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo base_url('assets/assets_stisla/')?>assets/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/assets_stisla/')?>assets/css/components.css">
</head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
              <img src="<?= base_url('assets/assets_stisla/'); ?>assets/img/Logo.jpg" alt="logo" width="100" class="shadow-light rounded-circle">
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Formulir Pendaftaran Lomba Coding</h4></div>

              <div class="card-body">
                <form method="POST" action="<?= base_url('register'); ?>">
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="nama">Nama Lengkap</label>
                      <input id="nama" type="text" class="form-control" name="nama" autofocus>
                      <?= form_error('nama', '<div class="text-small text-danger">', '</div>'); ?>
                    </div>

                    <div class="form-group col-6">
                      <label for="universitas">Nama Universitas</label>
                      <input id="universitas" type="text" class="form-control" name="universitas" autofocus>
                      <?= form_error('universitas', '<div class="text-small text-danger">', '</div>'); ?>
                    </div>

                    <div class="form-group col-6">
                      <label for="nim">NIM</label>
                      <input id="nim" type="text" class="form-control" name="nim" autofocus>
                      <?= form_error('nim', '<div class="text-small text-danger">', '</div>'); ?>
                    </div>

                    <div class="form-group col-6">
                      <label for="tempat_lahir">Tempat Lahir</label>
                      <input id="tempat_lahir" type="text" class="form-control" name="tempat_lahir">
                      <?= form_error('tempat_lahir', '<div class="text-small text-danger">', '</div>'); ?>
                    </div>

                    <div class="form-group col-6">
                      <label for="tanggal_lahir">Tanggal Lahir</label>
                      <input id="tanggal_lahir" type="date" class="form-control" name="tanggal_lahir">
                      <?= form_error('tanggal_lahir', '<div class="text-small text-danger">', '</div>'); ?>
                    </div>

                    <div class="form-group col-6">
                      <label for="jurusan" class="d-block">Jurusan/Fakultas</label>
                      <select name="jurusan" id="" class="form-control">
                        <option value="">--Pilih jurusan--</option>
                        <option value="teknik-informatika">Tehnik Informatika</option>
                        <option value="Menejemen Keuangan">Menejemen Keuangan</option>
                        <option value="agrebisnis">agrebisnis</option>
                        <option value="broadcasting">broadcasting</option>
                      </select>
                      <?= form_error('jurusan', '<div class="text-small text-danger">', '</div>'); ?>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input id="alamat" type="text" class="form-control" name="alamat">
                    <?= form_error('alamat', '<div class="text-small text-danger">', '</div>'); ?>
                    <div class="invalid-feedback">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="gender" class="d-block">Jenis Kelamin</label>
                      <select name="gender" id="" class="form-control">
                        <option value="">--Pilih Gender--</option>
                        <option value="laki-laki">Laki-laki</option>
                        <option value="perempuan">Perempuan</option>
                      </select>
                      <?= form_error('gender', '<div class="text-small text-danger">', '</div>'); ?>
                    </div>
                    <div class="form-group col-6">
                      <label for="no_telepon" class="d-block">No. Telepon</label>
                      <input id="no_telepon" type="text" class="form-control" name="no_telepon">
                      <?= form_error('no_telepon', '<div class="text-small text-danger">', '</div>'); ?>
                    </div>
                  </div>

                  <div class="row">

                    <div class="form-group col-6">
                      <label>No. KTP</label>
                      <input type="number" name="no_ktp" class="form-control">
                      <?= form_error('no_ktp', '<div class="text-small text-danger">', '</div>'); ?>
                    </div>
                    <div class="form-group col-6">
                      <label>Password</label>
                      <input type="password" name="password" class="form-control">
                      <?= form_error('password', '<div class="text-small text-danger">', '</div>'); ?>
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Register
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="simple-footer">
              Copyright &copy; Kelompok 3
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>