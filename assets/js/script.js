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

// datepicker
$(".date_picker").datepicker({
	dateFormat: "dd-mm-yy",
	changeMonth: true,
	changeYear: true,
	minDate: "+4d",
	inline: true,
});

$(".datepicker").datepicker({
	dateFormat: "mm-yyyy",
	startView: "months",
	minViewMode: "months",
});

// cuti
$("#cuti").on("show.bs.modal", function (event) {
	var button = $(event.relatedTarget);
	var nama = button.data("nama");
	var cuti = button.data("cuti");

	var modal = $(this);
	modal.find("#nama").val(nama);
	modal.find("#sisa_cuti").val(cuti);
});

// alert
$(".alert").on("load", function () {
	// $(".alert").hide();
	console.log("aku ada disini dong");
	// var elem = $(".alert");
	// elem.parentNode.removeChild(elem);
});
