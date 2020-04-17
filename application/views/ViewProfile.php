<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    

    <title>Profile</title>

    <style>
      .nav-item{
        font-size: 19px;
      }

      .navbar-nav{
          position:relative;
          right:-390px;
      }

      #icon{
        position: relative;
        right: -230px;
      }
      
      #icon1{
        font-size : 30px;
        position: absolute;
        right:350px;
        top:20px        
    }

    .details #profile {
      list-style: none;
    }
    #profile {
        margin-bottom:10px;
    }
   .tital{
       text-align:right;
   }
   .contant_i{
        color: #631e1e;
        border-bottom: 1px solid #cea7a7;
   }

   .modal-dialog {
  position: absolute;
  top: 50px;
  right: 100px;
  bottom: 0;
  left: 0;
}

.btn{
    margin-left:900px;
}
      
    </style>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-4">
     <a class="navbar-brand" href="Home.html">Logo</a>

    <!--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button> (SIAPA TAU BUTUH) --> 
        
        <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active mx-4">
              <a class="nav-link" href="<?= site_url('HomePage') ?>">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item mx-4">
              <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item mx-4">
              <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item mx-4">
              <a class="nav-link" href="#">Disabled</a>
            </li>
            <!--START ICON-->
            <li class="nav-item">
              <a class="nav-link fa fa-fw fa-user" id="icon" href="#" ></a>
              <a class="nav-link fa fa-shopping-cart" id="icon" href="<?= site_url('ControlCart') ?>"></a>
            <!--END ICON-->
            </li>
          </ul>
        </div>
      </nav>
      
      <!-- START USER PROFILE -->
      <div class="container">    
                <div class="jumbotron">
                    
                <a href="#" type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal">UPDATE DATA DIRI</a>
                    
                  <div class="row">
                      <div class="col-md-3 col-xs-12 col-sm-6 col-lg-3">
                        <div class="thumbnail text-center photo_view_postion_b" >
                        <!-- GET FOTO-->
                          <img src="" alt="stack photo" class="img">
                        
                        </div>
                      </div>
                      <div class="col-md-9 col-xs-12 col-sm-6 col-lg-9">
                          <div class="" style="border-bottom:1px solid black">
                            <!-- GET NAMA-->
                            <h2>aa</h2>
                            
                          </div>
                            <hr>
                          <div class="col-md-8">  
                          <ul class=" details">
                            <!-- GET NOTELP-->
                            <li id="profil"><p><span class="glyphicon glyphicon-earphone one" style="width:50px;"></span>086969696</p></li>

                            <!-- GET EMAIL-->
                            <li id="profil"><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span>somerandom@email.com</p></li>

                            <!-- GET KOTA ASAL-->
                            <li id="profil"><p><span class="glyphicon glyphicon-map-marker one" style="width:50px;"></span>Hyderabad</p></li>
                          </ul>

                          </div>
                          <!-- INCASE BUTUH BUAT DATA DIRI TAMBAHAN
                          <div class="col-md-4">  
                            <div class="col-sm-5 col-xs-6 tital " >Birthday:</div><div class="col-sm-7 col-xs-6 ">2018/2/15</div>
                            <div class="clearfix"></div><div class="bot-border"></div>
                            <div class="col-sm-5 col-xs-6 tital " >Gender:</div><div class="col-sm-7 col-xs-6 ">Prasad</div>
                            <div class="clearfix"></div><div class="bot-border"></div>
                            <div class="col-sm-5 col-xs-6 tital " >Ethnicity:</div><div class="col-sm-7 col-xs-6 ">sdfsdfsdfsdfsdf</div>
                            <div class="clearfix"></div><div class="bot-border"></div>
                          </div>
                          -->
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group row">
                        <div class="col-md-12">
                        <div class="form-group" style="border-bottom:1px solid black">
                            <h2>INFO PELIHARAAN</h2>
                            
                        </div>
                        </div>
                      </div>
                    </div>
                    <div class="row"> 
                     <div class="col-md-4">
                        <div class="col-sm-6 col-xs-6 tital " >Jenis:</div><div class="col-sm-6 col-xs-6 contant_i">-</div>
                        <div class="clearfix"></div><div class="bot-border"></div>
                        <div class="col-sm-6 col-xs-6 tital " >Berat:</div><div class="col-sm-6 col-xs-6 contant_i">-</div>
                        <div class="clearfix"></div><div class="bot-border"></div>
                        <div class="col-sm-6 col-xs-6 tital " >Tinggi:</div><div class="col-sm-6 col-xs-6 contant_i">-</div>
                        <div class="clearfix"></div><div class="bot-border"></div>
                        <div class="col-sm-6 col-xs-6 tital " >Warna:</div><div class="col-sm-6 col-xs-6 contant_i">-</div>
                        <div class="clearfix"></div><div class="bot-border"></div>
                     </div>
                     <div class="col-md-4">
                        <div class="col-sm-6 col-xs-6 tital " >GATAU:</div><div class="col-sm-6 col-xs-6 contant_i">-</div>
                        <div class="clearfix"></div><div class="bot-border"></div>
                        <div class="col-sm-6 col-xs-6 tital " >GATAU:</div><div class="col-sm-6 col-xs-6 contant_i">-</div>
                        <div class="clearfix"></div><div class="bot-border"></div>
                        <div class="col-sm-6 col-xs-6 tital " >GATAU:</div><div class="col-sm-6 col-xs-6 contant_i">-</div>
                        <div class="clearfix"></div><div class="bot-border"></div>
                        <div class="col-sm-6 col-xs-6 tital " >GATAU:</div><div class="col-sm-6 col-xs-6 contant_i">-</div>
                        <div class="clearfix"></div><div class="bot-border"></div>
                     </div>
                    </div>                                 
                </div>
            </div>
        <!-- END USER PROFILE -->

        <!-- EDIT HEWAN -->

             <!-- Modal Edit Mahasiswa-->
             <div class="modal fade" id="myModal<?php //echo $data['id']; ?>" role="dialog">
              <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                     
                     <h4 class="modal-title font-weight-bold">Update Data Hewan</h4>
                  </div>
                  <div class="modal-body">
                    <form role="form" action="" method="">
                        
                        <?php
                        //$id = $data['id']; 
                        //$query_edit = mysqli_query($koneksi, "SELECT * FROM mhs WHERE id='$id'");
                        //while ($row = mysqli_fetch_array($query_edit)) {  
                        ?>

                        <input type="hidden" name="id_cust" value="<?php// echo $row['id']; ?>">
                        <div class="form-group">
                          <label>Nama</label>
                          <input type="text" name="nama_cust" class="form-control" value="<?php// echo $row['nama']; ?>">      
                        </div>
                        <div class="form-group">
                          <label>Fakultas</label>
                          <input type="text" name="fakultas_mhs" class="form-control" value="<?php// echo $row['fakultas']; ?>">      
                        </div>
                        <div class="modal-footer">  
                          <button type="submit" class="btn btn-success">Update</button>
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                        <?php 
                        //}
                        ?>        
                      </form>
                  </div>
                </div>
              </div>
            </div>
        <!-- EDIT HEWANI-->

        <!--a-->


    
        <!-- z-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>