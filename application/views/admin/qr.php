  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <h1 class="m-0 mt-4"><?= $title ?></h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <!-- Main content -->
    
    <section class="content">
      <div class="card m-3">
          <?= $this->session->flashdata('message'); ?>
          <!-- /.card-header -->
          <div class="card-body text-center" id="qrcode">
            <div class="col-md-10">
              <p class="font-italic">*Scan qr berikut untuk melakukan absensi</p>
              <img src="<?= base_url('Admin/qrcode/') ?>" alt="">
            </div>
          </div>
      </div>

    </section>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
