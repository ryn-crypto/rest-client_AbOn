  
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
        <div class="card-header border-bottom border-info">
          <div class="col-11">
            <?= $this->session->flashdata('message') ?>
          </div>
          <h2 class="card-title ml-2">Pesanan masuk</h2>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered m-0">
              <thead>
                <tr class="text-center">
                  <th scope="col" style="width: 10px">No</th>
                  <th scope="col">Nama Game</th>
                  <th scope="col">Tier</th>
                  <th scope="col">Naik (bintang)</th>
                  <th scope="col">Pemesan</th>
                  <th scope="col" style="width: 180px">Tindakan</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1;
                  foreach ($pesanan as $r) :?>
                  <tr>
                    <th scope="row"><?= $no++; ?></th>
                    <td><?= $r['nama']; ?></td>
                    <td><?= $r['tier']; ?></td>
                    <td><?= $r['bintang_point']; ?></td>
                    <td><?= strtok($r['pemesan'], '@');?></td>
                    <td class="text-muted text-center">
                      <a class="btn btn-outline-info" type="button" data-toggle="modal" data-target="#rincian">Rincian</a>
                      |
                      <a href="<?= base_url('user/take/') .$r['no_pesanan'] ?>" class="btn btn-outline-warning">Raid</a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
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
