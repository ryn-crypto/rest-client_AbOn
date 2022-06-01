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
        <?= form_error('email', '<div class="alert alert-danger" role="alert" pl-5">', '</div>') ?>
        <?= form_error('nama', '<div class="alert alert-danger" role="alert" pl-5">', '</div>') ?>
        <!-- <div class="row"> -->
          <div class="card-header border-bottom border-info text-center text-lg-right">
            <div class="col">
              <h3 class="card-title ml-md-3">*data Karyawan berdasarkan divisi</h3>
            </div>
            <div class="col mr-md-3">
              <button type="button" class="mt-2 btn btn-info btn-sm" data-toggle="modal" data-target="#tambah">Tambah data karyawan</button>
            </div>
          </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div class="col-md-12">
              <div class="card">
                <div class="card-header p-2">
                  <ul class="nav nav-pills row text-center">
                    <li class="nav-item col-md-4"><a class="nav-link active" href="#semua" data-toggle="tab">Semua</a></li>
                    <li class="nav-item col-md-2"><a class="nav-link" href="#hrga" data-toggle="tab">HR/GA</a></li>
                    <li class="nav-item col-md-2"><a class="nav-link" href="#fac" data-toggle="tab">Financial</a></li>
                    <li class="nav-item col-md-2"><a class="nav-link" href="#ops" data-toggle="tab">Operation</a></li>
                    <li class="nav-item col-md-2"><a class="nav-link" href="#out" data-toggle="tab">Outsourcing</a></li>
                  </ul>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <div class="tab-content">

                    <!-- Semua data -->
                    <div class="active tab-pane" id="semua">
                      <div class="table-responsive">
                        <table class="table table-bordered m-0">
                          <thead>
                            <tr class="text-center">
                              <th scope="col" style="width: 10px">No</th>
                              <th scope="col">NIK</th>
                              <th scope="col">Nama Karyawan</th>
                              <th scope="col">Jabatan</th>
                              <th scope="col">Divisi</th>
                              <th scope="col" style="width: 150px">Tindakan</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $no = 1;
                            foreach ($list as $r) :?>
                            <tr>
                              <td scope="row"><?= $no++; ?></td>
                              <td><?= $r['nik']; ?></td>
                              <td><?= $r['nama']; ?></td>
                              <td><?= $r['jabatan']; ?></td>
                              <td><?= $r['nama_divisi']; ?></td>
                              <td class="text-muted text-center">
                                <?php if($user['role_id'] < $r['role_id']): ?>
                                  <button type="button" class="btn btn-outline-info btn-sm" data-toggle="modal" data-target="#rinci" data-nama="<?= $r['nama'] ?>"
                                  data-nik="<?= $r['nik'] ?>"
                                  data-jabatan="<?= $r['jabatan_id'] ?>"
                                  data-nama_divisi="<?= $r['divisi_id'] ?>"
                                  data-alamat="<?= $r['tempat_tinggal'] ?>"
                                  data-email="<?= $r['email'] ?>"
                                  data-foto="<?= base_url('assets/images/profile/').$r['gambar'] ?>"
                                  >rincian</button>
                                <?php endif; ?>
                              </td>
                            </tr>
                            <?php
                            endforeach;
                            ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <!-- /Semua data-->

                    <!-- HRGA -->
                    <div class="tab-pane" id="hrga">
                      <div class="table-responsive">
                          <table class="table table-bordered m-0">
                            <thead>
                              <tr class="text-center">
                                <th scope="col" style="width: 10px">No</th>
                                <th scope="col">NIK</th>
                                <th scope="col">Nama Karyawan</th>
                                <th scope="col">Jabatan</th>
                                <th scope="col">Divisi</th>
                                <th scope="col" style="width: 150px">Tindakan</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php 
                            $no = 1;
                            foreach ($list as $r) :
                              if ($r['nama_divisi'] == 'HR/GA') :
                                ?>
                              <tr>
                                <td scope="row"><?= $no++; ?></td>
                                <td><?= $r['nik']; ?></td>
                                <td><?= $r['nama']; ?></td>
                                <td><?= $r['jabatan']; ?></td>
                                <td><?= $r['nama_divisi']; ?></td>
                                <td class="text-muted text-center">
                                <?php if($user['role_id'] < $r['role_id']): ?>
                                  <button type="button" class="btn btn-outline-info btn-sm" data-toggle="modal" data-target="#rinci" data-nama="<?= $r['nama'] ?>"
                                  data-nik="<?= $r['nik'] ?>"
                                  data-jabatan="<?= $r['jabatan_id'] ?>"
                                  data-nama_divisi="<?= $r['divisi_id'] ?>"
                                  data-alamat="<?= $r['tempat_tinggal'] ?>"
                                  data-email="<?= $r['email'] ?>"
                                  data-foto="<?= base_url('assets/images/profile/').$r['gambar'] ?>"
                                  >rincian</button>
                                <?php endif; ?>
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
                    <!-- /HRGA -->

                    <!-- Financial -->
                    <div class="tab-pane" id="fac">
                        <div class="table-responsive">
                          <table class="table table-bordered m-0">
                          <thead>
                              <tr class="text-center">
                                <th scope="col" style="width: 10px">No</th>
                                <th scope="col">NIK</th>
                                <th scope="col">Nama Karyawan</th>
                                <th scope="col">Jabatan</th>
                                <th scope="col">Divisi</th>
                                <th scope="col" style="width: 150px">Tindakan</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php 
                            $no = 1;
                            foreach ($list as $r) :
                              if ($r['nama_divisi'] == 'Financial') :
                                ?>
                              <tr>
                                <td scope="row"><?= $no++; ?></td>
                                <td><?= $r['nik']; ?></td>
                                <td><?= $r['nama']; ?></td>
                                <td><?= $r['jabatan']; ?></td>
                                <td><?= $r['nama_divisi']; ?></td>
                                <td class="text-muted text-center">
                                <?php if($user['role_id'] < $r['role_id']): ?>
                                  <button type="button" class="btn btn-outline-info btn-sm" data-toggle="modal" data-target="#rinci" data-nama="<?= $r['nama'] ?>"
                                  data-nik="<?= $r['nik'] ?>"
                                  data-jabatan="<?= $r['jabatan_id'] ?>"
                                  data-nama_divisi="<?= $r['divisi_id'] ?>"
                                  data-alamat="<?= $r['tempat_tinggal'] ?>"
                                  data-email="<?= $r['email'] ?>"
                                  data-foto="<?= base_url('assets/images/profile/').$r['gambar'] ?>"
                                  >rincian</button>
                                <?php endif; ?>
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
                    <!-- /Financial -->

                    <!-- Operation -->
                    <div class="tab-pane" id="ops">
                        <div class="table-responsive">
                          <table class="table table-bordered m-0">
                          <thead>
                              <tr class="text-center">
                                <th scope="col" style="width: 10px">No</th>
                                <th scope="col">NIK</th>
                                <th scope="col">Nama Karyawan</th>
                                <th scope="col">Jabatan</th>
                                <th scope="col">Divisi</th>
                                <th scope="col" style="width: 150px">Tindakan</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php 
                            $no = 1;
                            foreach ($list as $r) :
                              if ($r['nama_divisi'] == 'Operation') :
                                ?>
                              <tr>
                                <td scope="row"><?= $no++; ?></td>
                                <td><?= $r['nik']; ?></td>
                                <td><?= $r['nama']; ?></td>
                                <td><?= $r['jabatan']; ?></td>
                                <td><?= $r['nama_divisi']; ?></td>
                                <td class="text-muted text-center">
                                <?php if($user['role_id'] < $r['role_id']): ?>
                                  <button type="button" class="btn btn-outline-info btn-sm" data-toggle="modal" data-target="#rinci" data-nama="<?= $r['nama'] ?>"
                                  data-nik="<?= $r['nik'] ?>"
                                  data-jabatan="<?= $r['jabatan_id'] ?>"
                                  data-nama_divisi="<?= $r['divisi_id'] ?>"
                                  data-alamat="<?= $r['tempat_tinggal'] ?>"
                                  data-email="<?= $r['email'] ?>"
                                  data-foto="<?= base_url('assets/images/profile/').$r['gambar'] ?>"
                                  >rincian</button>
                                <?php endif; ?>
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
                    <!-- /Operation -->
                  
                    <!-- Outsourcing -->
                    <div class="tab-pane" id="out">
                        <div class="table-responsive">
                          <table class="table table-bordered m-0">
                          <thead>
                              <tr class="text-center">
                                <th scope="col" style="width: 10px">No</th>
                                <th scope="col">NIK</th>
                                <th scope="col">Nama Karyawan</th>
                                <th scope="col">Jabatan</th>
                                <th scope="col">Divisi</th>
                                <th scope="col" style="width: 150px">Tindakan</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php 
                            $no = 1;
                            foreach ($list as $r) :
                              if ($r['nama_divisi'] == 'Outsource') :
                                ?>
                              <tr>
                                <td scope="row"><?= $no++; ?></td>
                                <td><?= $r['nik']; ?></td>
                                <td><?= $r['nama']; ?></td>
                                <td><?= $r['jabatan']; ?></td>
                                <td><?= $r['nama_divisi']; ?></td>
                                <td class="text-muted text-center">
                                <?php if($user['role_id'] < $r['role_id']): ?>
                                  <button type="button" class="btn btn-outline-info btn-sm" data-toggle="modal" data-target="#rinci" data-nama="<?= $r['nama'] ?>"
                                  data-nik="<?= $r['nik'] ?>"
                                  data-jabatan="<?= $r['jabatan_id'] ?>"
                                  data-nama_divisi="<?= $r['divisi_id'] ?>"
                                  data-alamat="<?= $r['tempat_tinggal'] ?>"
                                  data-email="<?= $r['email'] ?>"
                                  data-foto="<?= base_url('assets/images/profile/').$r['gambar'] ?>"
                                  >rincian</button>
                                <?php endif; ?>
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
                    <!-- /Outsourcing -->

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->

    <!-- modals edit data -->
    <div class="modal fade" id="rinci" tabindex="-1" role="dialog" aria-labelledby="rinci" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="rinci">Rincian Data Karyawan</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="<?= base_url('Admin/list') ?>" method="post">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="nama" class="col-form-label">Nama :</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="nik" class="col-form-label">NIK :</label>
                    <input type="text" class="form-control" id="nik" name="nik" placeholder="Nomor Induk Karyawan" readonly>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <div class="form-group">
                      <label for="nama_divisi" class="col-form-label">jabatan</label>
                      <select class="form-control" id="jabatan" name="jabatan">
                      <option value="01">Manager</option>
                      <option value="02">Wakil Manager</option>
                      <option value="03">Supervisor</option>
                      <option value="04">Kepala Bagian</option>
                      <option value="05">Karyawan</option>
                      </select>
                  </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="nama_divisi" class="col-form-label">Divisi</label>
                    <select class="form-control" id="nama_divisi" name="divisi">
                      <option value="01">HR/GA</option>
                      <option value="02">Financial</option>
                      <option value="03">Operation</option>
                      <option value="04">Quality Control</option>
                      <option value="05">Outsource</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="alamat">
                    <label for="alamat" class="col-form-label">Alamat :</label>
                    <textarea rows="8" type="text" class="form-control" id="alamat" name="alamat"></textarea>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="foto" class="col-form-label">Foto :</label>
                    <div class="col">
                      <img id='foto' src="" class="img-thumbnail">
                    </div>
                  </div>
                </div>
                <div class="col-sm-12 mb-md-3">
                  <div class="form-group">
                    <label for="email" class="col-form-label">Email :</label>
                    <input type="text" class="form-control" id="email" name="email" readonly>
                  </div>
                </div>
              </div>
              <div class="row justify-content-md-end mt-2">
                <div class="col-md-2 col-sm-12 mb-2">
                  <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Batal</button>
                </div>
                <div class="col-md-4 col-sm-12">
                  <button type="submit" class="btn btn-primary btn-block">Update data</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- /modals edit data  -->

    <!-- modals tambah karyawan -->
    <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="tambah" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <div class="row">
              <div class="col-12">
                <h5 class="modal-title" id="tambah">Tambah data karyawan</h5>
              </div>
              <div class="col-12">
                <small class="text-info">*defaault password untuk data baru adalah 12345</small>
              </div>
            </div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="<?= base_url('Admin/list') ?>" method="post">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="nama" class="col-form-label">Nama :</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="email" class="col-form-label">Email :</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="nama_divisi" class="col-form-label">jabatan</label>
                      <select class="form-control" id="jabatan" name="jabatan">
                      <option value="" selected="selected" hidden="hidden">Pilih jabatan</option>
                      <option value="01">Manager</option>
                      <option value="02">Wakil Manager</option>
                      <option value="03">Supervisor</option>
                      <option value="04">Kepala Bagian</option>
                      <option value="05">Karyawan</option>
                      </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="nama_divisi" class="col-form-label">nama_divisi</label>
                    <select class="form-control" id="nama_divisi" name="divisi">
                      <option value="" selected="selected" hidden="hidden">Pilih divisi</option>
                      <option value="01">HR/GA</option>
                      <option value="02">Financial</option>
                      <option value="03">Operation</option>
                      <option value="04">Quality Control</option>
                      <option value="05">Outsource</option>
                    </select>
                  </div>
                </div>
                <div class="col-md">
                  <div class="alamat">
                    <label for="alamat" class="col-form-label">Alamat :</label>
                    <textarea rows="4" type="text" class="form-control" id="alamat" name="alamat"></textarea>
                  </div>
                </div>
              </div>
              <div class="row justify-content-md-end mt-2">
                <div class="col-md-2 col-sm-12 mb-2">
                  <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Batal</button>
                </div>
                <div class="col-md-4 col-sm-12">
                  <button type="submit" class="btn btn-primary btn-block">Simpan data</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- /modals tambah data karyawan -->
  </div>
  <!-- /.content-wrapper -->



