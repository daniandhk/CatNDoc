<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/css?family=Bentham|Playfair+Display|Raleway:400,500|Suranna|Trocchi" rel="stylesheet">
    <title>Shopping Cart</title>

    <style>
        
        .nav-item{
          font-size: 19px;
        }
  
        #icon{
          position: relative;
          right: -230px;
        }

        #iconCart{
            font-size: 400px;
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
              <a class="nav-link fa fa-fw fa-user" id="icon" href="<?= site_url('ControlProfile') ?>" ></a>
              <a class="nav-link fa fa-shopping-cart" id="icon" href="<?= site_url('ControlCart') ?>"></a>
            <!--END ICON-->
            </li>
          </ul>
        </div>
      </nav>

      <li class="nav-link fa fa-shopping-cart" id="iconCart"></li>
      <h2 style="position: absolute;left: 50px;">Item belanjaan anda :</h2>
      
      <!-- BUAT GET APA AJA YG UDAH DIBELI-->
      <table style="border: 1px solid;position: absolute;right: 800px;top: 300px;">
        <tr>
            <th>QTY</th>
            <th>ITEM</th>
        </tr>
        <tr>
            <td>aw</td>
            <td>aw</td>
        </tr>

      </table>
        


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>