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
        <div class="row justify-content-md-center">
          <div class="col-12">
            <?= $this->session->flashdata('message') ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3">
            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="<?= base_url('assets/images/profile/') . $user['gambar']; ?>" alt="User profile picture">
                </div>
                <h2 class="profile-username text-center"><?= $user['nama']; ?></h2>
                <h6 class="text-muted text-center"><?= $user['jabatan']; ?></h6>
                <h6 class="text-muted text-center"><?= $user['nama_divisi']; ?></h6>
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
                      <button type="button" class="btn btn-outline-secondary col-md-5 mb-2" data-toggle="modal" data-target="#cuti" data-nama="<?= $user['nama'];?>" data-cuti="<?= $user['sisa_cuti'];?>"><i class="fas fa-plus mr-2"></i>Form Pengajuan Cuti</button>
                      <button type="button" class="btn btn-outline-secondary col-md-5 mb-2 mb-md-3" data-toggle="modal" data-target="#izin" data-nama="<?= $user['nama'];?>"><i class="fas fa-plus mr-2"></i>Form Izin</button>
                    </div>

                    <!-- list -->
                    <div class="row d-flex justify-content-around mt-2">
                      <div class="col-md-6">
                        <div class="card">
                          <div class="text-white bg-info card-header">Pengajuan Form</div>
                          <div class="card-body">
                            <ul class="list-group list-group-flush card-text">
                              <?php 
                                foreach ($data_cuti as $dc) : 
                                  if ($dc['status'] == 'pending') :
                              ?>
                              <li class="list-group-item">
                                <h5><?= $dc['jenis_cuti']; ?></h5>
                                <p><?= $dc['cuti_khusus']; ?></p>
                              </li>
                              <?php 
                                  endif;
                                endforeach;
                              ?>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="card mb-3">
                          <div class="text-white bg-success card-header">Riwayat Form</div>
                          <div class="card-body">
                            <ul class="list-group list-group-flush card-text">
                            <?php 
                                foreach ($data_cuti as $dc) : 
                                  if ($dc['status'] == 'acc') :
                              ?>
                              <li class="list-group-item">
                                <h5><?= $dc['jenis_cuti']; ?></h5>
                                <p><?= $dc['cuti_khusus']; ?></p>
                              </li>
                              <?php 
                                  endif;
                                endforeach;
                              ?>
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
                              <label for="sisa_cuti" class="col-sm-3 col-form-label">Sisa cuti saat ini</label>
                              <div class="col-1 d-none d-sm-block">
                                <p>:</p>
                              </div>
                              <div class="col-sm-7">
                                <input type="text" class="form-control" id="sisa_cuti" name="sisa_cuti" readonly>
                              </div>
                            </div>
                            <div class="form-group row d-flex justify-content-center">
                              <label for="jenis_cuti" class="col-sm-3 col-form-label">Jenis Cuti</label>
                              <div class="col-1 d-none d-sm-block">
                                <p>:</p>
                              </div>
                              <div class="col-sm-7">
                                <select class="form-control" id="jenis_cuti" name="jenis_cuti">
                                  <option value="" selected="selected" hidden="hidden">Pilih jenis pengajuan</option>
                                  <?php 
                                  foreach( $perizinan as $p ):
                                    if ($p['code'] == 'cuti'):
                                  ?>
                                    <option value="<?= $p['id']?>"><?= $p['jenis_cuti']; ?></option>
                                  <?php 
                                      endif;
                                    endforeach;
                                  ?>
                                </select>
                              </div>
                            </div>
                            <div class="form-group row d-flex justify-content-center">
                              <div class="col-sm-7 offset-md-4">
                                <select class="form-control" id="cuti_khusus" name="cuti_khusus">
                                  <option value="" selected="selected" hidden="hidden">Pilih jenis Cuti Khusus</option>
                                  <option value="Menikah">Menikah</option>
                                  <option value="Pernikahan anak">Pernikahan anak</option>
                                  <option value="Anggota keluarga / Saudara Meninggal">Anggota keluarga / Saudara Meninggal</option>
                                  <option value="Khitan anak">Khitan anak</option>
                                  <option value="Istri Melahirkan">Istri Melahirkan</option>
                                </select>
                              </div>
                            </div>
                            <div class="form-group row d-flex justify-content-center">
                              <div class="col-md-6 d-flex justify-content-center">
                                <div class="row">
                                  <label for="tanggal_mulai" class="col-sm-5 col-form-label">Tanggal cuti</label>
                                  <div class="col-sm-6">
                                    <input type="text" class="form-control date_picker" id="tanggal_mulai" name="tanggal_mulai">
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-6 d-flex justify-content-md-left justify-content-center">
                                <div class="row">
                                  <label for="tanggal_selesai" class="col-sm-5 col-form-label ">Sampai dengan</label>
                                  <div class="col-sm-6">
                                    <input type="text" class="form-control date_picker" id="tanggal_selesai" name="tanggal_selesai">
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
                                <input type="text" class="form-control" id="ket" name="ket">
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

                  <!-- modals izin -->
                  <div class="modal fade bd-example-modal-lg" id="izin" tabindex="-1" role="dialog" aria-labelledby="izin" aria-hidden="true">
                    <div class="modal-dialog modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <div class="row">
                            <div class="col-12">
                              <h4 class="modal-title" id="izin">Form Izin</h4>
                            </div>
                          </div>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form action="<?= base_url('User/index/izin') ?>" method="post">
                          
                            <div class="form-group row d-flex justify-content-center border border border-dark">
                              <label for="jenis_izin" class="col-sm-3 col-form-label">Pilih jenis izin</label>
                              <div class="col-sm-8 row">
                                <?php 
                                  foreach( $perizinan as $p ):
                                    if ($p['code'] == 'izin'):
                                  ?>
                                    <div div id="jenis_izin" class="col-md-6 d-flex align-items-center">
                                      <input type="radio" class="col-md-1" aria-label="Radio button for following text input" id="<?= $p['jenis_cuti']; ?>" name="jenis" value="<?= $p['id']?>">
                                      <label for="<?= $p['jenis_cuti']; ?>" class="col-sm-10 col-form-label font-weight-normal"><?= $p['jenis_cuti']; ?></label>
                                    </div>
                                <?php 
                                    endif;
                                  endforeach;
                                ?>
                                
                              </div>
                            </div>
                            <div class="form-group row d-flex justify-content-center border border border-dark pl-md-3 pb-3">
                              <!-- nama -->
                              <div class="col-12 mt-md-2 row">
                                <label for="nama" class="col-sm-4 col-form-label">Nama Karyawan</label>
                                <div class="col-1 d-none d-sm-block">
                                  <p>:</p>
                                </div>
                                <div class="col-sm-7">
                                  <input type="text" class="form-control" id="nama" name="nama" readonly>
                                </div>
                              </div>
                              <!-- tanggal -->
                              <div class="col-12 mt-md-2 row">
                                <label for="tanggal" class="col-sm-4 col-form-label">Tanggal</label>
                                <div class="col-1 d-none d-sm-block">
                                  <p>:</p>
                                </div>
                                <div class="col-sm-7">
                                  <input type="text" class="form-control date_picker2" id="tanggal" name="tanggal">
                                </div>
                              </div>
                              <!-- jam berangkat -->
                              <div class="col-12 mt-md-2 row">
                                <label for="datang" class="col-sm-4 col-form-label">waktu berangkat / datang</label>
                                <div class="col-1 d-none d-sm-block">
                                  <p>:</p>
                                </div>
                                <div class="col-sm-7">
                                  <input type="text" class="form-control waktu" id="datang" name="datang" placeholder="   : ">
                                </div>
                              </div>
                              <!-- jakm pulang -->
                              <div class="col-12 mt-md-2 row">
                                <label for="kembali" class="col-sm-4 col-form-label">waktu kembali / pulang</label>
                                <div class="col-1 d-none d-sm-block">
                                  <p>:</p>
                                </div>
                                <div class="col-sm-7">
                                  <input type="text" class="form-control waktu" id="kembali" name="pulang" placeholder="   : ">
                                </div>
                              </div>
                              <!-- tujuan -->
                              <div class="col-12 mt-md-2 row">
                                <label for="berangkat" class="col-sm-4 col-form-label">Tujuan</label>
                                <div class="col-1 d-none d-sm-block">
                                  <p>:</p>
                                </div>
                                <div class="col-sm-7 row">
                                  <div id="jenis_izin" class="col-md-4">
                                    <input type="radio" class="col-md-1" aria-label="Radio button for following text input" id="dalam_kota" name="tujuan">
                                    <label for="dalam_kota" class="col-sm-10 col-form-label font-weight-normal">Dalam kota</label>
                                  </div>
                                  <div id="jenis_izin" class="col-md-4">
                                    <input type="radio" class="col-md-1" aria-label="Radio button for following text input" id="luar_kota" name="tujuan">
                                    <label for="luar_kota" class="col-sm-10 col-form-label font-weight-normal">Luar kota</label>
                                  </div>
                                  <div id="jenis_izin" class="col-md-4">
                                    <input type="radio" class="col-md-1" aria-label="Radio button for following text input" id="pribadi" name="tujuan">
                                    <label for="pribadi" class="col-sm-10 col-form-label font-weight-normal">Pribadi</label>
                                  </div>
                                </div>
                              </div>
                              <!-- keterangan -->
                              <div class="col-12 mt-md-2 row">
                                <label for="ket" class="col-sm-4 col-form-label">Alasan / Keterangan</label>
                                <div class="col-1 d-none d-sm-block">
                                  <p>:</p>
                                </div>
                                <div class="col-sm-7">
                                  <input type="text" class="form-control" id="ket" name="ket">
                                </div>
                              </div>
                            </div>
                            <!-- footer -->                 
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
                  <!-- izin modals end -->
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
