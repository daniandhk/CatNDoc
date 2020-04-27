<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/css?family=Bentham|Playfair+Display|Raleway:400,500|Suranna|Trocchi" rel="stylesheet">
    

    <title>Profile</title>

    <style>
      .nav-item {
        font-size: 19px;
      }      
    </style>
  </head>
  <body>

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
            <a class="nav-link" href="#"><b>Profile</b><span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li class="nav-item"><a href="<?= site_url('ControlCart'); ?>" class="nav-link"><i class="fa fa-shopping-cart"></i></a></li>
          <?php if (isset($_SESSION['logged_in'])){ ?>
          <li class="nav-item"><a href="<?= site_url('ControlProfile'); ?>" class="nav-link"><i class="fa fa-user"></i> <?php echo $nama; ?></a></li>
          <li class="nav-item"><a href="" class="nav-link" data-target="#modalLogout" data-toggle="modal"><i class="fa fa-sign-out"></i> Logout</a></li>
          <?php }?>
        </ul>
      </div>
    </nav>
    <!-- END NAVBAR -->
      
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
              <button onclick="location.href='ControlProfile/logout'" class="btn btn-primary">Logout</button>
          </div>
        </div>
  </div>
</div>

      <!-- START USER PROFILE -->
      <div class="container">
                  <div class="row">
                      <div class="col-md-3 col-xs-12 col-sm-6 col-lg-3">
                        <div class="thumbnail photo_view_postion_b" >
                        <!-- GET FOTO-->

                          <img style="padding-top: 8%; height:100%; width:auto; max-height:280px" src="<?php if ($foto != NULL) { echo base_url("assets/img/Profile/").$foto; } else{echo base_url('assets/img/blank.png');} ?>" alt="stack photo" class="img">
                          <a href="#" class="btn btn-dark btn-rounded mt-2 mb-2 button2" style="color: white;" data-toggle="modal" data-target="#modalEditProfile">Edit Profile</a>
                        </div>
                      </div>
                      <div class="col-md-9 col-xs-12 col-sm-6 col-lg-9">
                          <div class="">
                            <h2><?php echo $nama; ?></h2>
                            <h3><?php echo $email; ?></h3>
                          </div>
                          <div style="border-top:1px border-bottom:1px solid black">
                            <a href="#" class="btn btn-dark btn-rounded mt-2 mb-2 button2" style="color: white;" data-toggle="modal" data-target="#modalContactForm">REQUEST APPOINTMENT</a>
                          </div>
                            <hr>
                          <?php 
                          $no = 0;
                          foreach($appointment as $a) {
                            if($a['email'] == $email){
                            $no++;
                           ?>
                           <h4>Appointment <?php echo $no ?></h4>
                          <div class="col-md-8">  
                            <table width="100%">
                              <tr>
                                <th>Tanggal </th>
                                <td><?php echo $a['tanggal'] ?></td>
                              </tr>
                              <tr>
                                <th>Kontak </th>
                                <td><?php echo $a['notelp'] ?></td>
                              </tr>
                              <tr>
                                <th>Nama Peliharaan </th>
                                <td><?php echo $a['nama_pet'] ?></td>
                              </tr>
                              <tr>
                                <th>Jenis Peliharaan </th>
                                <td><?php echo $a['jenis_pet'] ?></td>
                              </tr>
                              <tr>
                                <th>Keluhan </th>
                                <td><?php echo $a['keluhan'] ?></td>
                              </tr>
                              <?php if($a['status'] == "belum" || $a['status'] == "Belum"){ ?>
                                <tr>
                                  <th>Status </th>
                                  <td style="font-weight: bold; color: red;">Processing</td>
                                </tr>
                              <?php } else{ ?>
                                <tr>
                                  <th>Status </th>
                                  <td style="font-weight: bold; color: green;">Processed</td>
                                </tr>
                              <?php } ?>
                            </table>
                          </div>
                          <br>
                          <div>
                              <tr><a href="" data-toggle="modal" data-target="#detailAppointment<?php echo $no; ?>" class="btn btn-primary"><i class="fa fa-folder"></i> Update</a>
                                <a href="" data-toggle="modal" data-target="#deleteUser<?php echo $no; ?>" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a>
                              </tr>
                          </div>
                          <hr>
                          <?php } }?>
                      </div>
                  </div>
      </div>

    <?php $no = 0; foreach ($appointment as $a) { if($a['email'] == $email) { $no++?>
    <div class="modal fade" id="detailAppointment<?php echo $no; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
          <center><h2>Appointment <?php echo $no ?></h2></center>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
          </div>
          <form action="<?= site_url('ControlProfile/updateAppointment') ?>" method="post" >
          <div class="modal-body">
          <!-- isi form ini -->
            <div class="form-group">
            <input type="hidden" name="id_ap" value="<?php echo $a['id_ap']; ?>">
            <div class="form-group">
              <label for="tanggal">Tanggal</label>
              <input type="text" class="form-control" id="tanggal" placeholder="DD/MM/YYYY" name="tanggal"  value="<?php echo $a['tanggal']; ?>" disabled>
            </div>
            <div class="form-group">
              <label for="notelp">No. Telepon</label>
              <input type="notelp" class="form-control" id="notelp" placeholder="<?php echo $a['notelp']; ?>" value="<?php echo $a['notelp']; ?>" name="notelp" required>
            </div>
            <div class="form-group">
              <label for="nama_pet">Nama Peliharaan</label>
              <input type="text" id="nama_pet" class="form-control" placeholder="Nama Peliharaan" name="nama_pet" value="<?php echo $a['nama_pet']; ?>" disabled>
            </div>
            <div class="form-group">
              <label for="jenis_pet">Jenis Peliharaan</label>
              <input type="text" id="jenis_pet" class="form-control" placeholder="Jenis Peliharaan" name="jenis_pet" value="<?php echo $a['jenis_pet']; ?>" disabled>
            </div>
            <div class="form-group">
              <label for="keluhan">Keluhan</label>
              <input type="text" id="keluhan" class="form-control" placeholder="<?php echo $a['keluhan']; ?>" value="<?php echo $a['keluhan']; ?>" name="keluhan" required>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
        </form>
      </div>
    </div>
  </div>

    <div class="modal fade" id="deleteUser<?php echo $no; ?>" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Konfirmasi Delete Appointment</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
            </div>
          <div class="modal-body">
            <p>Apakah anda yakin untuk menghapus riwayat <b>Appointment <?php echo $no ?></b>?</p>
          </div>
          <div class="modal-footer">
            <a class="btn btn-danger" href="<?php echo base_url('index.php/ControlProfile/deleteAppointment/').$a['id_ap']; ?>"><i class="fa fa-trash"></i> Ya, Hapus</a>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <?php } } ?>

