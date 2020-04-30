<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Bentham|Playfair+Display|Raleway:400,500|Suranna|Trocchi" rel="stylesheet">

    <title>Shopping Time!</title>
  
    <style>
      .nav-item{
        font-size: 19px;
      }

      #pic1{
        height: 400px;
        width: 4000px;
      }
      #pic2{
        height: 400px;
        width: 4000px;
      }
      #pic3{
        height: 400px;
        width: 4000px;
      }
      

      
    </style>
  
  </head>
  <body>
    <?php echo $this->session->flashdata('gagalshop'); ?>
    <?php echo $this->session->flashdata('berhasilbeli'); ?> 
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
          <li class="nav-item active">
            <a class="nav-link" href="#"><b>Shop</b><span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <?php if (!isset($_SESSION['logged_in'])){ ?>
          <li class="nav-item"><a href="" class="nav-link" data-target="#modalLoginForm" data-toggle="modal"><i class="fa fa-sign-in-alt"></i> Login</a></li>
          <?php } else{ ?>
          <li class="nav-item"><a href="<?= site_url('ControlCart'); ?>" class="nav-link"><i class="fa fa-shopping-cart"></i> Cart </a></li>
          <li class="nav-item"><a href="<?= site_url('ControlProfile'); ?>" class="nav-link"><i class="fa fa-user"></i> <?php echo $nama; ?></a></li>
          <li class="nav-item"><a href="" class="nav-link" data-target="#modalLogout" data-toggle="modal"><i class="fa fa-sign-out-alt"></i> Logout</a></li>
          <?php }?>
        </ul>
      </div>
    </nav>
    <!-- END NAVBAR -->

<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header text-center">
            <h4 class="modal-title font-weight-bold">Login</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="<?= site_url('ControlShop/login') ?>" method="post">
            <div class="modal-body mx-3">
              <div class="md-form mb-4">
                <input type="email" id="defaultForm-email" class="form-control validate" name="email" placeholder="Email" required>
              </div>

              <div class="md-form mb-4">
                <input type="password" id="defaultForm-pass" class="form-control validate" name="password" placeholder="Password" required>
              </div>
            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Sign In</button>
                <a href="" class="btn btn-secondary" data-toggle="modal" data-target="#modalRegisterForm">Sign Up</a>
            </div>
          </form>
        </div>
    </div>
</div>
<!-- END BUAT FORM POP UP LOGIN-->

<div class="modal fade" id="modalLogout" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header text-center">
            <h4 class="modal-title font-weight-bold">Yakin ingin Log Out?</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-footer d-flex justify-content-center">
              <button onclick="location.href='ControlShop/logout'" class="btn btn-primary">Logout</button>
          </div>
        </div>
  </div>
</div>

<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title font-weight-bold">Register</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
    <form id="formregis" action="<?= site_url('ControlShop/registrasi') ?>" method="post">
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

    <!-- START DISPLAY PICTURE -->
<!-- Page Content -->
<div class="container">

<div class="row">

  <div class="col-lg-3">

    <h1 class="my-4">Shop</h1>
    <!-- KATEGORI 
      <div class="list-group">
        <a href="#" class="list-group-item">Toy</a>
        <a href="#" class="list-group-item">Shampoo</a>
        <a href="#" class="list-group-item">Accesories</a>
      </div>
    KATEGORI -->

  </div>

  <div class="col-lg-9">

    <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <img class="d-block img-fluid" src="<?php echo base_url('assets/img/makan1.jpg'); ?>" id="pic1">
        </div>
        <div class="carousel-item">
          <img class="d-block img-fluid" src="<?php echo base_url('assets/img/makan2.jpg'); ?>" id="pic2">
        </div>
        <div class="carousel-item">
          <img class="d-block img-fluid" src="<?php echo base_url('assets/img/makan3.jpg'); ?>" id="pic3">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <div class="row">
      <?php 
      $no = 0;
      foreach($product as $p) {
        $no++;
        $id = $p['id_product'];
       ?>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <a href="#"><img style="width: 100%; height: auto; max-height: 250px;" class="card-img-top" src="<?php echo base_url("assets/img/Sale/").$p['foto']; ?>" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#"><?php echo $p['nama']; ?></a>
              <small style="font-size:12px"><?php echo $p['jenis'] ?></small>
            </h4>
            <h5>Rp <?php echo $p['harga'] ?></h5>
            <p class="card-text"><?php echo $p['deskripsi'] ?></p>
          </div>
          <?php if(isset($_SESSION['logged_in'])){ ?>
          <div class="card-footer">
            <a href="" data-target="#modalbeli<?php echo $no; ?>" data-toggle="modal" class="text-center btn btn-primary btn-lg">Beli</a>
          </div>
          <?php } else{ ?>
            <div class="card-footer">
            <a href="" data-target="#modalLoginForm" data-toggle="modal" class="text-center btn btn-primary btn-lg">Beli</a>
          </div>
        <?php } ?>
        </div>
      </div>
      <?php } ?>
    </div>

  </div>
 </div>
</div>

    <!-- END PRODUK -->
<?php $no = 0; foreach ($product as $p) { $no++?>
<div class="modal fade" id="modalbeli<?php echo $no; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form action="<?= site_url('ControlShop/beli') ?>" method="post">
      <input type="hidden" name="id_user" value="<?php echo $id_user; ?>">
      <input type="hidden" name="id_product" value="<?php echo $p['id_product']; ?>">
        <div class="card h-100">
          <a href="#"><img style="width: 100%;height: auto;max-width: 300px;" class="card-img-top" src="<?php echo base_url("assets/img/Sale/").$p['foto']; ?>" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#"><?php echo $p['nama']; ?></a>
              <small style="font-size:12px"><?php echo $p['jenis'] ?></small>
            </h4>
            <h5>Rp <?php echo $p['harga'] ?></h5>
            <p class="card-text"><?php echo $p['deskripsi'] ?></p>
          </div>
          <div class="col-auto my-1">
            <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Jumlah</label>
            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="quantity">
              <option selected value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
            </select>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<?php  } ?>

    

    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>