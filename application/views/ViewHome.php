<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cat n Doc</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
  <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
 
  
  <style>

    #container {
        position:absolute;
    }
    
    #img1{
        filter: blur(5px);
        -webkit-filter: blur(5px);
        width: 100%;
        height: 721px;
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
        height: 50px;
        position: absolute;
        
    }

    #img4{
        width: 50%;
        max-width: 360px;
        height: auto;
        /*width: 50%;
        height: 50%;*/
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
        top: 8px;
        right: 40px;
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
        font-size: 5vw;
        font-family :'Gill Sans', sans-serif;
        font-weight: bold;
        position: relative;
        color :white;
    }

    .button1{
        background-color: rgb(0,0,0);
        background-color: rgba(255,255,255,0.8);
        border: none;
        color: black;
        padding: 10px;
        width: 100%;
        max-width: 140px;
        height: auto;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 6px 13px;
        border-radius: 70px;
        opacity: 0.8;
    }

    .button2{
        background-color:gray;
        border: none;
        color: black;
        padding: 10px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        max-width: 375px;
        height: auto;
        font-weight: bold;
        margin: 6px 13px;
        border-radius: 1px;
        opacity: 0.8;
    }
    
  </style>
</head>
<body>
        <?php echo $this->session->flashdata('berhasil'); ?>
        <?php echo $this->session->flashdata('gagal'); ?>
        <?php echo $this->session->flashdata('gagallogin'); ?>
        <!--COVER-->
        <img src="<?php echo base_url('assets/img/homepic.jpg'); ?>" id="img1" />
        <!--<img src="<?php echo base_url('assets/img/gray.jpg'); ?>" id="img2" />-->
        <!--<img src="<?php echo base_url('assets/img/telpun.png'); ?>" id="img3"/>-->
        <!--END COVER-->
        
        <!--TULISAN TULISAN DI COVER-->
        <div class="centered2">
            <img src="<?php echo base_url('assets/img/banner.png'); ?>"id="img4"/>
            <br>
            <br>
            <h1 class="welkam2" style="color: white;"> ONE STOP FOR YOUR PET</h1>
            <a href="#" class="btn btn-default btn-rounded mb-4 button2" style="color: white;" data-toggle="modal" data-target="#modalContactForm">REQUEST APPOINTMENT</a>
        </div>

        <div class="top-right">
            <h1 class="button button1" style="position: relative;color:black;font-weight: 800;">Call Us<br>   022-232323   </h1>
        </div>

        <!--END TULISAN TULISAN DI COVER-->
        
        <!--NAVBAR DROPDOWN-->
        <div class="top-left">
            <div class="dropdown">
                <button class="btn btn-lg btn-secondary dropdown-toggle" type="button" data-toggle="dropdown">Menu
                <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <?php if (!isset($_SESSION['logged_in'])){ ?>
                    <li><a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalRegisterForm">Register</a></li>
                    <li><a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalLoginForm">Login</a></li>
                    <?php } else{ ?>
                    <li><a href="<?= site_url('ControlProfile'); ?>" class="btn btn-default btn-rounded mb-4">Profile</a></li>
                    <li><a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalLogout">Logout</a></li>
                    <?php } ?>
                    <li><a href="<?= site_url('ControlShop') ?>" class="btn btn-default btn-rounded mb-4" data-toggle="" data-target="">Shop</a></li>
                    <li><a href="<?= site_url('ControlAdmin') ?>" class="btn btn-default btn-rounded mb-4" data-toggle="" data-target="">CEK ADMIN</a></li>
                </ul>
            </div>
        </div>
        <!--ENDNAVBAR DROPDOWN-->

<div class="modal fade" id="modalLogout" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header text-center">
            <h4 class="modal-title w-100 font-weight-bold">Yakin ingin Log Out?</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-footer d-flex justify-content-center">
              <button onclick="location.href='HomePage/logout'" class="btn btn-primary">Logout</button>
          </div>
        </div>
  </div>
</div>

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
          <form action="<?= site_url('login/login') ?>" method="post">
            <div class="modal-body mx-3">
              <div class="md-form mb-4">
                <input type="email" id="defaultForm-email" class="form-control validate" name="email" placeholder="Email" required>
              </div>

              <div class="md-form mb-4">
                <input type="password" id="defaultForm-pass" class="form-control validate" name="password" placeholder="Password" required>
              </div>
            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
          </form>
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
      
    <form id="formregis" action="<?= site_url('registrasi/registrasi') ?>" method="post">
      <div class="modal-body mx-3">
          <!-- NAMA -->
          <div class="md-form mb-4">
            <input name="nama" type="text" id="orangeForm-name" class="form-control" placeholder="Nama" required>
          </div>

          <!-- EMAIL -->
          <div class="md-form mb-4">
            <input name="email" type="email" id="orangeForm-email" class="form-control" placeholder="Email" required>
          </div>

          <!-- PASSWORD -->
          <div class="md-form mb-4">
            <input name="password" type="password" id="orangeForm-pass" class="form-control" placeholder="Password" required>
          </div>
      </div>
      <div class="modal-footer d-flex justify-content-center">
          <button class="btn btn-info">Sign Up</button>
      </div>
    </form>
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
      <form action="<?= site_url('appointment/appointment') ?>" method="post">
      <div class="bootstrap-iso">
       <div class="container-fluid">
        <div class="row">
         <div class="col-md-12 col-sm-6 col-xs-12">
           <div class="form-group ">
            <label class="control-label requiredField" for="email">
             Email
             <span class="asteriskField">
              *
             </span>
            </label>
            <input class="form-control" id="email" name="email" type="text"/>
           </div>
           <div class="form-group ">
            <label class="control-label " for="notelp">
             No. Telp
            </label>
            <input class="form-control" id="notelp" name="notelp" type="text"/>
           </div>
           <div class="form-group ">
            <label class="control-label " for="date">
             Date
            </label>
            <input class="form-control" id="date" name="date" placeholder="DD/MM/YYYY" type="text"/>
           </div>
           <div class="form-group ">
            <label class="control-label " for="nama_pet">
             Nama Peliharaan
            </label>
            <input class="form-control" id="nama_pet" name="nama_pet" type="text"/>
           </div>
           <div class="form-group ">
            <label class="control-label " for="select">
             Jenis Hewan Peliharaan
            </label>
            <select class="select form-control" id="jenis" name="jenis">
             <option selected="jenis" value="">
             </option>
             <option value="Kucing">
              Kucing
             </option>
             <option value="Anjing">
              Anjing
             </option>
            </select>
           </div>
           <div class="form-group ">
            <label class="control-label " for="keluhan">
             Keluhan
            </label>
            <textarea class="form-control" cols="40" id="keluhan" name="keluhan" rows="6"></textarea>
           </div>
           <div class="form-group">
            <div>
             <button class="btn btn-primary " name="submit" type="submit">
              Submit
             </button>
            </div>
           </div>
         </div>
        </div>
       </div>
      </div>
      </form>
    </div>
  </div>
</div>
<!--END REQUEST APPOINMENT-->

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>