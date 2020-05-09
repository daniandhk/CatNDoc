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

      <script type="text/javascript">
        var total = 0;
        var addItem = function(element) {
          var str1 = "#T";
          var id_total = str1.concat(element.value)
          var total_hrg_item = parseInt($(id_total).html());
          if(element.checked) {
            total = total + total_hrg_item;
          } else {
            total = total - total_hrg_item;
          }
          $("#total_harga").text("Rp. "+addCommas(total,2,",","."));
        }

        function addCommas(number, decimals, dec_point, thousands_sep)
        {
            number = number.toFixed(decimals);

            var nstr = number.toString();
            nstr += '';
            x = nstr.split('.');
            x1 = x[0];
            x2 = x.length > 1 ? dec_point + x[1] : '';
            var rgx = /(\d+)(\d{3})/;

            while (rgx.test(x1))
                x1 = x1.replace(rgx, '$1' + thousands_sep + '$2');

            return x1 + x2;
        }
      </script>

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
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('ControlShop'); ?>">Shop<span class="sr-only">(current)</span></a>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li class="nav-item active"><a href="<?= site_url('ControlCart'); ?>" class="nav-link"><i class="fa fa-shopping-cart"></i> Cart </a></li>
          <?php if (isset($_SESSION['logged_in'])){ ?>
            <li class="nav-item"><a href="<?= site_url('ControlProfile'); ?>" class="nav-link"><i class="fa fa-user"></i> <?php echo $nama; ?></a></li>
            <li class="nav-item"><a href="" class="nav-link" data-target="#modalLogout" data-toggle="modal"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
          <?php } ?>
        </ul>
      </div>
</nav>

<!--ba jing-->
<div class="container my-4" >
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
    foreach($keranjang as $k) { $no++; ?>
                  <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $k['nama_barang'] ?></td>
                    <td>Rp. <?php echo number_format($k['harga'],2,",",".") ?></td>
                    <td><?php echo $k['quantity'] ?></td>
                    <td>Rp. <?php echo number_format($k['total'],2,",",".") ?></td>
                    <?php $total += $k['total'] ?>
                    <td>Menunggu Pembayaran</td>
                    <td>
                      <a href="" data-toggle="modal" data-target="#deleteBeli<?php echo $no; ?>" class="btn btn-danger">Batal</a>
                    </td>
                  </tr>							
                <?php } ?>
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
      <th>Alamat Tujuan</th>
      <th>Status</th>  
      <th>More</th> 
    </tr>
  </thead>
								
  <?php 
  $no = 1;
  foreach($keranjang_sudah_dibayar as $ksd) {
  ?>
          <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $ksd['nama_barang'] ?></td>
            <td id="harga">Rp. <?php echo number_format($ksd['harga'],2,",",".") ?></td>
            <td id="quantity"><?php echo $ksd['quantity'] ?></td>
            <td>Rp. <?php echo number_format($ksd['total'],2,",",".") ?></td>
            <td><?php echo $ksd['alamat'] ?></td>
            <?php if($ksd['status'] == 'proses'){ ?>
              <td>Validating</td>
              <td><a href="" data-toggle="modal" data-target="#updateBeli<?php echo $no; ?>" class="btn btn-secondary">Update</a>
              <a href="" data-toggle="modal" data-target="#refundBeli<?php echo $no; ?>" class="btn btn-danger">Batal</a></td>
            <?php } else if($ksd['status'] == 'packing' || $ksd['status'] == 'delivery') { ?>
              <td>Delivering</td>
              <td><a href="" data-toggle="modal" data-target="#updateBeli<?php echo $no; ?>" class="btn btn-secondary">Update</a>
              <a href="" data-toggle="modal" data-target="#refundBeli<?php echo $no; ?>" class="btn btn-danger">Batal</a>
              <a style="font-size: 11px;" href="" data-toggle="modal" data-target="#cekResi<?php echo $no; ?>" class="btn btn-success">Cek Resi Pengiriman</a></td>
            <?php } else if($ksd['status'] == 'done'){ ?>
              <td>Done</td>
              <td><a style="font-size: 12px;" href="" data-toggle="modal" data-target="#cekResi<?php echo $no; ?>" class="btn btn-success">Cek Resi Pengiriman</a>
              </td>
            <?php }else if($ksd['status'] == 'refund'){ ?>
              <td>Refunding</td>
              <td>Harap Tunggu Proses Refund<br>2x24 Jam</td>
            <?php } ?>
          </tr>								
			   <?php $no++; } ?>
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

<?php $no = 0; foreach ($keranjang_sudah_dibayar as $ksd) { $no++?>
<div class="modal fade" id="refundBeli<?php echo $no; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header text-center">
            <h4 class="modal-title font-weight-bold">Batalkan Pembelian?</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
            <div class="modal-body mx-3">
              <div>
                <p>Pembelian yang sudah di bayar dan sudah di kirim tak dapat di refund</p>
                <p>Pembelian yang sudah di bayar dan masih dalam proses validasi akan di refund 2x24 jam</p>
                <p>beneran ga jadi beli nic?</p>
              </div>
            </div>
          <div class="modal-footer d-flex justify-content-center">
              <a class="btn btn-danger" href="<?php echo base_url('index.php/ControlCart/refundItem/').$ksd['id_keranjang']; ?>"><i class="fa fa-trash"></i> Ya, Batal</a>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
    </div>
  </div>
</div>
<?php } ?>

