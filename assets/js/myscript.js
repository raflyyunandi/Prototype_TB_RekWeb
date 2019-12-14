const flashData = $('.flash-data').data('flashdata');

if (flashData) {
	Swal({
		title: 'Data Barang ',
		text: 'Berhasil ' + flashData,
		type: 'success'
	});
}

$('.tombol-hapus').on('click', function(e) {
	e.preventDefault();
	const href = $(this).attr('href');

	Swal.fire({
	  title: 'Apa kamu yakin',
	  text: "Data Barang akan dihapus!",
	  type: 'warning',
	  showCancelButton: true,
	  confirmButtonColor: '#3085d6',
	  cancelButtonColor: '#d33',
	  confirmButtonText: 'Yes, Hapus data!'
	}).then((result) => {
	  if (result.value) {
	    document.location.href = href;
	  }
	})	
});