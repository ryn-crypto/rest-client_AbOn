  
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
                    // $tanggal = $a['tanggal']);
                    // $waktu_masuk = strtotime($a['waktu_masuk']);
                    // $waktu_pulang = strtotime($a['waktu_pulang']);
                    // $terlambat = strtotime($a['terlambat'])
                  ?>
                  <td><?= $no; ?></td>
                  <td><?= date("d/m/Y", $a['waktu_masuk']); ?></td>
                  <td><?= date("H:i", $a['waktu_masuk']); ?></td>
                  <td><?= date("H:i", $a['waktu_pulang']); ?></td>
                  <td><?= $a['terlambat']; ?></td>
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

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
