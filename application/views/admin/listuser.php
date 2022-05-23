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
        <?= $this->session->flashdata('message'); ?>
        <div class="card-header border-bottom border-info">
          <h3 class="card-title ml-md-3">*data Karyawan berdasarkan divisi</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div class="col-md-12">
              <div class="card">
                <div class="card-header p-2">
                  <ul class="nav nav-pills row text-center">
                    <li class="nav-item col-md-4"><a class="nav-link active" href="#masuk" data-toggle="tab">Semua</a></li>
                    <li class="nav-item col-md-2"><a class="nav-link" href="#belum" data-toggle="tab">HR/GA</a></li>
                    <li class="nav-item col-md-2"><a class="nav-link" href="#proses" data-toggle="tab">Financial</a></li>
                    <li class="nav-item col-md-2"><a class="nav-link" href="#selesai" data-toggle="tab">Operasional</a></li>
                    <li class="nav-item col-md-2"><a class="nav-link" href="#selesai" data-toggle="tab">Outsourcing</a></li>
                  </ul>
                </div><!-- /.card-header -->
                <div class="card-body">
                  <div class="tab-content">
                    <!-- pesnaan masuk -->
                    <div class="active tab-pane" id="masuk">
                      <div class="table-responsive">
                        <table class="table table-bordered m-0">
                          <thead>
                            <tr class="text-center">
                              <th scope="col" style="width: 10px">No</th>
                              <th scope="col">No Pesanan</th>
                              <th scope="col">Nama Game</th>
                              <th scope="col">Tier</th>
                              <th scope="col">Naik (bintang)</th>
                              <th scope="col">Pemesan</th>
                              <th scope="col" style="width: 150px">Tindakan</th>
                            </tr>
                          </thead>
                          <tbody>
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
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <!-- pesnaan masuk end-->

                    <!-- pesanan belum di bayar -->
                    <div class="tab-pane" id="belum">
                      <div class="active tab-pane" id="masuk">
                        <div class="table-responsive">
                          <table class="table table-bordered m-0">
                            <thead>
                              <tr class="text-center">
                                <th scope="col" style="width: 10px">No</th>
                                <th scope="col">No Pesanan</th>
                                <th scope="col">Nama Game</th>
                                <th scope="col">Tier</th>
                                <th scope="col">Naik (bintang)</th>
                                <th scope="col">Tgl Pesan</th>
                                <th scope="col">Pemesan</th>
                                <th scope="col" style="width: 190px">Tindakan</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php $no = 1;
                              foreach ($raid as $r) : 
                              if ($r['status'] == 1) :?>
                              <tr>
                                <th scope="row"><?= $no++; ?></th>
                                <td><?= $r['no_pesanan']; ?></td>
                                <td><?= $r['nama']; ?></td>
                                <td><?= $r['tier']; ?></td>
                                <td><?= $r['bintang_point']; ?></td>
                                <td><?= date("d F Y", $r['waktu_order']);?></td>
                                <td><?= strtok($r['pemesan'], '@');?></td>
                                <td class="text-muted text-center">
                                  <a href="" class="btn btn-outline-info" type="button" data-toggle="modal" data-target="#rincian">hubungi</a>
                                  |
                                  <a href="<?= base_url('admin/hapus/'). $r['no_pesanan']; ?>" class="btn btn-outline-danger">Hapus</a>
                                </td>
                              </tr>
                              <?php
                              endif;
                              endforeach;
                              ?>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                    <!-- pesanan belum di bayar end -->

                    <!-- pesanan diproses -->
                    <div class="tab-pane" id="proses">
                      <div class="active tab-pane" id="masuk">
                        <div class="table-responsive">
                          <table class="table table-bordered m-0">
                            <thead>
                              <tr class="text-center">
                                <th scope="col" style="width: 10px">No</th>
                                <th scope="col">No Pesanan</th>
                                <th scope="col">Nama Game</th>
                                <th scope="col">Tier</th>
                                <th scope="col">Naik (bintang)</th>
                                <th scope="col">Pemesan</th>
                                <th scope="col">Horseman</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php $no = 1;
                              foreach ($raid as $r) : 
                              if ($r['status'] == 3) :?>
                              <tr>
                                <th scope="row"><?= $no++; ?></th>
                                <td><?= $r['no_pesanan']; ?></td>
                                <td><?= $r['nama']; ?></td>
                                <td><?= $r['tier']; ?></td>
                                <td><?= $r['bintang_point']; ?></td>
                                <td><?= strtok($r['pemesan'], '@');?></td>
                                <td>
                                  <?php
                                  foreach ($horseman as $h) {
                                    if ($r['id_horseman'] == $h['id']) {
                                      echo($h['nama']);
                                    }
                                  } ?>
                                </td>
                              </tr>
                              <?php
                              endif;
                              endforeach;
                              ?>
                            </tbody>
                          </table>
                        </div>
                      </div>                      
                    </div>
                    <!-- pesanan selesai end -->

                    <!-- pesanan selesai -->
                    <div class="tab-pane" id="selesai">
                      <div class="active tab-pane" id="masuk">
                        <div class="table-responsive">
                          <table class="table table-bordered m-0">
                            <thead>
                              <tr class="text-center">
                                <th scope="col" style="width: 10px">No</th>
                                <th scope="col">No Pesanan</th>
                                <th scope="col">Nama Game</th>
                                <th scope="col">Tier</th>
                                <th scope="col">Naik (bintang)</th>
                                <th scope="col">Pemesan</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php $no = 1;
                              foreach ($raid as $r) : 
                              if ($r['status'] == 4) :?>
                              <tr>
                                <th scope="row"><?= $no++; ?></th>
                                <td><?= $r['no_pesanan']; ?></td>
                                <td><?= $r['nama']; ?></td>
                                <td><?= $r['tier']; ?></td>
                                <td><?= $r['bintang_point']; ?></td>
                                <td><?= strtok($r['pemesan'], '@');?></td>
                              </tr>
                              <?php
                              endif;
                              endforeach;
                              ?>
                            </tbody>
                          </table>
                        </div>
                      </div>                      
                    </div>
                    <!-- pesanan selesai end -->
                  
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



