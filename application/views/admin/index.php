  
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
          <div class="row">
            <div class="col-12 row pl-md-5">
                <h4 class="font-weight-bold">
                Selamat <?= $salam. " " . $role['nama']; ?>
                </h4>
                <h5 class="font-weight-normal">Sleamat datang di-Dasboard <span class="font-italic">absensi online</span>, kamu dapat mengelola beberapa hal disini</h5>
            </div>
            <!-- isi -->
            <div class="col-md-12 row card mt-md-5">
              <!-- Kelola Jadwal -->
              <div class="card-body col-md-12 d-flex justify-content-around ">
                <button type="button" class="col-md-4 btn btn-info " data-toggle="modal" data-target="#jadwal">
                  <h6 class="mt-2"><i class="fas fa-calendar-plus mr-2"></i>Kelola Jadwal Karyawan</h6>
                </button>
                <button type="button" class="col-md-3 btn btn-info " data-toggle="modal" data-target="#jadwal">
                  <h6 class="mt-2"><i class="fas fa-bullhorn mr-2"></i>Tambahkan pengumuman</h6>
                </button>
                <button type="button" class="col-md-3 btn btn-info " data-toggle="modal" data-target="#jadwal">
                  <h6 class="mt-2"><i class="fas fa-feather-alt mr-2"></i>Lain-lain</h6>
                </button>
              </div>
            </div>

            <!-- /isi -->
            <!-- Modal -->
            <div class="modal fade" id="jadwal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Pengelolaan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    fitur sedang dikemabangkan, <br>
                    ingin membantu pengembangan silahkan commit ke-<a href="https://github.com/ryn-crypto/rest-client_AbOn">github</a>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- modals end -->
          </div>
        </div>
        <!-- content -->
      </div>
      
    </section>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
