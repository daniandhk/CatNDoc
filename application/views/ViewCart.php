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
            <a class="nav-link" href="#">Cart <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <?php if (!isset($_SESSION['logged_in'])){ ?>
          <li class="nav-item"><a href="<?= site_url('ControlCart'); ?>" class="nav-link"><i class="fa fa-shopping-cart"></i></a></li>
          <li class="nav-item"><a href="" class="nav-link" data-target="#modalLoginForm" data-toggle="modal"><i class="fa fa-sign-in"></i> Login</a></li>
          <?php } else{ ?>
          <li class="nav-item"><a href="<?= site_url('ControlProfile'); ?>" class="nav-link"><i class="fa fa-user"></i> <?php echo $nama; ?></a></li>
          <li class="nav-item"><a href="" class="nav-link" data-target="#modalLogout" data-toggle="modal"><i class="fa fa-sign-out"></i> Logout</a></li>
          <?php }?>
        </ul>
      </div>
</nav>
      
      
      <!-- BUAT GET APA AJA YG UDAH DIBELI-->
      <div class="container" style="position:absolute;top:23%;left:28%;width:80%;">
	<table id="cart" class="table table-hover">
    				<thead>
						<tr>
							<th width="10%"></th>
            						<th width="25%">Product</th>
            						<th width="15%">Harga</th>
            						<th width="13%">Quantity</th>
            						<th width="20%">Subtotal</th>
            						<th width="12%"></th>
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

<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header text-center">
            <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="<?= site_url('ControlCart/login') ?>" method="post">
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
              <button onclick="location.href='ControlCart/logout'" class="btn btn-primary">Logout</button>
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
