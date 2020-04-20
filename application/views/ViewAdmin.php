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
    <style>
    table, th, td {
        border: 3px solid black;
        border-collapse: collapse;
    }
    th, td {
        padding: 5px;
        text-align: left;    
    }

    #btn1{
        margin-left:3%;
    }
    #btn2{
        margin-left:30%;
    }

    #btn3{
        margin-left:75%;
        margin-top:-3%;
    }
</style>

<script>
$(document).ready(function(){
  $("#tblregister").hide;
  $("#tblhewan").hide;
  $("#tblaponmen").hide;
  
  
  $("#btn1").click(function(){
    $("#tblregister").toggle();
  });


  $("#btn2").click(function(){
    $("#tblhewan").toggle();
  });
  

  $("#btn3").click(function(){
    $("#tblaponmen").toggle();
  });
  
});
</script>
  </head>
  <body>
  <a class="nav-link" href="<?= site_url('HomePage') ?>">Home <span class="sr-only">(current)</span></a>
    
   <br>
   <br>

    <button id="btn1" class="btn btn-secondary">DATA REGISTER</button>
    
    <button id="btn2" class="btn btn-secondary">DATA HEWAN</button>
    
    <button id="btn3" class="btn btn-secondary">DATA APPOINMENT</button> 

    <h2 style="position:absolute;left:0.5%;top:5%;">DATA REGISTER</h2>
    <table id="tblregister" style="position:absolute;top:15%;left:1%;display:none;">
		<tr>
			<th>Nama</th>
			<th>Email</th>
			<th>Password</th>
		</tr>
	    <?php 
		//$no = 1;
		//foreach($user as $u){ 
		?>
		<tr>
			<td><?php //echo  ?></td>
			<td><?php //echo  ?></td>
			<td>
			      <?php //echo EDIT; ?>
                              <?php //echo HAPUS ?>
			</td>
		</tr>
		<?php//  } ?>
	</table>

    <h2 style="text-align:center;position:absolute;left:38%;top:5%">DATA HEWAN</h2>
    <table id="tblhewan" style="position:absolute;right:50%;top:15%;display:none;">
		<tr>
			<th>Jenis</th>
			<th>Berat</th>
			<th>Tinggi</th>
            <th>Warna</th>
		</tr>
	    <?php 
		//$no = 1;
		//foreach($user as $u){ 
		?>
		<tr>
			<td><?php //echo  ?></td>
			<td><?php //echo  ?></td>
			<td><?php //echo  ?></td>
            <td><?php //echo  ?></td>
			      <?php //echo EDIT; ?>
                              <?php //echo HAPUS ?>
			</td>
		</tr>
		<?php//  } ?>
	</table>

    <h2 style="text-align:center;position:absolute;right:14%;top:5%">DATA APPOINMENT</h2>
    <table id="tblaponmen" style="position:absolute;right:10%;top:15%;display:none;">
		<tr>
			<th>Nama</th>
			<th>Email</th>
			<th>No.Telp</th>
            <th>Date</th>
            <th>Jenis Hewan</th>
            <th>Keluhan</th>
		</tr>
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
		
			      <?php //echo EDIT; ?>
                              <?php //echo HAPUS ?>
			</td>
		</tr>
		<?php//  } ?>
	</table>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>