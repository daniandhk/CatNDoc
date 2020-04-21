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
          font-size: 140%;
        }
  
        #icon{
          position: relative;
          right: -200%;
        }

        #iconCart{
            font-size: 25vw;
        }

        #btnbuy{
          margin-left:-40%;
        }

        
              
      </style>
  </head>
  <body>
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
            <a class="nav-link" href="#">Shop <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li class="nav-item"><a href="<?= site_url('ControlCart'); ?>" class="nav-link"><i class="fa fa-shopping-cart"></i></a></li>
          <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-sign-in"></i> Login</a></li>
          <li class="nav-item"><a href="<?= site_url('ControlProfile'); ?>" class="nav-link"><i class="fa fa-user"></i> Nama User</a></li>
        </ul>
      </div>
    </nav>
      <br>
      <br>
      <h2 style="position: absolute;left: 50px;">Item belanjaan anda :</h2>
      <br>
      <br>
      <li class="nav-link fa fa-shopping-cart" id="iconCart"></li>
      
      
      <!-- BUAT GET APA AJA YG UDAH DIBELI-->
      <div class="container" style="position:absolute;top:23%;left:28%;width:80%;">
	<table id="cart" class="table table-hover">
    				<thead>
						<tr>
							<th style="width:65%">Produk</th>
							<th style="width:10%">Harga</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td data-th="Product">
								<div class="row">
                <!-- LOOP LOOP LOOP-->

                <!-- GET FOTO -->
									<div class="col-sm-2 hidden-xs"><img src="http://placehold.it/100x100" alt="..." class="img-responsive"/></div>
									<div class="col-sm-8">
                  <!-- GET NAMA PRODUK -->
										<h4 class="nomargin">Product 1</h4>
                    <!-- GET DESKRIPSI PRODUK -->
										<p>Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet.</p>
									</div>
								</div>
							</td>
							<!-- GET HARGA -->
              <td data-th="Price">$150.00</td>
							<!-- LOOP LOOP LOOP-->
							
							<td class="actions" data-th="">
              <!-- BUAT DELETE -->
								<button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>								
							<!-- END BUAT DELETE -->
              </td>
						</tr>
					</tbody>
					<tfoot>
						<tr>
							<td><a href="<?= site_url('ControlShop') ?>" class="btn btn-warning"><i class="fa fa-angle-left"></i> BACK</a></td>
							<td colspan="0" class="hidden-xs"></td>         
							<td><button id="btnbuy" type="button" class="btn btn-success btn-lg " data-toggle="modal" data-target="#myModal">CHECKOUT</button></td>
						</tr>
					</tfoot>
				</table>
</div>

<!-- Modal -->
<div  id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">SUCCESS</h4>
      </div>
      <div class="modal-body">
        <p>PEMBELIAN BERHASIL</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
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