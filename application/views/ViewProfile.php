<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/css?family=Bentham|Playfair+Display|Raleway:400,500|Suranna|Trocchi" rel="stylesheet">
    

    <title>Profile</title>

    <style>
      .nav-item {
        font-size: 19px;
      }      
    </style>
  </head>
  <body>

    <!-- START NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
      <a class="navbar-brand" href="<?php echo site_url('Homepage'); ?>">
        <img width="30" height="auto" src="<?= base_url('assets/img/logo.png'); ?>">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('Homepage'); ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= site_url('ControlShop') ?>">Shop <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-shopping-cart"></i></a></li>
          <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-sign-in"></i> Login</a></li>
          <li class="nav-item active"><a href="#" class="nav-link"><i class="fa fa-user"></i> Nama User</a></li>
        </ul>
      </div>
    </nav>
    <!-- END NAVBAR -->
      
      <!-- START USER PROFILE -->
      <div class="container">    
                <div class="jumbotron">
                    
                <a href="#" type="button" class="btn btn-info btn-sm mb-1 mt-5" data-toggle="modal" data-target="#myModal">UPDATE DATA DIRI</a>
                    
                  <div class="row">
                      <div class="col-md-3 col-xs-12 col-sm-6 col-lg-3">
                        <div class="thumbnail photo_view_postion_b" >
                        <!-- GET FOTO-->
                          <img style="height:100%; width:auto; max-height:280px" src="https://1.bp.blogspot.com/-Z4udyQ92_Pk/XoK9UJkRlAI/AAAAAAAAIRc/89AwHjoIaaAVH_x1QQ2GlJwPhC5w1xk1QCNcBGAsYHQ/s1600/8VO262-ZLMGFz-sB.jpg" alt="stack photo" class="img">
                        
                        </div>
                      </div>
                      <div class="col-md-9 col-xs-12 col-sm-6 col-lg-9">
                          <div class="" style="border-bottom:1px solid black">
                            <!-- GET NAMA-->
                            <h2>MANUSIAWI</h2>
                            
                          </div>
                            <hr>
                          <div class="col-md-8">  
                            <ul class=" details">
                              <!-- GET NOTELP-->
                              <li id="profil"><p><span class="glyphicon glyphicon-earphone one" style="width:50px;"></span>086969696</p></li>

                              <!-- GET EMAIL-->
                              <li id="profil"><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span>somerandom@email.com</p></li>

                              <!-- GET KOTA ASAL-->
                              <li id="profil"><p><span class="glyphicon glyphicon-map-marker one" style="width:50px;"></span>ANAPTANI</p></li>
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

                    <!-- HEWAN -->
                    <a href="#" type="button" class="btn btn-info btn-sm mb-1 mt-5" data-toggle="modal" data-target="#myModal2">UPDATE DATA HEWAN</a>
                    <div class="row">
                    
                      <div class="col-md-3 col-xs-12 col-sm-6 col-lg-3">
                      
                        <div class="thumbnail photo_view_postion_b" >
                        
                        <!-- GET FOTO-->
                          <img style="height:100%; width:auto; max-height:280px" src="https://1.bp.blogspot.com/-Z4udyQ92_Pk/XoK9UJkRlAI/AAAAAAAAIRc/89AwHjoIaaAVH_x1QQ2GlJwPhC5w1xk1QCNcBGAsYHQ/s1600/8VO262-ZLMGFz-sB.jpg" alt="stack photo" class="img">
                        
                        </div>
                        
                      </div>
                      
                      <div class="col-md-9 col-xs-12 col-sm-6 col-lg-9">
                      
                          <div class="" style="border-bottom:1px solid black">
                          
                            <!-- GET NAMA-->
                            <h2>HEWANI</h2>
                            
                          </div>
                          
                            <hr>
                          <div class="col-md-8">  
                          
                        <div class="col-2 col-xs-4 tital " >Jenis:</div><div class="col-sm-6 col-xs-6 contant_i">-</div>
                        <div class="clearfix"></div><div class="bot-border"></div>
                        <div class="col-2 col-xs-4 tital " >Berat:</div><div class="col-sm-6 col-xs-6 contant_i">-</div>
                        <div class="clearfix"></div><div class="bot-border"></div>
                        <div class="col-2 col-xs-4 tital " >Tinggi:</div><div class="col-sm-6 col-xs-6 contant_i">-</div>
                        <div class="clearfix"></div><div class="bot-border"></div>
                        <div class="col-2 col-xs-4 tital " >Warna:</div><div class="col-sm-6 col-xs-6 contant_i">-</div>
                        <div class="clearfix"></div><div class="bot-border"></div>
                          </div>
                      </div>
                    </div>
                    <!-- HEWAN -->

                    
        <!-- END USER PROFILE -->

        <!-- EDIT DIRI -->

             <!-- Modal Edit Diri-->
             <div class="modal fade" id="myModal<?php //echo $data['id']; ?>" role="dialog">
              <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                     <h4 class="modal-title font-weight-bold">Update Data Diri</h4>
                  </div>
                  
                  <div class="modal-body">
                    <form role="form" action="" method="">
                        
                        <?php
                        //$id = $data['id']; 
                        //$query_edit = mysqli_query($koneksi, "SELECT * FROM cust WHERE id='$id'");
                        //while ($row = mysqli_fetch_array($query_edit)) {  
                        ?>

                        <input type="hidden" name="id_cust" value="<?php// echo $row['id']; ?>">
                        <div class="form-group">
                          <label>Nama</label>
                          <input type="text" name="nama_cust" class="form-control" value="<?php// echo $row['nama']; ?>">      
                        </div>
                        <div class="form-group">
                          <label>No Telp</label>
                          <input type="text" name="fakultas_mhs" class="form-control" value="<?php// echo $row['Notelp']; ?>">      
                        </div>
                        <div class="form-group">
                          <label>Email</label>
                          <input type="text" name="fakultas_mhs" class="form-control" value="<?php// echo $row['email']; ?>">      
                        </div>
                        <div class="form-group">
                          <label>Asal</label>
                          <input type="text" name="fakultas_mhs" class="form-control" value="<?php// echo $row['asal']; ?>">      
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
        <!-- EDIT DIRINI-->

        <!--EDIT HEWANI-->
            <!-- Modal Edit Diri-->
            <div class="modal fade" id="myModal2<?php //echo $data['id']; ?>" role="dialog">
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
                        //$query_edit = mysqli_query($koneksi, "SELECT * FROM ngews WHERE id='$id'");
                        //while ($row = mysqli_fetch_array($query_edit)) {  
                        ?>

                        <input type="hidden" name="id_hewan" value="<?php// echo $row['id']; ?>">
                        <div class="form-group">
                          <label>Jenis</label>
                          <input type="text" name="jenis_hewan" class="form-control" value="<?php// echo $row['jenis']; ?>">      
                        </div>
                        <div class="form-group">
                          <label>Berat</label>
                          <input type="text" name="berat_hewan" class="form-control" value="<?php// echo $row['berat']; ?>">      
                        </div>
                        <div class="form-group">
                          <label>Tinggi</label>
                          <input type="text" name="tinggi_hewan" class="form-control" value="<?php// echo $row['tinggi']; ?>">      
                        </div>
                        <div class="form-group">
                          <label>Warna</label>
                          <input type="text" name="warna_hewan" class="form-control" value="<?php// echo $row['warna']; ?>">      
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
    
        <!-- EDIT HEWANO-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>