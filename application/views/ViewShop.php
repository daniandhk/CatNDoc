<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/css?family=Bentham|Playfair+Display|Raleway:400,500|Suranna|Trocchi" rel="stylesheet">

    <title>Sopink</title>
  
    <style>
      .nav-item{
        font-size: 19px;
      }

      #icon{
        position: relative;
        right: -230px;
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
      
      #icon1{
        font-size : 30px;
        position: absolute;
        right:350px;
        top:20px        
    }
      
    </style>
  
  </head>
  <body>

    <!-- START NAVBAR -->

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
            <a class="nav-link fa fa-fw fa-user" id="icon" href="<?= site_url('ControlProfile') ?>" ></a>
            <a class="nav-link fa fa-shopping-cart" id="icon1" href="<?= site_url('ControlCart') ?>"></a>
          <!--END ICON-->
          </li>
        </ul>
      </div>
    </nav>
    <!-- END NAVBAR -->

    <!-- START DISPLAY PICTURE -->
<!-- Page Content -->
<div class="container">

<div class="row">

  <div class="col-lg-3">

    <h1 class="my-4">Frankie Shop</h1>
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

      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">MAKANAN ANJING</a>
            </h4>
            <h5>$24.99</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
          </div>
          <div class="card-footer">
            <button class="btn btn-primary btn-lg" style="position: relative;left: 70px;">Buy</button>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">MAKANAN KUCING</a>
            </h4>
            <h5>$24.99</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
          </div>
          <div class="card-footer">
            <button class="btn btn-primary btn-lg" style="position: relative;left: 70px;">Buy</button>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">MAKAN ENAK</a>
            </h4>
            <h5>$24.99</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
          </div>
          <div class="card-footer">
            <button class="btn btn-primary btn-lg" style="position: relative;left: 70px;">Buy</button>
          </div>
        </div>
      </div>
    </div>
  </div>
 </div>
</div>

    <!-- END PRODUK -->

    

    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>