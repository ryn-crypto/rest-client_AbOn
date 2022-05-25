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
                              <th scope="col">Departemen</th>
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
                              <td><?= $r['departemen']; ?></td>
                              <td class="text-muted text-center">
                                <?php if($user['role_id'] < $r['role_id']): ?>
                                  <button type="button" class="btn btn-outline-info btn-sm" data-toggle="modal" data-target="#rinci" data-nama="<?= $r['nama'] ?>"
                                  data-nik="<?= $r['nik'] ?>"
                                  data-jabatan="<?= $r['jabatan'] ?>"
                                  data-departemen="<?= $r['departemen'] ?>"
                                  data-alamat="<?= $r['tempat_tinggal'] ?>"
                                  data-email="<?= $r['email'] ?>"
                                  data-foto="<?= $r['gambar'] ?>"
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
                                <th scope="col">Departemen</th>
                                <th scope="col" style="width: 150px">Tindakan</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php 
                            $no = 1;
                            foreach ($list as $r) :
                              if ($r['departemen'] == 'HR/GA') :
                                ?>
                              <tr>
                                <td scope="row"><?= $no++; ?></td>
                                <td><?= $r['nik']; ?></td>
                                <td><?= $r['nama']; ?></td>
                                <td><?= $r['jabatan']; ?></td>
                                <td><?= $r['departemen']; ?></td>
                                <td class="text-muted text-center">
                                <?php if($user['role_id'] < $r['role_id']): ?>
                                  <button type="button" class="btn btn-outline-info btn-sm" data-toggle="modal" data-target="#rinci" data-nama="<?= $r['nama'] ?>"
                                  data-nik="<?= $r['nik'] ?>"
                                  data-jabatan="<?= $r['jabatan'] ?>"
                                  data-departemen="<?= $r['departemen'] ?>"
                                  data-alamat="<?= $r['tempat_tinggal'] ?>"
                                  data-email="<?= $r['email'] ?>"
                                  data-foto="<?= $r['gambar'] ?>"
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
                                <th scope="col">Departemen</th>
                                <th scope="col" style="width: 150px">Tindakan</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php 
                            $no = 1;
                            foreach ($list as $r) :
                              if ($r['departemen'] == 'Financial') :
                                ?>
                              <tr>
                                <td scope="row"><?= $no++; ?></td>
                                <td><?= $r['nik']; ?></td>
                                <td><?= $r['nama']; ?></td>
                                <td><?= $r['jabatan']; ?></td>
                                <td><?= $r['departemen']; ?></td>
                                <td class="text-muted text-center">
                                <?php if($user['role_id'] < $r['role_id']): ?>
                                  <button type="button" class="btn btn-outline-info btn-sm" data-toggle="modal" data-target="#rinci" data-nama="<?= $r['nama'] ?>"
                                  data-nik="<?= $r['nik'] ?>"
                                  data-jabatan="<?= $r['jabatan'] ?>"
                                  data-departemen="<?= $r['departemen'] ?>"
                                  data-alamat="<?= $r['tempat_tinggal'] ?>"
                                  data-email="<?= $r['email'] ?>"
                                  data-foto="<?= $r['gambar'] ?>"
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
                                <th scope="col">Departemen</th>
                                <th scope="col" style="width: 150px">Tindakan</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php 
                            $no = 1;
                            foreach ($list as $r) :
                              if ($r['departemen'] == 'Operation') :
                                ?>
                              <tr>
                                <td scope="row"><?= $no++; ?></td>
                                <td><?= $r['nik']; ?></td>
                                <td><?= $r['nama']; ?></td>
                                <td><?= $r['jabatan']; ?></td>
                                <td><?= $r['departemen']; ?></td>
                                <td class="text-muted text-center">
                                <?php if($user['role_id'] < $r['role_id']): ?>
                                  <button type="button" class="btn btn-outline-info btn-sm" data-toggle="modal" data-target="#rinci" data-nama="<?= $r['nama'] ?>"
                                  data-nik="<?= $r['nik'] ?>"
                                  data-jabatan="<?= $r['jabatan'] ?>"
                                  data-departemen="<?= $r['departemen'] ?>"
                                  data-alamat="<?= $r['tempat_tinggal'] ?>"
                                  data-email="<?= $r['email'] ?>"
                                  data-foto="<?= $r['gambar'] ?>"
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
                                <th scope="col">Departemen</th>
                                <th scope="col" style="width: 150px">Tindakan</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php 
                            $no = 1;
                            foreach ($list as $r) :
                              if ($r['departemen'] == 'Outsourcing') :
                                ?>
                              <tr>
                                <td scope="row"><?= $no++; ?></td>
                                <td><?= $r['nik']; ?></td>
                                <td><?= $r['nama']; ?></td>
                                <td><?= $r['jabatan']; ?></td>
                                <td><?= $r['departemen']; ?></td>
                                <td class="text-muted text-center">
                                <?php if($user['role_id'] < $r['role_id']): ?>
                                  <button type="button" class="btn btn-outline-info btn-sm" data-toggle="modal" data-target="#rinci" data-nama="<?= $r['nama'] ?>"
                                  data-nik="<?= $r['nik'] ?>"
                                  data-jabatan="<?= $r['jabatan'] ?>"
                                  data-departemen="<?= $r['departemen'] ?>"
                                  data-alamat="<?= $r['tempat_tinggal'] ?>"
                                  data-email="<?= $r['email'] ?>"
                                  data-foto="<?= $r['gambar'] ?>"
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

    <!-- modal -->
    <div class="modal fade" id="rinci" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Rincian Data Karyawan</h5>
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
                    <input type="text" class="form-control" id="nik" name="nik" placeholder="Nomor Induk Karyawan">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="jabatan" class="col-form-label">Jabatan :</label>
                    <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Nama Lengkap">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="departemen" class="col-form-label">departemen :</label>
                    <input type="text" class="form-control" id="departemen" name="departemen">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="alamat">
                    <label for="alamat" class="col-form-label">Alamat :</label>
                    <input type="text" class="form-control" id="alamat" name="alamat">
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
                <div class="col-sm-12">
                  <div class="form-group">
                    <label for="email" class="col-form-label">Email :</label>
                    <input type="text" class="form-control" id="email" name="email" readonly>
                  </div>
                </div>
              </div>
              <div class="row justify-content-md-end">
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
    <!-- /modal -->
  </div>
  <!-- /.content-wrapper -->



