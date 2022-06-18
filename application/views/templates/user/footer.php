
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Keluar ?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Apakah anda yakin ingin keluar ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning text-white" data-dismiss="modal">Tutup</button>
        <a type="button" href="<?= base_url('auth/logout') ?>" class="btn btn-danger">Keluar</a>
      </div>
    </div>
  </div>
</div>
  
  
  
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-inline-block">
      <strong>Copyright &copy; <?= date('Y'); ?> AbOn </strong>
      All rights reserved.
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="<?= base_url('assets/') ?>plugins/jquery/jquery.js"></script>
<script src="<?= base_url('assets/') ?>plugins/jquery-ui/jquery-ui.js"></script>
<!-- Bootstrap -->
<script src="<?= base_url('assets/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url('assets/') ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/') ?>dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="<?= base_url('assets/') ?>plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="<?= base_url('assets/') ?>plugins/raphael/raphael.min.js"></script>
<script src="<?= base_url('assets/') ?>plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="<?= base_url('assets/') ?>plugins/jquery-mapael/maps/usa_states.min.js"></script>

<!-- script pribadi -->
<script src="<?= base_url('assets/') ?>js/script.js"></script>

<script>
  // izin
  $("#izin").on("show.bs.modal", function (event) {
    var button = $(event.relatedTarget);
    var nama = button.data("nama");
    console.log(nama);

    var modal = $(this);
    modal.find("#nama").val(nama);
  });

  // datepicker tanggal izin
  $(".date_picker2").datepicker({
    dateFormat: "dd-mm-yy",
    changeMonth: true,
    changeYear: true,
    minDate: "0d",
    inline: true,
    beforeShowDay: $.datepicker.noWeekends,
  });

  // kelola cuti
  $("#data_cuti").on("show.bs.modal", function (event) {
    var button = $(event.relatedTarget); // Button that triggered the modal
    var nama = button.data("nama"); // Extract info from data-* attributes
    var jenis = button.data("jenis");
    var khusus = button.data("khusus");
    var mulai = button.data("mulai");
    var selesai = button.data("selesai");
    var ket = button.data("ket");

    var modal = $(this);
    modal.find(".modal-body #nama").val(nama);
    modal.find(".modal-body #jenis_cuti").val(jenis);
    modal.find(".modal-body #cuti_khusus").val(khusus);
    modal.find(".modal-body #tanggal_mulai").val(mulai);
    modal.find(".modal-body #tanggal_selesai").val(selesai);
    modal.find(".modal-body #ket").val(ket);
  });
  
  // kelola izin
  $("#data_izin").on("show.bs.modal", function (event) {
    var button = $(event.relatedTarget); // Button that triggered the modal
    var jenis = button.data("jenis");
    var nama = button.data("nama"); // Extract info from data-* attributes
    var tanggal = button.data("tanggal");
    var datang = button.data("berangkat");
    var pulang = button.data("pulang");
    var ket = button.data("ket");

    var modal = $(this);
    modal.find(".modal-body #jenis_izin").val(jenis);
    modal.find(".modal-body #nama").val(nama);
    modal.find(".modal-body #tanggal").val(tanggal);
    modal.find(".modal-body #datang").val(datang);
    modal.find(".modal-body #pulang").val(pulang);
    modal.find(".modal-body #ket").val(ket);
  });
</script>

</body>
</html>
