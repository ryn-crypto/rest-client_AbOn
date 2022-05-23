  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 mt-2"><?= $title; ?></h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="<?= base_url('assets/images/profile/') . $user['gambar']; ?>" alt="User profile picture">
                </div>
                <h3 class="profile-username text-center"><?= $user['nama']; ?></h3>
                <p class="text-muted text-center"><?= $role['role']; ?></p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tentang</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>
                <p class="text-muted"><?= $user['tempat_tinggal'];?></p>

                <hr class="bg-light">

                <strong><i class="fas fa-lg fa-phone mr-1"></i>No telfon</strong>
                <p class="text-muted"><?= $user['no_hp'] ?></p>

                <hr class="bg-light">

                <strong><i class="far fa-file-alt mr-1"></i>Catatan kaki</strong>
                <p class="text-muted"><?= $user['tentang'] ?></p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>

          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item col-md-4"><a class="nav-link active text-center" href="#dasboard" data-toggle="tab">Dasboard</a></li>
                  <li class="nav-item col-md-4"><a class="nav-link text-center" href="#absensi" data-toggle="tab">Absensi</a></li>
                  <li class="nav-item col-md-4"><a class="nav-link text-center" href="#surat_izin" data-toggle="tab">Surat Izin & Cuti</a></li>
                </ul>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <!-- dasboard -->
                  <div class="active tab-pane" id="dasboard">
                    <div class="table-responsive">
                      <table class="table table-bordered m-0">
                        <thead>
                          <tr class="text-center">
                            <th scope="col" style="width: 10px">No</th>
                            <th scope="col">dasboard</th>
                            <th scope="col">Nama Game</th>
                            <th scope="col">Tier</th>
                            <th scope="col">Naik (bintang)</th>
                            <th scope="col">Pemesan</th>
                            <th scope="col" style="width: 150px">Tindakan</th>
                          </tr>
                        </thead>
                        <!-- <tbody>
                          <?php $no = 1;
                          foreach ($raid as $r) : 
                          if ($r['status'] == 2) :?>
                          <tr>
                            <th scope="row"><?= $no++; ?></th>
                            <td><?= $r['no_pesanan']; ?></td>
                            <td><?= $r['nama']; ?></td>
                            <td><?= $r['tier']; ?></td>
                            <td><?= $r['bintang_point']; ?></td>
                            <td><?= strtok($r['pemesan'], '@');?></td>
                            <td class="text-muted text-center">
                              <a href="" class="btn btn-outline-info" type="button" data-toggle="modal" data-target="#rincian">rincian</a>
                            </td>
                          </tr>
                          <?php
                          endif;
                          endforeach;
                          ?>
                        </tbody> -->
                      </table>
                    </div>
                  </div>
                  <!-- /.dasboard -->
                  <!-- absensi -->
                  <div class="tab-pane" id="absensi">
                    <div class="table-responsive">
                      <table class="table table-bordered m-0">
                        <thead>
                          <tr class="text-center">
                            <th scope="col" style="width: 10px">No</th>
                            <th scope="col">absensi</th>
                            <th scope="col">Nama Game</th>
                            <th scope="col">Tier</th>
                            <th scope="col">Naik (bintang)</th>
                            <th scope="col">Pemesan</th>
                            <th scope="col" style="width: 150px">Tindakan</th>
                          </tr>
                        </thead>
                        <!-- <tbody>
                          <?php $no = 1;
                          foreach ($raid as $r) : 
                          if ($r['status'] == 2) :?>
                          <tr>
                            <th scope="row"><?= $no++; ?></th>
                            <td><?= $r['no_pesanan']; ?></td>
                            <td><?= $r['nama']; ?></td>
                            <td><?= $r['tier']; ?></td>
                            <td><?= $r['bintang_point']; ?></td>
                            <td><?= strtok($r['pemesan'], '@');?></td>
                            <td class="text-muted text-center">
                              <a href="" class="btn btn-outline-info" type="button" data-toggle="modal" data-target="#rincian">rincian</a>
                            </td>
                          </tr>
                          <?php
                          endif;
                          endforeach;
                          ?>
                        </tbody> -->
                      </table>
                    </div>
                  </div>
                  <!-- /absensi -->
                  <!-- surat izin -->
                  <div class="tab-pane" id="surat_izin">
                    <div class="table-responsive">
                      <table class="table table-bordered m-0">
                        <thead>
                          <tr class="text-center">
                            <th scope="col" style="width: 10px">No</th>
                            <th scope="col">surat izin</th>
                            <th scope="col">Nama Game</th>
                            <th scope="col">Tier</th>
                            <th scope="col">Naik (bintang)</th>
                            <th scope="col">Pemesan</th>
                            <th scope="col" style="width: 150px">Tindakan</th>
                          </tr>
                        </thead>
                        <!-- <tbody>
                          <?php $no = 1;
                          foreach ($raid as $r) : 
                          if ($r['status'] == 2) :?>
                          <tr>
                            <th scope="row"><?= $no++; ?></th>
                            <td><?= $r['no_pesanan']; ?></td>
                            <td><?= $r['nama']; ?></td>
                            <td><?= $r['tier']; ?></td>
                            <td><?= $r['bintang_point']; ?></td>
                            <td><?= strtok($r['pemesan'], '@');?></td>
                            <td class="text-muted text-center">
                              <a href="" class="btn btn-outline-info" type="button" data-toggle="modal" data-target="#rincian">rincian</a>
                            </td>
                          </tr>
                          <?php
                          endif;
                          endforeach;
                          ?>
                        </tbody> -->
                      </table>
                    </div>
                  </div>
                  <!-- /surat izin -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
