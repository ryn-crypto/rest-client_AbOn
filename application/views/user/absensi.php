  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <h1 class="m-0 mt-2"><?= $title ?></h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <!-- Main content -->
    
    <section class="content">
      <div class="card m-3 mt-0">
        <div class="card-header border-bottom border-info">
          <div class="col-11">
            <?= $this->session->flashdata('message') ?>
          </div>
          <h2 class="card-title ml-2">Data absensi</h2>
        </div>
        <!-- /.card-header -->
        <div class="card-body tableku">
          <div class="table-responsive" id="table23">
            <table class="table table-bordered m-0">
              <!-- tabel -->
              <thead>
                <tr class="text-center">
                  <td scope="col" colspan="3">Nama :</td>
                  <td scope="col" colspan="3"><?= $user['nama']; ?></td>
                </tr>
                <tr class="text-center">
                  <th>No</th>
                  <th>Tanggal</th>
                  <th>Waktu Masuk</th>
                  <th>Waktu pulang</th>
                  <th>Waktu Terlambat</th>
                  <th>Denda <small>*Rp</small> </th>
                </tr>
              </thead>
              <tbody class="text-center">
                <?php 
                  $no = 1;
                  foreach ($absensi as $a):
                ?>
                <tr>
                  <?php 
                    $tanggal = strtotime($a['tanggal']);
                    $waktu_masuk = strtotime($a['waktu_masuk']);
                    $waktu_pulang = strtotime($a['waktu_pulang']);
                    $terlambat = strtotime($a['terlambat'])
                  ?>
                  <td><?= $no; ?></td>
                  <td><?= date("d/m/Y", $tanggal); ?></td>
                  <td><?= date("H:i", $waktu_masuk); ?></td>
                  <td><?= date("H:i", $waktu_pulang); ?></td>
                  <td><?= date("H:i", $terlambat); ?></td>
                  <td><?= $a['denda']; ?></td>
                </tr>
                <?php 
                  $no++;
                  endforeach;
                ?>
              </tbody>
              <!-- tabel -->
            </table>
          </div>
        </div>
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
