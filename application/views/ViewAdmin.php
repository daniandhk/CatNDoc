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
	    $("#tblPenjualan").toggle();
	  });
	  
	});
	</script>
	<style type="text/css">
		#tblregister, #tblaponmen, #tblhewan, #tblproduct, #tblPenjualan {
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
	        <a class="nav-link" href="<?php echo site_url('HomePage'); ?>">Home</a>
	      </li>
	      <li class="nav-item active">
	        <a class="nav-link" href="<?php echo site_url('ControlAdmin'); ?>">Lihat Data</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="<?php echo site_url('ControlProduct'); ?>">Product</a>
	      </li>
	    </ul>
	  </div>
	</nav>

   	<div class="container my-3">
   		<div class="row">
   			<div class="col-3">
   				<h3 style="font-weight: bolder">Lihat Data</p>
   				<button id="btn1" class="btn btn-secondary my-1">DATA USER</button>
   				<button id="btn2" class="btn btn-secondary my-1">DATA APPOINMENT</button> 
   				<button id="btn3" class="btn btn-secondary my-1">DATA HEWAN</button>
   				<button id="btn4" class="btn btn-secondary my-1">DATA PENJUALAN</button>
   			</div>
   			<div class="col-9">
   				<div id="tblregister">
   					<div class="card">
  						<div class="card-header">
    						DATA USER
  						</div>
  						<div class="card-body">
    						<table class="table table-hover table-bordered" style="">
						    	<thead>
						    		<tr>
						    			<th>No</th>
										<th>Nama</th>
										<th>Aksi</th>
									</tr>
						    	</thead>
							    <?php 
								$no = 0;
								foreach($users as $u){ 
									if($u['email'] != "admin@admin") {
									$no++;
								?>
								<tr>
									<td><?php echo $no; ?></td>
									<td><?php echo $u['nama']; ?></td>
									<td><a href="" data-toggle="modal" data-target="#detailUser<?php echo $no ?>" class="btn btn-primary"><i class="fa fa-eye"></i> Detail</a>
										<a href="" data-toggle="modal" data-target="#deleteUser<?php echo $no; ?>" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a>
									</td>
								</tr>
								<?php } } ?>
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
						    			<th>No</th>
										<th>Nama Hewan</th>
										<th>Email</th>
										<th>No.Telp</th>
							            <th>Date</th>
							            <th>Jenis Hewan</th>
							            <th>Keluhan</th>
							            <th>Aksi</th>
									</tr>
								</thead>
									<?php 
									$no = 1;
									foreach ($ap as $a) {	
									?>
									<tr>
										<td><?php echo $no++; ?></td>
										<td><?php echo $a['nama_pet'] ?></td>
										<td><?php echo $a['email']; ?></td>
										<td><?php echo $a['notelp'] ?></td>
										<td><?php echo $a['tanggal']; ?></td>
										<td><?php echo $a['jenis_pet']; ?></td>
										<td><?php echo $a['keluhan']; ?></td>
										<td><?php if($a['status'] == "Belum") {?>
											<a href="<?php echo base_url('index.php/ControlAdmin/acceptAppointment/').$a['id_ap']; ?>" class="btn btn-success">Accept</a>
											<?php } else { ?>
											<a href="<?php echo base_url('index.php/ControlAdmin/cancelAppointment/').$a['id_ap']; ?>" class="btn btn-danger">Cancel</a>
											<?php } ?>
										</td>
									</tr>								
							    <?php  } ?>
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
			    						<th>No</th>
			    						<th>Pemilik</th>
			    						<th>Nama Hewan</th>
										<th>Jenis</th>
										<th>Berat</th>
										<th>Tinggi</th>
							            <th>Warna</th>
									</tr>
			    				</thead>
							    <?php 
								$no = 1;
								foreach ($hewan as $h) {
								?>
								<tr>
									<td><?php echo $no++; ?></td>
									<td><?php echo $h['nama']; ?></td>
									<td><?php echo $h['nama_pet']; ?></td>
									<td><?php echo $h['jenis'];  ?></td>
									<td><?php echo $h['berat']; ?></td>
									<td><?php echo $h['tinggi'];  ?></td>
						            <td><?php echo $h['warna'];  ?></td>
								</tr>
								<?php  } ?>
							</table>
						</div>
					</div>			    			
   				</div>

   				<div class="my-2" id="tblPenjualan">
   					<div class="card">
  						<div class="card-header">
    						DATA PENJUALAN
  						</div>
  						<div class="card-body">
    						<table class="table table-hover table-bordered" style="">
			    				<thead>
			    					<tr>
			    						<th>No</th>
			    						<th>Pembeli</th>
			    						<th>Barang</th>
										<th>Qty</th>
										<th>Tanggal Beli</th>
										<th>Bukti</th>
										<th>Status</th>
							            <th>Aksi</th>
									</tr>
			    				</thead>
							    <?php 
								$no = 1;
								foreach ($penjualan as $pen) {
								?>
								<tr>
									<td><?php echo $no++; ?></td>
									<td><?php echo $pen['pembeli']; ?></td>
									<td><?php echo $pen['barang']; ?></td>
									<td><?php echo $pen['quantity'];  ?></td>
									<td><?php echo $pen['tanggal']; ?></td>
									<td><?php echo $pen['bukti']; ?></td>
									<td><?php echo $pen['status'];  ?></td>
						            <td><a href="#" class="btn btn-success">Oke</a></td>
								</tr>
								<?php  } ?>
							</table>
						</div>
					</div>			    			
   				</div>
   			</div>
   		</div>
   	</div>
    
   	<?php $no = 0; foreach ($users as $u) { if($u['email'] != "admin@admin" ) { $no++?>
  	<div class="modal fade" id="detailUser<?php echo $no; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	    <div class="modal-dialog" role="document">
	      <div class="modal-content">
	        <div class="modal-header">
	        <center><h2>DETAIL USER</h2></center>
	        </div>
	        <div class="modal-body">
	        <!-- isi form ini -->
	        <form method="post" action="">
	        	<input type="hidden" name="emailNow" value="<?php echo $u['email']; ?>">
	          <div class="form-group">
	            <label for="nama">Nama</label>
	            <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama"  value="<?php echo $u['nama']; ?>" required>
	          </div>
	          <div class="form-group">
	            <label for="email">Email</label>
	            <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="<?php echo $u['email']; ?>" required>
	          </div>
	          <div class="form-group">
	            <label for="password">Password</label>
	            <input type="text" id="password" class="form-control" placeholder="Password" name="password" value="<?php echo $u['password']; ?>">
	          </div>
	        </div>
	        <div class="modal-footer">
	          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        </div>
	        </form>
	      </div>
	    </div>
	  </div>


	  <div class="modal fade" id="deleteUser<?php echo $no; ?>" tabindex="-1" role="dialog">
	  	<div class="modal-dialog" role="document">
	    	<div class="modal-content">
	      		<div class="modal-header">
		        	<h5 class="modal-title">Konfirmasi Delete Akun</h5>
	        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          			<span aria-hidden="true">&times;</span>
	        		</button>
	      		</div>
	      	<div class="modal-body">
	        	<p>Apakah anda yakin untuk menghapus akun <b><?php echo $u['nama']; ?></b>?</p>
	      	</div>
	      	<div class="modal-footer">
	      		<a class="btn btn-danger" href="<?php echo base_url('index.php/ControlAdmin/deleteUser/').$u['id_user']; ?>"><i class="fa fa-trash"></i> Ya, Hapus</a>
	        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	      	</div>
	    	</div>
	  	</div>
	</div>
	<?php } } ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>