<?php $no = 0; foreach ($keranjang_sudah_dibayar as $ksd) { $no++?>
<div class="modal fade" id="updateBeli<?php echo $no; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="width:700px;" role="document">
        <div class="modal-content">
          <div class="modal-header text-center">
            <h4 class="modal-title font-weight-bold">Update Alamat Tujuan</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body mx-3">
            <form action="<?= site_url('ControlCart/updateItem') ?>" method="post">
            <input type="hidden" name="Myalamat" value="<?php echo $ksd['alamat']; ?>">
            <input type="hidden" name="Myid" value="<?php echo $ksd['id_keranjang']; ?>">
            <div class="form-group ">
              <label>Alamat Tujuan</label>
                <textarea class="form-control" cols="40" id="alamat" name="alamat" rows="1" placeholder="<?php echo $ksd['alamat'] ?>" value=""></textarea>
            </div>
          </div>
          <div class="modal-footer d-flex justify-content-center">
            <button type="submit" class="btn btn-info">Submit</button>
          </div>
          </form>
        </div>
  </div>
</div>
<?php } ?>

<?php $no = 0; foreach ($keranjang as $k) { $no++?>
<div class="modal fade" id="deleteBeli<?php echo $no; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header text-center">
            <h4 class="modal-title font-weight-bold">Batalkan Pembelian?</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>  
          <div class="modal-body mx-3">
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
<?php } ?>

<?php $no = 0; foreach($keranjang_sudah_dibayar as $ksd) { $no++;  if ($ksd['status'] == 'done' || $ksd['status'] == 'packing' || $ksd['status'] == 'delivery') {?>
<div class="modal fade" id="cekResi<?php echo $no; ?>" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Cek Resi</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
        </div>
      <div class="modal-body mx-3">
        <form>
          <div class="form-group row">
            <label for="barang" class="col-3 col-form-label"><b>Barang</b></label>
            <div class="col-9">
              <input type="text" class="form-control-plaintext" name="barang" placeholder="Penerima" value="<?php echo $ksd['nama_barang']; ?> (jumlah <?php echo $ksd['quantity']; ?>)" readonly>
            </div>
            <label for="alamat" class="col-3 col-form-label"><b>Alamat</b></label>
            <div class="col-9">
              <textarea class="form-control-plaintext" name="alamat" placeholder="Alamat" readonly><?php echo $ksd['alamat']; ?> </textarea>
            </div>
          </div>
          <div class="form-group row">
            <label for="no_resi" class="col-3 col-form-label"><b>No. Resi</b></label>
            <div class="col-9">
              <input type="text" class="form-control" name="no_resi" placeholder="<?php if($ksd['resi'] == '') { echo 'Resi belum diisi';} ?>" value="<?php echo $ksd['resi']; ?>" readonly>
            </div>
          </div>
          <div class="form-group row">
            <label for="status" class="col-3 col-form-label"><b>Status</b></label>
            <div class="col-9">
              <?php $status = '';
              if($ksd['status'] == 'delivery' || $ksd['status'] == 'packing') {
                $status = 'Delivering';
              } else if($ksd['status'] == 'done') {
                $status = 'Done';
              } ?>
              <input type="text" class="form-control-plaintext" name="status" placeholder="Penerima" value="<?php echo $status; ?>" readonly>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div></div>
  
<?php } }?>

<div class="modal fade" id="modalTata" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header text-center">
            <h4 class="modal-title font-weight-bold">Tata Cara Pembayaran</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>       
          <div class="modal-body mx-1">
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
          <div class="modal-body mx-3">
            <?php echo form_open_multipart('ControlCart/upload_bukti/');?>
              <input type="hidden" name="id_user" value="<?php echo $id_user; ?>">
            <div class="col-md-10 col-sm-9 col-xs-12">
              <table class="table table-hover" style="position:relative;left:-5%">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Nama Barang</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th>Total</th>
                    <th>Pilih</th>
                  </tr>
                </thead>
                <tbody>
                <?php $no = 1; foreach ($keranjang as $k) { ?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $k['nama_barang']; ?></td>
                    <td><?php echo $k['quantity']; ?></td>
                    <td><?php echo $k['harga']; ?></td>
                    <td id="<?php echo 'T'.$k['id_keranjang']; ?>"><?php echo $k['total']; ?></td>
                    <td>
                      <input type="checkbox" class="chckbox" name="checkboxBayar[]" onclick="addItem(this)" required value="<?php echo $k['id_keranjang']; ?>">
                    </td>
                  </tr>
                <?php } ?>
                </tbody>
              </table>
              <th>Total Harga<span style="opacity:0;"></span><p id="total_harga">Rp. 0</p></th>
              <div class="form-group ">
              <label class="control-label " for="alamat">
              Alamat Tujuan<br>(Free Ongkir Seluruh Indonesia!)
              </label>
              <textarea class="form-control" cols="40" id="alamat" name="alamat" rows="1" required=""></textarea>
            </div>
              <label for="upload_foto">Bukti Transfer</label>
              <input type="file" id="upload_foto" class="form-control" name="bukti" required="">
            </div>
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
