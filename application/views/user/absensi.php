  
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
                  <th>Waktu Terlambat (*menit)</th>
                  <th>Denda <small>*Rp</small> </th>
                </tr>
              </thead>
              <tbody class="text-center">
                <?php 
                  $no = 1;
                  foreach ($absensi as $a):
                ?>
                <tr>
                  <?php if (date('H:i', $a['terlambat']) > 00):?>
                      <td class="text-danger"><?= $no; ?></td>
                      <td class="text-danger"><?= date("d/m/Y", $a['waktu_masuk']); ?></td>
                      <td class="text-danger"><?= date("H:i", $a['waktu_masuk']); ?></td>
                      <td class="text-danger"><?= date("H:i", $a['waktu_pulang']); ?></td>
                      <td class="text-danger"><?= $a['terlambat']; ?></td>
                      <td class="text-danger"><?= number_format($a['denda'],2,',','.'); ?></td>
                  <?php else:?>
                    <td><?= $no; ?></td>
                    <td><?= date("d/m/Y", $a['waktu_masuk']); ?></td>
                    <td><?= date("H:i", $a['waktu_masuk']); ?></td>
                    <td><?= date("H:i", $a['waktu_pulang']); ?></td>
                    <td><?= $a['terlambat']; ?></td>
                    <td><?= number_format($a['denda'],2,',','.'); ?></td>
                  <?php endif;?>
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
