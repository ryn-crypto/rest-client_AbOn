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
                  <li class="nav-item col-md-6"><a class="nav-link active text-center" href="#dasboard" data-toggle="tab">Dasboard</a></li>
                  <li class="nav-item col-md-6"><a class="nav-link text-center" href="#surat_izin" data-toggle="tab">Surat Izin & Cuti</a></li>
                </ul>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <!-- dasboard -->
                  <div class="active tab-pane" id="dasboard">
                    <div class="card-columns">
                      <div class="card">
                        <div class="card-body">
                          <h3 class="card-title mb-2 text-bold"><i class="fas fa-bullhorn mr-2"></i> Pengumuman</h3>
                          <ul class="list-group list-group-flush card-text">
                            <?php foreach ($pengumuman as $p) :?>
                            <button type="button" class="list-group-item text-left" data-toggle="modal" data-target="#pengumuman" data-title="<?= $p['pengumuman']?>" data-tanggal="<?= date('d/m/Y',  $p['tanggal']);?>" data-ket="<?= $p['ket']?>" > <?= $p["pengumuman"]; ?> </button>
                            <?php endforeach;?>
                          </ul>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-body">
                          <h3 class="card-title mb-3 text-bold"><i class="fas fa-birthday-cake mr-2"></i>  Ulang tahun hari ini</h3>
                          <ul class="list-group list-group-flush card-text">
                            <li class="list-group-item">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Morbi leo risus</li>
                          </ul>
                        </div>
                      </div>
                      
                      <div class="card">
                        <div class="card-body">
                          <h3 class="card-title mb-3 text-bold"><i class="fas fa-map-marked-alt mr-2"></i></i>Sedang Cuti</h3>
                          <ul class="list-group list-group-flush card-text">
                            <li class="list-group-item">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                          </ul>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-body">
                          <h3 class="card-title mb-3 text-bold"><i class="fas fa-comments"></i>  Pesan Masuk</h3>
                          <ul class="list-group list-group-flush card-text">
                            <li class="list-group-item"></li>
                            <li class="list-group-item"></li>
                            <li class="list-group-item"></li>
                          </ul>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-body">
                          <h3 class="card-title mb-3 text-bold"><i class="fas fa-feather-alt"></i>  Lain-lain</h3>
                          <ul class="list-group list-group-flush card-text">
                          <li class="list-group-item"></li>
                          </ul>
                        </div>
                      </div>
                      
                      
                    </div>
                  </div>
                  <!-- /.dasboard -->

                  <!-- modals -->
                  <!-- Modal -->
                  <div class="modal fade" id="pengumuman" tabindex="-1" role="dialog" aria-labelledby="pengumuman" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="pengumuman">Modal title</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <div class="row">
                            <div class="col-12 text-right mb-3">
                              <small class="tanggal text-bold">tanggal</small>
                            </div>
                            <div class="col-12">
                              <p class="keterangan">text</p>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- end modals -->

                  <!-- surat izin -->
                  <div class="tab-pane" id="surat_izin">
                    <div class="row d-flex justify-content-around">
                      <button type="button" class="btn btn-outline-secondary col-md-5 mb-2" data-toggle="modal" data-target="#cuti" data-nama="test"><i class="fas fa-plus mr-2"></i>Form Pengajuan Cuti</button>
                      <button type="button" class="btn btn-outline-secondary col-md-5 mb-2 mb-md-3" data-toggle="modal" data-target="#cuti"><i class="fas fa-plus mr-2"></i>Form Izin</button>
                    </div>
                    <div class="row d-flex justify-content-around">
                      <div class="col-md-6">
                        <div class="card mb-3">
                          <div class="text-white bg-info card-header">Pengajuan Form</div>
                          <div class="card-body">
                            <ul class="list-group list-group-flush card-text">
                              disini nanti list nya
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="card mb-3">
                          <div class="text-white bg-success card-header">Riwayat Form</div>
                          <div class="card-body">
                            <ul class="list-group list-group-flush card-text">
                              disini nanti list nya
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /surat izin -->

                  <!-- modals cuti -->
                  <div class="modal fade bd-example-modal-lg" id="cuti" tabindex="-1" role="dialog" aria-labelledby="cuti" aria-hidden="true">
                    <div class="modal-dialog modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <div class="row">
                            <div class="col-12">
                              <h4 class="modal-title" id="cuti">Form Pengajuan Cuti</h4>
                            </div>
                            <div class="col-12">
                              <small class="text-info">*pengajuan cuti maximal 4 hari sebelumnya</small>
                            </div>
                          </div>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form action="<?= base_url('User/index') ?>" method="post">
                            <div class="form-group row d-flex justify-content-center">
                              <label for="nama" class="col-sm-3 col-form-label">Nama Karyawan</label>
                              <div class="col-1 d-none d-sm-block">
                                <p>:</p>
                              </div>
                              <div class="col-sm-7">
                                <input type="text" class="form-control" id="nama" readonly>
                              </div>
                            </div>
                            <div class="form-group row d-flex justify-content-center">
                              <label for="sisa_cuti" class="col-sm-3 col-form-label">Sisa cuti saat ini</label>
                              <div class="col-1 d-none d-sm-block">
                                <p>:</p>
                              </div>
                              <div class="col-sm-7">
                                <input type="text" class="form-control" id="sisa_cuti" readonly>
                              </div>
                            </div>
                            <div class="form-group row d-flex justify-content-center">
                              <label for="jenis_cuti" class="col-sm-3 col-form-label">Jenis Cuti</label>
                              <div class="col-1 d-none d-sm-block">
                                <p>:</p>
                              </div>
                              <div class="col-sm-7">
                                <select class="form-control" id="jenis_cuti" name="jabatan">
                                  <option value="" selected="selected" hidden="hidden">Pilih jenis pengajuan</option>
                                  <option value="01">Pengajuan Cuti Tahunan</option>
                                  <option value="02">Pengajuan Cuti Khusus</option>
                                  <option value="03">Pengajuan pencairan Cuti</option>
                                </select>
                              </div>
                            </div>
                            <div class="form-group row d-flex justify-content-center">
                              <div class="col-sm-7 offset-md-4">
                                <select class="form-control" id="jenis_cuti" name="jabatan">
                                  <option value="" selected="selected" hidden="hidden">Pilih jenis Cuti Khusus</option>
                                  <option value="01">Menikah</option>
                                  <option value="02">Pernikahan anak</option>
                                  <option value="03">Anggota keluarga / Saudara Meninggal</option>
                                  <option value="03">Khitan anak</option>
                                  <option value="03">Istri Melahirkan</option>
                                </select>
                              </div>
                            </div>
                            <div class="form-group row d-flex justify-content-center">
                              <div class="col-md-6 d-flex justify-content-center">
                                <div class="row">
                                  <label for="sisa_cuti" class="col-sm-5 col-form-label">Tanggal cuti</label>
                                  <div class="col-sm-6">
                                    <input type="text" class="form-control date-picker">
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-6 d-flex justify-content-left">
                                <div class="row">
                                  <label for="sisa_cuti" class="col-sm-5 offset-md-1 col-form-label">Sampai dengan</label>
                                  <div class="col-sm-6">
                                    <input type="text" class="form-control" id="date_picker" data-provide="datepicker-inline">
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="form-group row d-flex justify-content-center">
                              <label for="sisa_cuti" class="col-sm-3 col-form-label">Alasan / Keterangan</label>
                              <div class="col-1 d-none d-sm-block">
                                <p>:</p>
                              </div>
                              <div class="col-sm-7">
                                <input type="text" class="form-control" id="sisa_cuti">
                              </div>
                            </div>
                            <div class="row justify-content-md-end mt-2">
                              <div class="col-md-2 col-sm-12 mb-2">
                                <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Batal</button>
                              </div>
                              <div class="col-md-2 col-sm-12">
                                <button type="submit" class="btn btn-primary btn-block">Simpan data</button>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- end modals -->
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
