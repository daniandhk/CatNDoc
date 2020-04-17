<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cat n Doc</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 
  
  <style>

    #container {
        position:absolute;
    }
    
    #img1{
        filter: blur(8px);
        -webkit-filter: blur(8px);
        width: 100%;
        height: auto;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    
    #img2 {
        width: 100%;
        height: 100%;
        position: absolute;
        left: 0px;
        top: 0px;
        opacity: 0.4;
    }

    #img3{
        width: 50px;
        height: 60px;
        position: absolute;
        left: 1640px;
        top: 10px;
        
    }

    .centered {
        position: absolute;
        top: 10%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .centered2{
        background-color: rgb(0,0,0);
        background-color: rgba(0,0,0, 0.4);
        color: white;
        font-weight: bold;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 2;
        width: 60%;
        padding: 20px;
        text-align: center;
    }

    .top-right {
        position: absolute;
        top: 0px;
        right: 0px;
        color: black;
    }

    .top-left {
        position: absolute;
        top: 8px;
        left: 16px;
    }


    .welkam{
        font-size: 50px;
        font-family :cursive;
        font-weight: bold;
        position: relative;
        color :white;
    }

    .welkam2{
        font-size: 65px;
        font-family :'Gill Sans', sans-serif;
        font-weight: bold;
        position: relative;
        color :white;
    }

    .button1{
        background-color:gray;
        border: none;
        color: black;
        padding: 10px;
        width: 140px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 6px 13px;
        border-radius: 70px;
        opacity: 0.6;
    }

    .button2{
        background-color:gray;
        border: none;
        color: black;
        padding: 10px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 25px;
        margin: 6px 13px;
        border-radius: 1px;
        opacity: 0.8;
    }
    
  </style>
</head>
<body>
        <!--COVER-->
        <img src="<?php echo base_url('assets/img/homepic.jpg'); ?>" id="img1" />
        <!--<img src="<?php echo base_url('assets/img/gray.jpg'); ?>" id="img2" />-->
        <!--<img src="<?php echo base_url('assets/img/telpun.png'); ?>" id="img3"/>-->
        <!--END COVER-->

        <!--TULISAN TULISAN DI COVER-->
        <div class="centered2">
            <h1 class="welkam2"> ONE STOP FOR YOUR PET</h1>
            <br>
            <br>
            <a href="#" class="btn btn-default btn-rounded mb-4 button2" data-toggle="modal" data-target="#modalContactForm"  style="color: white;">REQUEST APPOINTMENT</a>
        </div>

        <div class="top-right">
            <h2 class="button button1" style="color:white;font-weight: 800;">Call Us<br>   022-232323   </h2>
        </div>

        <!--END TULISAN TULISAN DI COVER-->

        <!--NAVBAR DROPDOWN-->
        <div class="top-left">
            <div class="dropdown">
                <button class="btn btn-lg btn-secondary dropdown-toggle" type="button" data-toggle="dropdown">Menu
                <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalLoginForm">Login</a></li>
                    <li><a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalRegisterForm">Register</a></li>
                    <li><a href="<?= site_url('ControlShop') ?>" class="btn btn-default btn-rounded mb-4" data-toggle="" data-target="">Shop</a></li>
                    <li><a href="" class="btn btn-default btn-rounded mb-4" data-toggle="" data-target="">About Us</a></li>
                </ul>
            </div>
        </div>
        <!--ENDNAVBAR DROPDOWN-->

        <!-- INI BUAT FORM POP UP LOGIN-->
<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header text-center">
            <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body mx-3">
            <div class="md-form mb-5">
            <i class="fas fa-envelope prefix grey-text"></i>
            <input type="email" id="defaultForm-email" class="form-control validate">
            <label data-error="wrong" data-success="right" for="defaultForm-email">Your email</label>
            </div>

            <div class="md-form mb-4">
            <i class="fas fa-lock prefix grey-text"></i>
            <input type="password" id="defaultForm-pass" class="form-control validate">
            <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
            </div>

        </div>
        <div class="modal-footer d-flex justify-content-center">

            <!-- LEMPAR KE DATABASE -->
                <button class="btn btn-secondary">Login</button>
            <!-- LEMPAR KE DATABASE -->
        
        </div>
        </div>
    </div>
</div>
<!-- END BUAT FORM POP UP LOGIN-->

<!-- START BUAT FORM POP UP REGISTER-->
<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Sign up</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fas fa-user prefix grey-text"></i>
          <input type="text" id="orangeForm-name" class="form-control validate">
          <label data-error="wrong" data-success="right" for="orangeForm-name">Your name</label>
        </div>
        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <input type="email" id="orangeForm-email" class="form-control validate">
          <label data-error="wrong" data-success="right" for="orangeForm-email">Your email</label>
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          <input type="password" id="orangeForm-pass" class="form-control validate">
          <label data-error="wrong" data-success="right" for="orangeForm-pass">Your password</label>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">

        <!-- LEMPAR KE DATABASE -->
        <button class="btn btn-secondary">Sign up</button>
        <!-- LEMPAR KE DATABASE -->
      
      </div>
    </div>
  </div>
</div>

<!--END POP UP REGSITER -->

<!-- INI BUAT FORM REQUEST APPOINTMENT -->
<div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Request Appoinment</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fas fa-user prefix grey-text"></i>
          <input type="text" id="form34" class="form-control validate">
          <label data-error="wrong" data-success="right" for="form34">Nama</label>
        </div>

        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <input type="email" id="form29" class="form-control validate">
          <label data-error="wrong" data-success="right" for="form29">Email</label>
        </div>

        <div class="md-form mb-5">
          <i class="fas fa-tag prefix grey-text"></i>
          <input type="text" id="form32" class="form-control validate">
          <label data-error="wrong" data-success="right" for="form32">No Telepon</label>
        </div>


        
        <div class="md-form">
          <i class="fas fa-pencil prefix grey-text"></i>
          <textarea type="text" id="form8" class="md-textarea form-control" rows="4"></textarea>
          <label data-error="wrong" data-success="right" for="form8">Hari,Tanggal,Jam dan juga keluhan</label>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <!-- LEMPAR KE DATABASE -->
        <button class="btn btn-unique">Send <i class="fas fa-paper-plane-o ml-1"></i></button>
        <!-- LEMPAR KE DATABASE -->
      </div>
    </div>
  </div>
</div>
<!--END REQUEST APPOINMENT-->
    


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>
