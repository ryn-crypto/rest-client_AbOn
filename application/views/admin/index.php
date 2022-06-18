  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 mt-2"><?= $title ?></h1>
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
            <div class="col-md-5 card bg-light mb-3">
              <div class="card-header text-center">Kelola Jadwal Kayawan</div>
              <div class="card-body">
                <h5 class="card-title">Light card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
            <div class="col-md-5 card">
              <div class="card-body">
                <h2 class="card-title text-bold mb-3">Work From Home / Work From Aniware</h2>
                <p class="card-text">test</p>
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
