  
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
      <div class="card m-3 mt-0">
        <div class="card-header border-bottom border-info">
          <div class="row d-flex justify-content-between">
            <div class="col-md-2 d-flex align-items-center">
              <h2 class="card-title ml-2">Jadwal bulan </h2>
            </div>
            <form action="<?= base_url('user/rekap') ?>" method="post" class="col-md-8">
              <div class="d-flex align-items-center justify-content-end row">
                <div class="col-md-4 input-group">
                  <input class="custom-select datepicker" id="bulan" name="bulan" placeholder="Pilih bulan"></input>
                </div>
                <button type="submit" class="col-md-1 btn btn-info btn-block "><i class="fas fa-search"></i></button>
              </div>
            </form>
          </div>
          <!-- date picker -->     
          <!-- date picker end -->
        </div>
        <!-- /.card-header -->
        <div class="card-body tableku">
          <div class="table-responsive" id="table23">
            <table class="table table-bordered m-0">
              <!-- tabel -->
              <thead>
                <tr class="text-center">
                  <th>No</th>
                  <th>Tanggal</th>
                  <?php
                  $nama = '';
                  foreach ($rekap as $r): 
                    if ($r['nama'] != $nama):
                  ?>
                  <th width="400"><?= $r['nama']; ?></th>
                  <?php 
                  $nama = $r['nama'];
                        endif; 
                    endforeach;
                    ?>
            <!-- <td colspan="31"><?= date("d/m/Y", $r['waktu_masuk']); ?></td> -->
                </tr>
              </thead>
              <tbody class="text-center">
                <?php
                    $no =1;
                  $tanggal = '';
                  foreach ($rekap as $r): 
                    if (date("d/m/Y", $r['waktu_masuk']) != $tanggal):
                  ?>
                    <tr class="text-center">
                    <td><?= $no; ?></td>
                    <td><?= date("d/m/Y", $r['waktu_masuk']); ?></td>
                    <td><?= date("H:i", $r['waktu_masuk']);?> <br> <?= date("H:i", $r['waktu_pulang']);?></td>
                    <td><?= date("H:i", $r['waktu_masuk']);?> <br> <?= date("H:i", $r['waktu_pulang']);?></td>
                    <td><?= date("H:i", $r['waktu_masuk']);?> <br> <?= date("H:i", $r['waktu_pulang']);?></td>
                    <td><?= date("H:i", $r['waktu_masuk']);?> <br> <?= date("H:i", $r['waktu_pulang']);?></td>
                  <?php 
                  $nama = date("d/m/Y", $r['waktu_masuk']);
                        endif; 
                        $no+=1;
                    endforeach;
                    ?>
                </tr>
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
