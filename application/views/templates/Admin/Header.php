<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>RV Admin</title>
  <!-- BOOTSTRAP STYLES-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <!-- Font awesome CSS -->
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>source/font-awesome-4.5.0/css/font-awesome.css">
  <!-- My CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/style2.css">
</head>

<body>

  <!-- Navbar -->

  <nav class="navbar navbar-expand-lg navbar-light top-fixed">
    <div class="container" id="home">
      <a class="navbar-brand"><img src="<?= base_url('assets/image/logo.2.png'); ?>" height="55px"> RAVFAL Homestay</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link" href="<?= base_url('home') ?>">Home</a>
          <a class="nav-item nav-link" href="<?= base_url('room') ?>">Room Data</a>
          <a class="nav-item nav-link" href="<?= base_url('member/data_member') ?>">Member</a>
          <a class="nav-item nav-link" href="<?= base_url('book') ?>">Book</a>
          <a class="nav-item nav-link" href="<?= base_url('rent') ?>">Payment</a>
          <a class="nav-item nav-link" href="<?= base_url('report') ?>">Report</a>
          <a class="nav-item btn btn-primary tombol" href="<?php echo site_url('login/logout'); ?>">Sign out</a>
        </div>
      </div>
    </div>
  </nav>
  <!-- End of Navbar -->

</body>