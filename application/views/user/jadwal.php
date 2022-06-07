  
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
          <h2 class="card-title ml-2 mr-2">Jadwal bulan </h2>
          <div class="input-append date" id="datepicker" data-date="02-2012" data-date-format="mm-yyyy">
          <input  type="text" readonly="readonly" name="date" >    
          <span class="add-on"><i class="icon-th"></i></span>      
          </div> 
        </div>
        <!-- /.card-header -->
        <div class="card-body tableku">
          <div class="table-responsive" id="table23">
            <table class="table table-bordered m-0">
              <!-- tabel -->
              <thead>
                <tr class="text-center">
                  <td scope="col" colspan="2">Nama :</td>
                  <td scope="col" colspan="2"><?= $user['nama']; ?></td>
                </tr>
                <tr class="text-center">
                  <th>No</th>
                  <th>Tanggal</th>
                  <th>Waktu Masuk</th>
                  <th>Waktu pulang</th>
                </tr>
              </thead>
              <tbody class="text-center">
                <?php 
                  $no = 1;
                  foreach ($jadwal as $a):
                ?>
                <tr>
                  <td><?= $no; ?></td>
                  <td><?= $a['tanggal'] . '/' . $a['bulan'] . '/'. $a['tahun']; ?></td>
                  <td><?= $a['jam_masuk'] ?></td>
                  <td><?= $a['jam_pulang'] ?></td>
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
