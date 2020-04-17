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
        height: 600px;
        width: 50px;
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
            <a class="nav-link fa fa-fw fa-user" id="icon" href="#" ></a>
            <a class="nav-link fa fa-shopping-cart" id="icon1" href="<?= site_url('ControlCart') ?>"></a>
          <!--END ICON-->
          </li>
        </ul>
      </div>
    </nav>
    <!-- END NAVBAR -->

    <!-- START DISPLAY PICTURE -->

    <div id="carouselExampleControls" class="carousel slide m-5" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="<?php echo base_url('assests/img/makan1.jpg'); ?>" class="d-block w-100 " id="pic1">
        </div>
        <div class="carousel-item">
          <img src="<?php echo base_url('assests/img/makan2.jpg'); ?>" class="d-block w-100 "  id="pic1">
        </div>
        <div class="carousel-item">
          <img src="<?php echo base_url('assests/img/makan3.jpg'); ?>" class="d-block w-100 " id="pic1">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <!-- END DISPLAY PICTURE -->

    <h1 style="text-align: left; position: absolute;left: 20px;bottom: -200px;">BEST SELLER</h1>
    

    
      <p style="text-align: center;position: absolute;right: 390px;bottom: -10px;"><span style="font-size: 30px;font-weight: bold;">KENAPA CAT N DOC ?</span> <br> 
        <span style="position: relative;right: -155px;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab, possimus! Eum, ad placeat!
        <br>
        <!--- batas-->AIDAWOIDAW AAAAAAAAAAAAAAAAAAAAAAAAAAAAAA AAAAAAAAAAAAAAAAAAA<!--- batas-->
        <br>
        <!--- batas-->AIDAWOIDAW AAAAAAAAAAAAAAAAAAAAAAAAAAAAAA AAAAAAAAAAAAAAAAAAA<!--- batas--> </span></p>

    <!-- START PRODUK -->

    <div class="card w-50">
      <div class="card-img-top d-flex align-items-center bg-light">
          <div>
              <img class="img-fluid" src="http://via.placeholder.com/150x150/1f1a38/ffffff?text=Image" alt="Card image cap">
          </div>
          <p class="col p-2 m-0">Text next to the right of the image</p>
          <button style="position: relative;left: -40px;">Buy</button>
      </div>
  </div>
  
  <div class="card w-50">
    <div class="card-img-top d-flex align-items-center bg-light">
        <div>
            <img class="img-fluid" src="http://via.placeholder.com/150x150/1f1a38/ffffff?text=Image" alt="Card image cap">
        </div>
        <p class="col p-2 m-0">Text next to the right of the image</p>
        <button style="position: relative;left: -40px;">Buy</button>
    </div>
</div>
<div class="card w-50">
  <div class="card-img-top d-flex align-items-center bg-light">
      <div>
          <img class="img-fluid" src="http://via.placeholder.com/150x150/1f1a38/ffffff?text=Image" alt="Card image cap">
      </div>
      <p class="col p-2 m-0">Text next to the right of the image</p>
      <button style="position: relative;left: -40px;">Buy</button>
  </div>
</div>

    <!-- END PRODUK -->

    

    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>