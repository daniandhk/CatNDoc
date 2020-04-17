<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width", initial-scale=1, shrink-to-fit=no>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
	integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">	
	<!-- Database CSS -->
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
	<!-- SweetAlert CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr/npm/sweetalert2@7.26.10/dist/sweetalert2.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- CSS -->
	<link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">

	<title></title>
</head>
<body>
	<?php if ($this->session->flashdata('info')!=NULL): ?>
		<?php $info = $this->session->flashdata('info'); ?>
		<?= '<script> window.onload = function() {swal ("'.$info.'"); }; </script>' ?>
	<?php endif; ?>

	<?php $this->load->view('Template/NavbarHome') ?>
	<?php $this->load->view('ViewHome') ?>
	

	<!-- jQuery first, then Poper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
	    integrity="sha384-q8i/X+965DzOOrT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
	    crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/proper.js/1.14.3/umd/proper.min.js"
	    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBkOWLaUAdn689aCwoqBJiSnjAK/18WvCWPIPm49"
	    crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
	    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
	    crossorigin="anonymous"></script>
	<!-- Datatables JS -->
	<script src="https://code.jquery.com/jquery-1.12.4.js" charset="utf-8"></script>
	<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"
	    charset="utf-8"></script>
	<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"
	    charset="utf-8"></script>
	<!-- SweetAlert JS -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.26.10/dist/sweetalert2.all.min.js">
	</script>
	<!-- JS -->
	<script src="<?= base_url('assets/js/app.js') ?>"></script>
</body>
</html>