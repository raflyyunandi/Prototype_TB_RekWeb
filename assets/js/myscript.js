const flashData = $('.flash-data').data('flashdata');

if (flashData) {
	Swal({
		title: 'Data Barang ',
		text: 'Berhasil ' + flashData,
		type: 'success'
	});
}
