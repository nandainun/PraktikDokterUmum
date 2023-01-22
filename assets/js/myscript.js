const flashData = $(".flash-data").data("flashdata");

if (flashdata) {
	Swal.fire({
		title: "Data Pasien",
		text: "Berhasil" + flashdata,
		type: "success",
	});
}
