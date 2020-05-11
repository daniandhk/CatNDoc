<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Fontawesome -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <title>VIEW ADMIN</title>

	<script>
	$(document).ready(function(){
	  $("#btn4").click(function(){
	    $("#tblproduct").toggle();
	  });
	  
	});
	</script>
	<style type="text/css">
		.imageModal {
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		}
		.imageTableShow {
			width: 100%;
			height: auto;
			max-width: 80px;
		}
		/* Firefox */
		input[type=number] {
  			-moz-appearance: textfield;
		}
		.dataTables_filter, .dataTables_info, .dataTables_length { display: none; }
		/* Chrome, Safari, Edge, Opera */
		input::-webkit-outer-spin-button,
		input::-webkit-inner-spin-button {
		  -webkit-appearance: none;
		  margin: 0;
		}
	</style>
  </head>
  <body>
  	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	  <a class="navbar-brand" href="#">Admin Panel</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNav">
	    <ul class="navbar-nav">
	      <li class="nav-item">
	        <a class="nav-link" href="<?php echo site_url('HomePage'); ?>">Home <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="<?php echo site_url('ControlAdmin'); ?>">Lihat Data <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item active">
	        <a class="nav-link" href="<?php echo site_url('ControlProduct'); ?>">Product</a>
	      </li>
	    </ul>
	  </div>
	</nav>

   	<div class="container my-3">
   		<div class="row">
   			<div class="col-3">
   				<h3 style="font-weight: bolder">Kelola Product</h3>
   				<button id="btn4" class="btn btn-secondary my-1">LIST PRODUCT</button>
   			</div>
   			<div class="col-9">
   				<!-- Tanpa JSON dan AjAX -->
   				<!-- <div class="my-2">
   					<div class="card">
   						<div class="card-header inline-block" style="font-weight: bolder;">LIST PRODUCT
						</div>
   						<div class="card-body" id="tblproduct">
   							<table class="table table-hover table-bordered" style="">
   								<thead>
   									<tr>
   										<th>Nama Product</th>
   										<th>Foto</th>
   										<th>Harga</th>
   										<th>Action</th>
   									</tr>
   								</thead>
   								<?php 
   								$no = 1;
   								foreach ($product as $p) {
   								 ?>
   								<tr>
   									<td><?php echo $p['nama']; ?></td>
   									<td><img class="text-center imageTableShow" src="<?php echo base_url('assets/img/sale/').$p['foto']; ?>"></td>
   									<td><?php echo $p['harga']; ?></td>
   									<td><a href="" class="btn btn-sm btn-secondary" data-toggle="modal" data-target="#modalDetailProduct<?php echo $p['id_product'] ?>">Detail</a>
   										<a href="" class="btn btn-sm btn-secondary" data-toggle="modal" data-target="#modalGantiFoto<?php echo $p['id_product'] ?>">Ganti Foto</a></td>
   								</tr>
   								<?php } ?>
   							</table>
   						</div>
   					</div>
   				</div> -->

   				<!-- Dengan JSON dan AJAX -->
   				<div class="my-2">
	   					<div class="card">
	   						<div class="card-header inline-block" style="font-weight: bolder;">LIST PRODUCT
							</div>
	   						<div class="card-body" id="tblproduct">
	   							<table id="product_table" class="table table-hover table-bordered" style="">
	   								<thead>
	   									<tr>
	   										<th>Nama Product</th>
	   										<th>Foto</th>
	   										<th>Harga</th>
	   										<th>Action</th>
	   									</tr>
	   								</thead>
	   								<tbody></tbody>
	   							</table>
	   						</div>
	   					</div>
	   				</div>

   				<div class="my-2" id="add_product">
   					<div class="card">
   						<div class="card-header inline-block" style="font-weight: bolder;">ADD PRODUCT
						</div>
   						<div class="card-body">
   							<?php //echo form_open_multipart('ControlProduct/addProduct');?>
   							<form id="form_addProduct">
						        <input type="hidden" class="form-control" placeholder="ID Product" name="id_product" value=""  required>
						          <div class="form-group">
						            <label for="nama">Nama</label>
						            <input type="text" class="form-control" id="field_nama" placeholder="Nama" name="nama"  value="" required>
						          </div>
						          <div class="form-group">
						            <label for="harga">Harga</label>
						            <input type="number" class="form-control" id="field_harga" placeholder="Harga" name="harga" value="" required>
						          </div>
						          <div class="form-group">
						            <label for="deskripsi">Deskripsi</label>
						            <textarea class="form-control" name="deskripsi" id="deskripsi_field"></textarea>
						          </div>
						          <div class="form-group">
						            <label for="jenis">Jenis</label>
						            <select class="form-control" name="jenis" id="jenis_select">
						            	<option value="Makanan">Makanan</option>
						            	<option value="Peralatan">Peralatan</option>
						            	<option value="Lain-lain">Lain-lain</option>
						            </select>
						          </div>
						        <div class="form-group">
						        	<label for="upload_foto">Upload Foto</label>
						        	<input type="file" id="upload_foto" class="form-control" id="upload_foto_field" name="foto">
						        </div>
						        <div class="modal-footer">
						        <input  type="submit" id="btn_add_product" class="btn btn-primary" id="hapus" value="Submit" placeholder="Simpan">
						        </div>
						    </form>
   						</div>
   					</div>
   				</div>
   			</div>
   		</div>
   	</div>
    
    <div id="modalDetailandDelete">
    	<?php foreach ($product as $p ) {?>
	  	<div class="modal fade" id="modalDetailProduct<?php echo $p['id_product']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		    <div class="modal-dialog" role="document">
		      	<div class="modal-content">
		        	<div class="modal-header">
		        		<center><h2>DETAIL BARANG</h2></center>
		        	</div>
		        	<div class="modal-body">
		        <!-- isi form ini -->
		        		<form action="<?php echo site_url('ControlProduct/editProduct'); ?>" method="post">
		        			<input type="hidden" class="form-control" placeholder="ID Product" name="id_product" value="<?php echo $p['id_product']; ?>"  required>
		        			<input type="hidden" class="form-control" placeholder="ID Product" name="jenis" value="<?php echo $p['jenis']; ?>"  required>
		          			<div class="form-group">
		            			<label for="nama">Nama</label>
		            			<input type="text" class="form-control" id="nama" placeholder="Nama" name="nama"  value="<?php echo $p['nama']; ?>" required>
		          			</div>
		          			<div class="form-group">
		            			<label for="harga">Harga</label>
		            			<input type="text" class="form-control" id="harga" placeholder="Harga" name="harga" value="<?php echo $p['harga']; ?>" required>
		          			</div>
		          			<div class="form-group">
		            			<label for="deskripsi">Deskripsi</label>
		            			<input type="textarea" id="deskripsi" class="form-control" placeholder="Deskripsi" name="deskripsi" value="<?php echo $p['deskripsi']; ?>">
		          			</div>
		        		</div>
		        		<div class="modal-footer">
		          			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        				<input  type="submit" class="btn btn-primary" id="hapus" value="Simpan">
		        				</form>
		        		</div>
		      		</div>
		    	</div>
		 	</div>

		 <div class="modal fade" id="modalGantiFoto<?php echo $p['id_product']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		    <div class="modal-dialog" role="document">
		      	<div class="modal-content">
		        	<div class="modal-header">
		        		<center><h2>FOTO BARANG</h2></center>
		        	</div>
		        	<div class="modal-body">
		        		<?php echo form_open_multipart('ControlProduct/editProductFoto/');?>
		        			<input type="hidden" class="form-control" placeholder="ID Product" name="id_product" value="<?php echo $p['id_product']; ?>"  required>
		          			<div class="form-group">
		            			<label for="nama">Nama</label>
		            			<input type="text" class="form-control" id="nama" placeholder="Nama" disabled value="<?php echo $p['nama']; ?>" required>
		          			</div>
		          			<div class="form-group">
		        				<label for="Foto">Foto</label>
		        				<div>
		        					<img class="imageModal" style="width:100%;max-width: 200px;height: auto" src="<?php echo base_url('assets/img/sale/').$p['foto']; ?>">
		        				</div>
		        			</div>
		        			<div class="form-group">
		        				<label for="upload_foto">Upload Foto</label>
		        				<input type="file" id="upload_foto" class="form-control" name="foto">
		        			</div>
		        	</div>
		        	<div class="modal-footer">
		          		<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        		<input  type="submit" class="btn btn-primary" id="hapus" value="Submit" placeholder="Simpan">
		        	</div>
		        	</form>
		      	</div>
		    </div>
		 </div>

		 <div class="modal fade" id="deleteProduct<?php echo $p['id_product']; ?>" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Konfirmasi Delete Product</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<p>Apakah anda yakin untuk menghapus <b><?php echo $p['nama']; ?></b>?</p>
						<img class="imageModal" style="width:100%;max-width: 200px;height: auto" src="<?php echo base_url('assets/img/sale/').$p['foto']; ?>">
					</div>
					<div class="modal-footer">
						<a class="btn btn-danger" href="<?php echo base_url('index.php/ControlProduct/deleteProduct/'.$p['id_product'])?>"><i class="fa fa-trash"></i> Ya, Hapus</a>
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						</div>
				</div>
			</div>
		</div>
		<?php } ?>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- DataTables -->
    <script type="text/javascript" src="<?php echo base_url('assets/DataTables/DataTables-1.10.20/js/jquery.dataTables.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/DataTables/DataTables-1.10.20/js/dataTables.bootstrap4.min.js'); ?>"></script>

    <script type="text/javascript">
    	$(document).ready(function(){
    		show_product();

    		$('#product_table').dataTable();

    		function show_product() {
    			$.ajax({
    				type : 'ajax',
    				url : '<?php echo site_url('ControlProduct/show_product') ?>',
    				async : true,
    				dataType : 'json',
    				success : function(data) {
    					var html = '';
    					var i;
    					for(i=0; i<data.length; i++) {
    						html += '<tr>' +
    								'<td>'+data[i].nama+'</td>'+
    								'<td><img src="<?php echo base_url('assets/img/Sale/') ?>'+data[i].foto+'" class="text-center imageTableShow"</td>'+
    								'<td>'+data[i].harga+'</td>'+
   									'<td>'+'<a href="" class="btn btn-sm btn-secondary" data-toggle="modal" data-target="#modalDetailProduct'+data[i].id_product+'">Detail</a>'+
   										'<a href="" class="btn btn-sm btn-secondary" data-toggle="modal" data-target="#modalGantiFoto'+data[i].id_product+'">Ganti Foto</a>'+
   										'<a href="" class="btn btn-sm btn-secondary" data-toggle="modal" data-target="#deleteProduct'+data[i].id_product+'">Hapus</a>'+
   									'</td>';

    					}
    					$('#product_table').html(html);
    				}
    			});
    		}

    		function addNewModal() {
    			$.ajax({
    				type : 'ajax',
    				url : '<?php echo site_url('ControlProduct/getNewestProduct') ?>',
    				async : true,
    				dataType : 'json',
    				success : function(data) {
    					var html = '';
    					var i = 0;
    					html += '<div class="modal fade" id="modalDetailProduct'+data.id_product+'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">'+
	    						'<div class="modal-dialog" role="document">'+
							      	'<div class="modal-content">'+
							        	'<div class="modal-header">'+
							        		'<center><h2>DETAIL BARANG</h2></center>'+
							        	'</div>'+
							        	'<form action="<?php echo site_url('ControlProduct/editProduct'); ?>" method="post" accept-charset="utf-8">'+
							        	'<div class="modal-body">'+
							        			'<input type="hidden" class="form-control" placeholder="ID Product" name="id_product" value="'+data.id_product+'"  required>'+
							        			'<input type="hidden" class="form-control" placeholder="ID Product" name="jenis" value="'+data.jenis+'" required>'+
							        			'<div class="form-group">'+
							            			'<label for="nama">Nama</label>'+
							            			'<input type="text" class="form-control" id="nama" placeholder="Nama" name="nama"  value="'+data.nama+'" required>'+
							          			'</div>'+
							          			'<div class="form-group">'+
							            			'<label for="harga">Harga</label>'+
							            			'<input type="text" class="form-control" id="harga" placeholder="Harga" name="harga" value="'+data.harga+'" required>'+
							          			'</div>'+
							          			'<div class="form-group">'+
							            			'<label for="deskripsi">Deskripsi</label>'+
							            			'<input type="textarea" id="deskripsi" class="form-control" placeholder="Deskripsi" name="deskripsi" value="'+data.deskripsi+'">'+
							          			'</div>'+
							        		'</div>'+
							        		'<div class="modal-footer">'+
							          			'<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>'+
							        			'<input  type="submit" class="btn btn-primary" id="" value="Simpan" placeholder="Simpan">'+
							        		'</div>'+
							        		'</form>'+
							      		'</div>'+
							    	'</div>'+
							 	'</div>'+

							 '<div class="modal fade" id="modalGantiFoto'+data.id_product+'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">'+
							    '<div class="modal-dialog" role="document">'+
							      	'<div class="modal-content">'+
							        	'<div class="modal-header">'+
							        		'<center><h2>FOTO BARANG</h2></center>'+
							        	'</div>'+
							        	'<form action="<?php echo site_url('ControlProduct/editProductFoto'); ?>" enctype="multipart/form-data" method="post" accept-charset="utf-8">'+
							        	'<div class="modal-body">'+
							        			'<input type="hidden" class="form-control" placeholder="ID Product" name="id_product" value="'+data.id_product+'"  required>'+
							          			'<div class="form-group">'+
							            			'<label for="nama">Nama</label>'+
							            			'<input type="text" class="form-control" id="nama" placeholder="Nama" disabled value="'+data.nama+'" required>'+
							          			'</div>'+
							          			'<div class="form-group">'+
							        				'<label for="Foto">Foto</label>'+
							        				'<div>'+
							        					'<img class="imageModal" style="width:100%;max-width: 200px;height: auto" src="<?php echo base_url('assets/img/sale/'); ?>'+data.foto+'">'+
							        				'</div>'+
							        			'</div>'+
							        			'<div class="form-group">'+
							        				'<label for="upload_foto">Upload Foto</label>'+
							        				'<input type="file" id="upload_foto" class="form-control" name="foto">'+
							        			'</div>'+
							        	'</div>'+
							        	'<div class="modal-footer">'+
							          		'<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>'+
							        		'<input  type="submit" class="btn btn-primary" id="hapus" value="Submit" placeholder="Simpan">'+
							        	'</div>'+
							        	'</form>'+
							      	'</div>'+
							    '</div>'+
							 '</div>'+
							 '<div class="modal fade" id="deleteProduct'+data.id_product+'" tabindex="-1" role="dialog">'+
							  	'<div class="modal-dialog" role="document">'+
							    	'<div class="modal-content">'+
							      		'<div class="modal-header">'+
								        	'<h5 class="modal-title">Konfirmasi Delete Product</h5>'+
							        		'<button type="button" class="close" data-dismiss="modal" aria-label="Close">'+
							          			'<span aria-hidden="true">&times;</span>'+
							        		'</button>'+
							      		'</div>'+
							      	'<div class="modal-body">'+
							        	'<p>Apakah anda yakin untuk menghapus <b>'+data.nama+'</b>?</p>'+
							        	'<img class="imageModal" style="width:100%;max-width: 200px;height: auto" src="<?php echo base_url('assets/img/sale/') ?>'+data.foto+'">'+
							      	'</div>'+
							      	'<div class="modal-footer">'+
							      		'<a class="btn btn-danger" href="<?php echo base_url("index.php/ControlProduct/deleteProduct/") ?>'+data.id_product+'"><i class="fa fa-trash"></i> Ya, Hapus</a>'+
							        	'<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>'+
							      	'</div>'+
							    	'</div>'+
							  	'</div>'+
							'</div>';
							 $('#modalDetailandDelete').append(html);
    				}
    			});
    		}

    		$('#form_addProduct').submit(function(e){
    			// var nama = $('#field_nama').val();
    			// var harga = $('#field_harga').val();
    			// var deskripsi = $('#deskripsi_field').val();
    			// var jenis = $('#jenis_select').val();
    			
    			e.preventDefault();
    			$.ajax({
    				type : "POST",
    				url : "<?php echo base_url('index.php/ControlProduct/addNewProduct'); ?>",
    				dataType : "JSON",
    				data : new FormData(this),
    				// data : {nama: nama, harga: harga, deskripsi: deskripsi, jenis: jenis},
    				processData:false,
                    contentType:false,
                    cache:false,
                    async:false,
    			});
    			addNewModal();
    			show_product();
    			return false;
    		});
    	});
    </script>
  </body>
</html>