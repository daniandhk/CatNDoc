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
    <title>Shopping Cart</title>

    <style>
        
        .nav-item{
        font-size: 19px;
      }
      
      #tablecart {
        
        text-align:center;

      }
      #tablehistory{
        text-align:center;
        
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
            <a class="nav-link" href="#"><b>Cart</b><span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li class="nav-item"><a href="<?= site_url('ControlShop'); ?>" class="nav-link"><i class="fas fa-store"></i> Shop </a></li>
          <?php if (isset($_SESSION['logged_in'])){ ?>
            <li class="nav-item"><a href="<?= site_url('ControlProfile'); ?>" class="nav-link"><i class="fa fa-user"></i> <?php echo $nama; ?></a></li>
            <li class="nav-item"><a href="" class="nav-link" data-target="#modalLogout" data-toggle="modal"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
          <?php } ?>
        </ul>
      </div>
</nav>

<!--ba jing-->
<div class="container my-2" >
<table id="tablecart" class="table table-hover table-bordered">
  <thead>
    <tr>
      <th colspan="8" style="background-color:#03adfc;">CART</th>
    </tr>
    <tr>
      <th>No.</th>
      <th>Nama Barang</th>
      <th>Harga</th>
      <th>Jumlah</th>
      <th>Total</th>
      <th>Status</th> 
      <th>More</th>
    </tr>
  </thead>
								
  <?php 
    $no = 0;
    $total = 0;
    foreach($keranjang as $k) {
    //if($k['id_user'] == $id_user)
      if((isset($_SESSION['logged_in'])) && ($k['id_user'] == $id_user)){
        foreach ($product as $p) {
          if($p['id_product'] == $k['id_product']){ 
            if($k['status'] == 'belum'){ $no++; ?>
                  <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $p['nama'] ?></td>
                    <td>Rp. <?php echo number_format($p['harga'],2,",",".") ?></td>
                    <td><?php echo $k['quantity'] ?></td>
                    <td>Rp. <?php echo number_format($p['harga']*$k['quantity'],2,",",".") ?></td>
                    <?php $total += ($p['harga']*$k['quantity']) ?>
                    <td>Menunggu Pembayaran</td>
                    <td><a href="" data-toggle="modal" data-target="#updateBeli<?php echo $no; ?>" class="btn btn-secondary">Update</a>
                      <a href="" data-toggle="modal" data-target="#deleteBeli<?php echo $no; ?>" class="btn btn-danger">Delete</a>
                    </td>
                  </tr>							
                <?php } } } } } ?>
                  <?php if($no != 0){?>
                  <th colspan="4">TOTAL   :<span style="opacity:0;">ddd</span>Rp. <?php echo number_format($total,2,",","."); ?></th>
                  <th colspan="4"><a href="" class="btn btn-sm btn-success" data-target="#modalUpload" data-toggle="modal">Upload Bukti Transfer</a><span style="opacity:0;">ddd</span><a href="" class="btn btn-sm btn-info" data-target="#modalTata" data-toggle="modal">Tata Cara Pembayaran</a></th>
                  <?php } ?>
              </table>
						</div>
<!-- a sue-->

<!-- BAJING-->
<br>
<br>
<div class="container my-2" >
<table id="tablehistory" class="table table-hover table-bordered">
  <thead>
      <tr>
        <th colspan="8" style="background-color:#fcd303;">HISTORY</th>
      </tr>
    <tr>
      <th>No.</th>
      <th>Nama Barang</th>
      <th>Harga</th>
      <th>Jumlah</th>
      <th>Total</th>
      <th>Status</th>  
      <th>More</th> 
    </tr>
  </thead>
								
  <?php 
  $no = 0;
  foreach($keranjang as $k) { 
  //if($k['id_user'] == $id_user)
  if((isset($_SESSION['logged_in'])) && ($k['id_user'] == $id_user)){
    foreach ($product as $p) {
      if($p['id_product'] == $k['id_product']){ 
        $no++;
        if($k['status'] != 'belum'){ 
  ?>
          <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $p['nama'] ?></td>
            <td>Rp. <?php echo number_format($p['harga'],2,",",".") ?></td>
            <td><?php echo $k['quantity'] ?></td>
            <td>Rp. <?php echo number_format($p['harga']*$k['quantity'],2,",",".") ?></td>
            <?php if($k['status'] == 'proses'){ ?>
              <td>Validating</td>
            <?php }else{ ?>
              <td>Delivering</td>
            <?php } ?>
            <td><a href="" data-toggle="modal" data-target="#updateBeli<?php echo $no; ?>" class="btn btn-secondary">Update</a>
              <a href="" data-toggle="modal" data-target="#deleteBeli<?php echo $no; ?>" class="btn btn-danger">Delete</a></td>
          </tr>								
			   <?php } } } } } ?>
			 </table>      
			</div>


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
              <button onclick="location.href='ControlCart/logout'" class="btn btn-primary">Logout</button>
          </div>
        </div>
  </div>
</div>

<?php $no = 0; foreach ($keranjang as $k) { if(($k['id_user'] == $id_user)){ $no++?>
<div class="modal fade" id="deleteBeli<?php echo $no; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header text-center">
            <h4 class="modal-title font-weight-bold">Batalkan Pembelian?</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <div>
            <p>Pembelian yang sudah di bayar dan sudah di kirim tak dapat di refund</p>
            <p>Pembelian yang sudah di bayar dan masih dalam proses validasi akan di refund 2x24 jam</p>
            <p>beneran ga jadi beli nic?</p>
          </div>
          </div>
          <div class="modal-footer d-flex justify-content-center">
              <a class="btn btn-danger" href="<?php echo base_url('index.php/ControlCart/deleteItem/').$k['id_keranjang']; ?>"><i class="fa fa-trash"></i> Ya, Batal</a>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
  </div>
</div>
<?php } } ?>

<div class="modal fade" id="modalTata" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header text-center">
            <h4 class="modal-title font-weight-bold">Tata Cara Pembayaran</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div>
            <p>ya gitu lah ya</p>
            <p>tf ke eug sesuai total yg hrs di byr</p>
            <p>upload bukti tf nye</p>
          </div>
          <div class="modal-footer d-flex justify-content-center">
              <a href="" class="btn btn-sm btn-success" data-target="#modalUpload" data-toggle="modal">Upload Bukti Transfer</a>
          </div>
        </div>
  </div>
</div>

<div class="modal fade" id="modalUpload" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header text-center">
            <h4 class="modal-title font-weight-bold">Upload Bukti Transfer</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <?php echo form_open_multipart('ControlCart/upload_bukti/');?>
            <input type="hidden" name="id_user" value="<?php echo $id_user; ?>">
          <div class="col-md-12 col-sm-6 col-xs-12">
            <th>TOTAL   :<span style="opacity:0;">ddd</span>Rp. <?php echo number_format($total,2,",","."); ?></th>
            <br>
            <label for="upload_foto">Bukti Transfer</label>
            <input type="file" id="upload_foto" class="form-control" name="bukti">
          </div>
          <div class="modal-footer d-flex justify-content-center">
              <button class="btn btn-primary">Submit</button>
          </div>
          </form>
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
