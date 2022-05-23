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
                              <th scope="row"><?= $no++; ?></th>
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
                                <th scope="row"><?= $no++; ?></th>
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
                                <th scope="row"><?= $no++; ?></th>
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
                                <th scope="row"><?= $no++; ?></th>
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
                                <th scope="row"><?= $no++; ?></th>
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
            <form>
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Nama :</label>
                <input type="text" class="form-control" id="nama" readonly>
              </div>
              <div class="form-group">
                <label for="message-text" class="col-form-label">NIK :</label>
                <input type="text" class="form-control" id="nik" readonly>
              </div>
              <div class="form-group">
                <label for="message-text" class="col-form-label">Jabatan :</label>
                <input type="text" class="form-control" id="jabatan" readonly>
              </div>
              <div class="form-group">
                <label for="message-text" class="col-form-label">departemen :</label>
                <input type="text" class="form-control" id="departemen" readonly>
              </div>
              <div class="form-group">
                <label for="message-text" class="col-form-label">Email :</label>
                <input type="text" class="form-control" id="email" readonly>
              </div>
              <div class="form-group">
                <label for="message-text" class="col-form-label">Alamat :</label>
                <input type="text" class="form-control" id="alamat" readonly>
              </div>
              <div class="form-group">
                <label for="message-text" class="col-form-label">Foto :</label>
                <div class="col-sm-3">
                  <img id='foto' src="" class="img-thumbnail">
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Send message</button>
          </div>
        </div>
      </div>
    </div>
    <!-- /modal -->
  </div>
  <!-- /.content-wrapper -->



