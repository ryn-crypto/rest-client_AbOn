  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <h1 class="m-0 mt-3"><?= $title ?></h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <!-- Main content -->
    
    <section class="content">
      <div class="card m-3">
        <div class="card-header border-0">
          <div class="col-11">
            <?= $this->session->flashdata('message') ?>
          </div>
        </div>

        <!-- content -->
        <div class="card-body">
          <div class="row justify-content-around">
            <!-- isi -->
              <div class="col-md-5 card">
                <img class="card-img-top mt-2" src="<?= base_url('assets/')?>images/accessoris/wfh.jpg" alt="wfh/wfa image">
                <div class="col">
                  <div class="card-body">
                    <div class="card-title"><small>*hanya untuk karyawan yang memiliki jadwal wfh/wfa</small></div>
                  </div>
                </div>
                <div class="card-footer text-center">
                  <a href="<?= base_url('user/wfh/'). time(); ?>" class="btn btn-primary active" role="button" aria-pressed="true">Absen</a>
                </div>
              </div>
              <div class="col-md-6 card">
                <div class="card-body">
                  <h2 class="card-title text-bold mb-3">Work From Home / Work From Aniware</h2>
                  <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed a iste soluta atque. Asperiores corporis itaque placeat molestiae provident, earum perspiciatis libero, repellendus, ex dolorum rerum! Maiores sint adipisci quos?</p>
                  <p class="card-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, velit possimus error veniam aliquam ipsum quod facere consectetur architecto! Accusantium ducimus saepe, reprehenderit laborum necessitatibus culpa fuga fugit dolorum dolore aliquam aspernatur, deleniti magnam explicabo deserunt distinctio quia optio iure sapiente temporibus quasi unde. Quis deleniti labore quibusdam rem doloremque?
                  </p>
                </div>
              </div>
            <!-- /isi -->
          </div>
        </div>
        <!-- content -->
      </div>
    </section>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
