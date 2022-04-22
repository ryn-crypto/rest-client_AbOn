  
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
        <div class="card-header border-bottom border-info">
          <div class="col-11">
            <?= $this->session->flashdata('message') ?>
          </div>
          <h3 class="card-title">Pesanan yang sedang anda proses</h3>
        </div>
        <!-- content -->
        <div class="card-body">
          <div class="row">
            <div class="col-md-4">
              <div class="row">
                <!-- game iamge -->
                <div class="col-md-12 card card-primary card-outline">
                  <div class="card-body box-profile">
                    <div class="text-center pb-2 px-md-5">
                      <img class="img-thumbnail img-fluid img-circle"
                          src="<?= base_url('assets/images/gamelist/') . $game['gambar']; ?>" alt="Game profile picture">
                    </div>
                    <h3 class="profile-username text-center"><?= $game['nama']; ?></h3>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
                <div class="col-md text-center">
                  <div class="card-body box-profile">
                    <div class="row">
                      <a href="" class="col-md-8 btn btn-info"><i class="fas fa-paper-plane"></i> Hubungi customer</a>
                      <a href="<?= base_url('user/finish')?>" class="col-md btn btn-success ml-2"><i class="fab fa-get-pocket"></i> Selesai</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-8">
            <!-- About Me Box -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Informasi Customer</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <strong><i class="fas fa-user-tie mr-1"></i> Customer</strong>
                  <h4 class="text-muted mt-1"><?= strtok($game['pemesan'], '@');?></h4>

                  <hr class="bg-light">

                  <strong><i class="fas fa-envelope mr-1"></i> Email</strong>
                  <h4 class="text-muted mt-1"><?= $game['pemesan'];?></h4>

                  <hr class="bg-light">

                  <strong><i class="fas fa-cogs mr-1"></i> Id Game</strong>
                  <h4 class="text-muted mt-1"><?= $game['id_game'];?></h4>
                  
                  <hr class="bg-light">

                  <strong><i class="fas fa-lock mr-1"></i> Id Server</strong>
                  <h4 class="text-muted mt-1"><?= $game['id_server'];?></h4>

                  <hr class="bg-light">

                  <strong><i class="fas fa-star mr-1"></i> Tugas</strong>
                  <h4 class="text-muted mt-1"><?= $game['qty'];?> bintang</h4>

                </div>
              </div>
            </div>
            <!-- deskripsi -->
          </div>
        </div>
        <!-- content -->
      </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="rincian" tabindex="-1" aria-labelledby="rincianLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="rincianLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