<div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Request Appoinment</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= site_url('ControlProfile/appointment') ?>" method="post">
      <div class="bootstrap-iso">
       <div class="container-fluid">
        <div class="row">
         <div class="col-md-12 col-sm-6 col-xs-12">
           <div class="form-group ">
            <label class="control-label" for="email">
             Email
            </label>
            <input type="hidden" name="email" value="<?php echo $email; ?>">
            <input class="form-control" id="email" placeholder="<?php echo $email; ?>" value="<?php echo $email; ?>" type="text"/ disabled>
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

<div class="modal fade" id="modalEditProfile" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">My Profile</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
    <?php echo form_open_multipart('ControlProfile/editprofile/');?>
      <input type="hidden" name="Myemail" value="<?php echo $email; ?>">
      <input type="hidden" name="Mynama" value="<?php echo $nama; ?>">
      <input type="hidden" name="Mypassword" value="<?php echo $password; ?>">
      <input type="hidden" name="id" value="<?php echo $id; ?>">
      <div class="modal-body mx-3">
          <!-- NAMA -->
          <div class="md-form mb-4">
            <input name="nama" type="text" id="orangeForm-name" class="form-control" placeholder="<?php echo $nama ?>">
          </div>

          <!-- EMAIL -->
          <div class="md-form mb-4">
            <input name="email" type="email" id="orangeForm-email" class="form-control" placeholder="<?php echo $email ?>">
          </div>

          <!-- PASSWORD -->
          <div class="md-form mb-4">
            <input name="password" type="password" id="orangeForm-pass" class="form-control" placeholder="Password">
          </div>
          <div class="form-group">
              <label for="upload_foto">Upload Foto</label>
              <input type="file" id="upload_foto" class="form-control" name="foto">
          </div>
      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button type="submit" class="btn btn-info">Submit</button>
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