<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>VIEW ADMIN</title>

	<script>
	$(document).ready(function(){
	  $("#tblregister").hide;
	  $("#tblhewan").hide;
	  $("#tblaponmen").hide;
	  $("#tblproduct").hide;
	  
	  $("#btn1").click(function(){
	    $("#tblregister").toggle();
	  });


	  $("#btn2").click(function(){
	    $("#tblaponmen").toggle();
	  });
	  

	  $("#btn3").click(function(){
	    $("#tblhewan").toggle();
	  });

	  $("#btn4").click(function(){
	    $("#tblproduct").toggle();
	  });
	  
	});
	</script>
	<style type="text/css">
		#tblregister, #tblaponmen, #tblhewan, #tblproduct {
			display: none;
		}
		.imageModal {
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
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
	    </ul>
	  </div>
	</nav>

   	<div class="container my-3">
   		<div class="row">
   			<div class="col-3">
   				<h3 style="font-weight: bolder">Lihat Data</p>
   				<button id="btn1" class="btn btn-secondary my-1">DATA REGISTER</button>
   				<button id="btn2" class="btn btn-secondary my-1">DATA APPOINMENT</button> 
   				<button id="btn3" class="btn btn-secondary my-1">DATA HEWAN</button>
   				<button id="btn4" class="btn btn-secondary my-1">DATA PRODUCT</button>
   			</div>
   			<div class="col-9">
   				<div id="tblregister">
   					<div class="card">
  						<div class="card-header">
    						DATA REGISTER
  						</div>
  						<div class="card-body">
    						<table class="table table-hover table-bordered" style="">
						    	<thead>
						    		<tr>
										<th>Nama</th>
										<th>Email</th>
										<th>Password</th>
										<th>Aksi</th>
									</tr>
						    	</thead>
							    <?php 
								//$no = 1;
								//foreach($user as $u){ 
								?>
								<tr>
									<td>Dummy 1</td>
									<td>dummy1@example.com</td>
									<td>emangpassworddiliatin?</td>
									<td><a href="" class="btn btn-primary">Edit</a></td>
								</tr>
								<tr>
									<td>Dummy 2</td>
									<td>dummy2@example.com</td>
									<td>emangpassworddiliatin?</td>
									<td><a href="" class="btn btn-primary">Edit</a></td>
								</tr>
								<?php//  } ?>
							</table>
						</div>
					</div>	    
   				</div>

   				<div class="my-2" id="tblaponmen">
   					<div class="card">
  						<div class="card-header">
    						DATA APPOINMENT
  						</div>
  						<div class="card-body">
    						<table class="table table-hover table-bordered" style="">
						    	<thead>
						    		<tr>
										<th>Nama Hewan</th>
										<th>Email</th>
										<th>No.Telp</th>
							            <th>Date</th>
							            <th>Jenis Hewan</th>
							            <th>Keluhan</th>
							            <th>Aksi</th>
									</tr>
									<tr>
										<td>Doggies1</td>
										<td>dummy1@example.com</td>
										<td>0761</td>
										<td>2020/04/14</td>
										<td>Anjing</td>
										<td>complaint1</td>
										<td><a href="" class="btn btn-success">Acc</a></td>
									</tr>
									<tr>
										<td>Kitties</td>
										<td>dummy2@example.com</td>
										<td>0761</td>
										<td>2020/04/14</td>
										<td>Kucing</td>
										<td>complaint2</td>
										<td><a href="" class="btn btn-success">Acc</a></td>
									</tr>
						    	</thead>
									
							    <?php 
								//$no = 1;
								//foreach($user as $u){ 
								?>
								<tr>
									<td><?php //echo  ?></td>
									<td><?php //echo  ?></td>
						            <td><?php //echo  ?></td>
						            <td><?php //echo  ?></td>
						            <td><?php //echo  ?></td>
						            <td><?php //echo  ?></td>
								</tr>
								<?php//  } ?>
							</table>
						</div>
					</div>	     
   				</div>

   				<div class="my-2" id="tblhewan">
   					<div class="card">
  						<div class="card-header">
    						DATA HEWAN
  						</div>
  						<div class="card-body">
    						<table class="table table-hover table-bordered" style="">
			    				<thead>
			    					<tr>
										<th>Jenis</th>
										<th>Berat</th>
										<th>Tinggi</th>
							            <th>Warna</th>
									</tr>
			    				</thead>
							    <?php 
								//$no = 1;
								//foreach($user as $u){ 
								?>
								<tr>
									<td><?php //echo  ?></td>
									<td><?php //echo  ?></td>
									<td><?php //echo  ?></td>
						            <td><?php //echo  ?></td>
								</tr>
								<?php//  } ?>
							</table>
						</div>
					</div>			    			
   				</div>
   				<div class="my-2" id="tblproduct">
   					<div class="card">
   						<div class="container text-right">
							<a href="<?= site_url('produk/form_tambah') ?>" class="btn btn-primary">Tambah Produk</a>
						</div>
   						<div class="card-header">DATA PRODUCT</div>
   						<div class="card-body">
   							<table class="table table-hover table-bordered" style="">
   								<thead>
   									<tr>
   										<th>ID product</th>
   										<th>Nama Product</th>
   										<th>Harga</th>
   										<th>Action</th>
   									</tr>
   								</thead>
   								<?php 
   								$no = 1;
   								foreach ($product as $p) {
   								 ?>
   								<tr>
   									<td><?php echo $p['id_product']; ?></td>
   									<td><?php echo $p['nama']; ?></td>
   									<td><?php echo $p['harga']; ?></td>
   									<td><a href="" class="btn btn-sm btn-secondary" data-toggle="modal" data-target="#modalDetailProduct<?php echo $p['id_product'] ?>">Detail</a></td>
   								</tr>
   								<?php } ?>
   							</table>
   						</div>
   					</div>
   				</div>
   			</div>
   		</div>
   	</div>
    
    
  	<?php foreach ($product as $p ) {?>
  	<div class="modal fade" id="modalDetailProduct<?php echo $p['id_product']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	    <div class="modal-dialog" role="document">
	      <div class="modal-content">
	        <div class="modal-header">
	        <center><h2>DETAIL BARANG</h2></center>
	        </div>
	        <div class="modal-body">
	        <!-- isi form ini -->
	        <form method="post" action="">
	        <input type="hidden" class="form-control" placeholder="ID Product" name="id_product" value="<?php echo $p['id_product']; ?>"  required>
	          <div class="form-group">
	            <label for="nama">Nama</label>
	            <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama"  value="<?php echo $p['nama']; ?>" required>
	          </div>
	          <div class="form-group">
	            <label for="harga">Harga</label>
	            <input type="text" class="form-control" id="harga" placeholder="Kelas" name="harga" value="<?php echo $p['harga']; ?>" required>
	          </div>
	          <div class="form-group">
	            <label for="deskripsi">Deskripsi</label>
	            <input type="textarea" id="deskripsi" class="form-control" placeholder="Deskripsi" name="deskripsi">
	          </div>
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
	        <div class="modal-footer">
	          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <input  type="submit" class="btn btn-primary" id="hapus" value="Submit" placeholder="Simpan">
	        </div>
	        </form>
	      </div>
	    </div>
	  </div>
	<?php } ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>