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
	  
	  $("#btn1").click(function(){
	    $("#tblregister").toggle();
	  });


	  $("#btn2").click(function(){
	    $("#tblaponmen").toggle();
	  });
	  

	  $("#btn3").click(function(){
	    $("#tblhewan").toggle();
	  });
	  
	});
	</script>
	<style type="text/css">
		#tblregister, #tblaponmen, #tblhewan {
			display: none;
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
   			</div>
   		</div>
   	</div>
    
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>