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

	console.log(jabatan);

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

// setInterval(auto_refresh(), 100000);
// function auto_refresh() {
// 	$("#qrcode").load("http://localhost/Ab-On_Rest-Client/admin/qr");
// }
