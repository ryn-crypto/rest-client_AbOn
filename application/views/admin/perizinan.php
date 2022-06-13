  
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
        <!-- /.card-header -->
        <div class="card-body">
          <div class="col-md-12">
              <div class="card">
                <div class="card-header p-2">
                  <ul class="nav nav-pills row text-center">
                    <li class="nav-item col-md-4"><a class="nav-link active" href="#semua" data-toggle="tab">Semua Surat Izin</a></li>
                    <li class="nav-item col-md-4"><a class="nav-link" href="#pending" data-toggle="tab">Izin Cuti/sakit</a></li>
                    <li class="nav-item col-md-4"><a class="nav-link" href="#acc" data-toggle="tab">sudah acc</a></li>
                  </ul>
                </div><!-- /.card-header -->
                <div class="card-body">
                  <div class="tab-content">
                    <!-- Semua data -->
                    <div class="active tab-pane" id="semua">
                      <div class="table-responsive">
                        <table class="table table-bordered m-0">
                          <thead>
                            <tr class="text-center">
                              <th scope="col" style="width: 10px">No</th>
                              <th scope="col">Nama</th>
                              <th scope="col">Jenis Cuti</th>
                              <th scope="col">tanggal_mulai</th>
                              <th scope="col">tanggal_selesai</th>
                              <th scope="col" style="width: 150px">Tindakan</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $no = 1;
                            foreach ($cuti as $c) :?>
                            <tr>
                              <td scope="row"><?= $no++; ?></td>
                              <td><?= $c['nama']; ?></td>
                              <td><?= $c['jenis_cuti']; ?></td>
                              <td><?= $c['tanggal_mulai']; ?></td>
                              <td><?= $c['tanggal_selesai']; ?></td>
                              <?php if ($c['code'] == 'cuti') : ?>
                                <td class="text-muted text-center">
                                  <?php 
                                  if($user['divisi_id'] == $c['divisi_id']): 
                                    if($c['status'] == 'pending') :
                                    ?>
                                    <button type="button" class="btn btn-outline-info btn-sm" data-toggle="modal" data-target="#cuti2" data-nama="<?= $c['nama'];?>" data-jenis="<?= $c['jenis_cuti'];?>" data-khusus="<?= $c['cuti_khusus'];?>" data-mulai="<?= $c['tanggal_mulai'];?>" data-selesai="<?= $c['tanggal_selesai'];?>" data-ket="<?= $c['ket'];?>">rincian</button>
                                    <?php else :?>
                                      <p type="button">Sudah ACC</p>
                                  <?php 
                                    endif; 
                                  endif;
                                  ?>
                                </td>
                              
                              <?php elseif ($c['code'] == 'izin') : ?>
                                <td class="text-muted text-center">
                                  <?php if($user['divisi_id'] == $c['divisi_id']): ?>
                                    <button type="button" class="btn btn-outline-info btn-sm" data-toggle="modal" data-target="#<?= $c['code']; ?>">rincian</button>
                                    <?php else :?>
                                      <p type="button">Sudah ACC</p>
                                  <?php endif; ?>
                                </td>
                              <?php
                                endif; 
                              ?>
                            </tr>
                            <?php
                            endforeach;
                            ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <!-- /Semua data-->
                    <!-- data pending -->
                    <div class="tab-pane" id="pending">
                      <div class="table-responsive">
                        <table class="table table-bordered m-0">
                          <thead>
                            <tr class="text-center">
                              <th scope="col" style="width: 10px">No</th>
                              <th scope="col">Nama</th>
                              <th scope="col">Jenis Cuti</th>
                              <th scope="col">tanggal_mulai</th>
                              <th scope="col">tanggal_selesai</th>
                              <th scope="col" style="width: 150px">Tindakan</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $no = 1;
                            foreach ($cuti as $c) :?>
                            <tr>
                              <td scope="row"><?= $no++; ?></td>
                              <td><?= $c['nama']; ?></td>
                              <td><?= $c['jenis_cuti']; ?></td>
                              <td><?= $c['tanggal_mulai']; ?></td>
                              <td><?= $c['tanggal_selesai']; ?></td>
                              <?php if ($c['code'] == 'cuti') : ?>
                                <td class="text-muted text-center">
                                  <?php 
                                  if($user['divisi_id'] == $c['divisi_id']): 
                                    if($c['status'] == 'pending') :
                                    ?>
                                    <button type="button" class="btn btn-outline-info btn-sm" data-toggle="modal" data-target="#cuti2" data-nama="<?= $c['nama'];?>" data-jenis="<?= $c['jenis_cuti'];?>" data-khusus="<?= $c['cuti_khusus'];?>" data-mulai="<?= $c['tanggal_mulai'];?>" data-selesai="<?= $c['tanggal_selesai'];?>" data-ket="<?= $c['ket'];?>">rincian</button>
                                    <?php else :?>
                                      <p type="button">Sudah ACC</p>
                                  <?php 
                                    endif; 
                                  endif;
                                  ?>
                                </td>
                              
                              <?php elseif ($c['code'] == 'izin') : ?>
                                <td class="text-muted text-center">
                                  <?php 
                                  if($user['divisi_id'] == $c['divisi_id']): 
                                    if($c['status'] == 'pending') :
                                    ?>
                                    <button type="button" class="btn btn-outline-info btn-sm" data-toggle="modal" data-target="#izin2" data-nama="<?= $c['nama'];?>" data-jenis="<?= $c['jenis_cuti'];?>" data-khusus="<?= $c['cuti_khusus'];?>" data-mulai="<?= $c['tanggal_mulai'];?>" data-selesai="<?= $c['tanggal_selesai'];?>" data-ket="<?= $c['ket'];?>">rincian</button>
                                    <?php else :?>
                                      <p type="button">Sudah ACC</p>
                                  <?php 
                                    endif; 
                                  endif;
                                  ?>
                                </td>
                              <?php
                                endif; 
                              ?>
                            </tr>
                            <?php
                            endforeach;
                            ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <!-- pending end -->
                    <!-- cuti acc -->
                    <div class="tab-pane" id="acc">
                      <div class="table-responsive">
                        <table class="table table-bordered m-0">
                          <thead>
                            <tr class="text-center">
                              <th scope="col" style="width: 10px">No</th>
                              <th scope="col">Nama</th>
                              <th scope="col">Jenis Cuti</th>
                              <th scope="col">tanggal_mulai</th>
                              <th scope="col">tanggal_selesai</th>
                              <th scope="col" style="width: 150px">Tindakan</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $no = 1;
                            foreach ($cuti as $c) :?>
                            <tr>
                              <td scope="row"><?= $no++; ?></td>
                              <td><?= $c['nama']; ?></td>
                              <td><?= $c['jenis_cuti']; ?></td>
                              <td><?= $c['tanggal_mulai']; ?></td>
                              <td><?= $c['tanggal_selesai']; ?></td>
                              <?php if ($c['code'] == 'cuti') : ?>
                                <td class="text-muted text-center">
                                  <?php 
                                  if($user['divisi_id'] == $c['divisi_id']): 
                                    if($c['status'] == 'pending') :
                                    ?>
                                    <button type="button" class="btn btn-outline-info btn-sm" data-toggle="modal" data-target="#cuti2" data-nama="<?= $c['nama'];?>" data-jenis="<?= $c['jenis_cuti'];?>" data-khusus="<?= $c['cuti_khusus'];?>" data-mulai="<?= $c['tanggal_mulai'];?>" data-selesai="<?= $c['tanggal_selesai'];?>" data-ket="<?= $c['ket'];?>">rincian</button>
                                    <?php else :?>
                                      <p type="button">Sudah ACC</p>
                                  <?php 
                                    endif; 
                                  endif;
                                  ?>
                                </td>
                              
                              <?php elseif ($c['code'] == 'izin') : ?>
                                <td class="text-muted text-center">
                                  <?php if($user['divisi_id'] == $c['divisi_id']): ?>
                                    <button type="button" class="btn btn-outline-info btn-sm" data-toggle="modal" data-target="#<?= $c['code']; ?>">rincian</button>
                                    <?php else :?>
                                      <p type="button">Sudah ACC</p>
                                  <?php endif; ?>
                                </td>
                              <?php
                                endif; 
                              ?>
                            </tr>
                            <?php
                            endforeach;
                            ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <!-- acc end -->
                  
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- modals cuti -->
    <div class="modal fade bd-example-modal-lg" id="cuti2" tabindex="-1" role="dialog" aria-labelledby="cuti" aria-hidden="true">
      <div class="modal-dialog modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <div class="row">
              <div class="col-12">
                <h4 class="modal-title" id="cuti">Form Cuti</h4>
              </div>
            </div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="<?= base_url('User/index/cuti') ?>" method="post">
              <div class="form-group row d-flex justify-content-center">
                <label for="nama" class="col-sm-3 col-form-label">Nama Karyawan</label>
                <div class="col-1 d-none d-sm-block">
                  <p>:</p>
                </div>
                <div class="col-sm-7">
                  <input type="text" class="form-control" id="nama" name="nama" readonly>
                </div>
              </div>
              <div class="form-group row d-flex justify-content-center">
                <label for="jenis_cuti" class="col-sm-3 col-form-label">Jenis Cuti</label>
                <div class="col-1 d-none d-sm-block">
                  <p>:</p>
                </div>
                <div class="col-sm-7">
                  <input class="form-control" id="jenis_cuti" name="jenis_cuti" readonly>
                </div>
              </div>
              <div class="form-group row d-flex justify-content-center">
                <div class="col-sm-7 offset-md-4">
                  <input class="form-control" id="cuti_khusus" name="cuti_khusus" readonly>
                </div>
              </div>
              <div class="form-group row d-flex justify-content-center">
                <div class="col-md-6 d-flex justify-content-center">
                  <div class="row">
                    <label for="tanggal_mulai" class="col-sm-5 col-form-label">Tanggal cuti</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="tanggal_mulai" name="tanggal_mulai" readonly>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 d-flex justify-content-md-left justify-content-center">
                  <div class="row">
                    <label for="tanggal_selesai" class="col-sm-5 col-form-label ">Sampai dengan</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="tanggal_selesai" name="tanggal_selesai" readonly>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group row d-flex justify-content-center">
                <label for="ket" class="col-sm-3 col-form-label">Alasan / Keterangan</label>
                <div class="col-1 d-none d-sm-block">
                  <p>:</p>
                </div>
                <div class="col-sm-7">
                  <input type="text" class="form-control" id="ket" name="ket" readonly>
                </div>
              </div>
              <div class="row justify-content-md-end mt-2">
                <div class="col-md-2 col-sm-12 mb-2">
                  <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Tolak</button>
                </div>
                <div class="col-md-2 col-sm-12">
                  <button type="submit" class="btn btn-primary btn-block">ACC</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- end modals -->

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
