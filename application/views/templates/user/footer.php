
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

  // $(".datepicker").datepicker({
  //   dateFormat: "mm-yyyy",
  //   startView: "months",
  //   minViewMode: "months",
  // });

  // datepicker tanggal izin
  $(".date_picker2").datepicker({
    dateFormat: "dd-mm-yy",
    changeMonth: true,
    changeYear: true,
    minDate: "0d",
    inline: true,
    beforeShowDay: $.datepicker.noWeekends,
  });

</script>

</body>
</html>
