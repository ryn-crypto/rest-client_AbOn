
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
<script src="<?= base_url('assets/') ?>plugins/jquery/jquery.min.js"></script>
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




<script>
  //mengakali upload file
  $(".custom-file-input").on("change", function () {
    let fileName = $(this).val().split("\\").pop();
    $(this).next(".custom-file-label").addClass("selected").html(fileName);
  });

  // untuk modal data karyawan
  $("#rinci").on("show.bs.modal", function (event) {
    var button = $(event.relatedTarget); // Button that triggered the modal
    var nama = button.data("nama"); // Extract info from data-* attributes
    var nik = button.data("nik");
    var jabatan = button.data("jabatan");
    var nama_divisi = button.data("nama_divisi");
    var email = button.data("email");
    var alamat = button.data("alamat");
    var foto = button.data("foto");

    var modal = $(this);
    modal.find(".modal-body #nama").val(nama);
    modal.find(".modal-body #nik").val(nik);
    modal.find(".modal-body #jabatan").val(jabatan).attr("selected", true);
    modal
      .find(".modal-body #nama_divisi")
      .val(nama_divisi)
      .attr("selected", true);
    modal.find(".modal-body #email").val(email);
    modal.find(".modal-body #alamat").val(alamat);
    modal.find(".modal-body #foto").attr("src", foto);
  });

  // pengumuman
  $("#pengumuman").on("show.bs.modal", function (event) {
    var button = $(event.relatedTarget);
    var title = button.data("title");
    var tanggal = button.data("tanggal");
    var ket = button.data("ket");

    var modal = $(this);
    modal.find(".modal-title").text(title);
    modal.find(".tanggal").text(tanggal);
    modal.find(".keterangan").text(ket);
  });

  // Data Picker Initialization
  $('.datepicker').datepicker({
    inline: true
  });
</script>

</body>
</html>
