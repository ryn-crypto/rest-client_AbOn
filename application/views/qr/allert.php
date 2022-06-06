<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $title; ?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets/') ?>dist/css/adminlte.min.css">
  <!-- icon pada tab -->
  <link rel="shortcut icon" href="<?= base_url('assets/') ?>dist/img/throneLogo.png">
  <!-- css pribadi -->
  <link rel="stylesheet" href="<?= base_url('assets/')?>css/style.css">
  <link rel="stylesheet" href="<?= base_url('assets/')?>css/custom.css">
</head>

<body>
  <div class="container-fluid">
    <div class="content-header">
      <div class="container-fluid">
        <h1 class="m-0 mt-4 text-center"><?= $title ?></h1>
      </div><!-- /.container-fluid -->
    </div>

      <!-- Main content -->
      
    <div class="container">
      <div class="card m-3">
          <?= $this->session->flashdata('message'); ?>
          <!-- /.card-header -->
          <div class="card-body text-center" id="load">
              <p class="font-italic">*Scan qr berikut untuk melakukan absensi</p>
              <img src="<?= base_url('qr/qrcode/') ?>" alt="">
          </div>
      </div>
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <div class="float-right d-none d-sm-inline-block">
        <strong>Copyright &copy; <?= date('Y'); ?> AbOn </strong>
        All rights reserved.
      </div>
    </footer>
  <!-- ./wrapper -->
  </div>


<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="<?= base_url('assets/') ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?= base_url('assets/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url('assets/') ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/') ?>dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="<?= base_url('assets/') ?>plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="<?= base_url('assets/') ?>plugins/raphael/raphael.min.js"></script>
<script src="<?= base_url('assets/') ?>plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="<?= base_url('assets/') ?>plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="<?= base_url('assets/') ?>plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('assets/') ?>dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url('assets/') ?>dist/js/pages/dashboard2.js"></script>
<!-- js pribadi -->
<script src="<?= base_url('assets/') ?>js/script.js"></script>

</body>
</html>
