<!DOCTYPE html>
<html lang = "en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="<?php echo base_url('asset/css/bootstrap.min.css') ?>">
      <link rel="stylesheet" href="<?php echo base_url('asset/css/bootstrap.css') ?>">
      <link rel="stylesheet" href="<?php echo base_url('asset/css/footer.css') ?>">
      <link rel="stylesheet" href="<?php echo base_url('asset/css/header.css') ?>">
      <link rel="stylesheet" href="<?php echo base_url('asset/css/product.css') ?>">
      <link rel="stylesheet" href="<?php echo base_url('asset/css/style.css') ?>">
      <script src="<?php echo base_url('asset/js/bootstrap.min.js') ?>"></script>
      <script src="<?php echo base_url('asset/js/jquery.min.js') ?>"></script>
      <script src="<?php echo base_url('asset/js/transition.js') ?>"></script>
      <script src="<?php echo base_url('asset/js/dropdown.js') ?>"></script>
      <script src="<?php echo base_url('asset/js/collapse.js') ?>"></script>
      <script src="<?php echo base_url('asset/js/modal.js') ?>"></script>
      <link rel="stylesheet" type="text/css" href="<?php echo base_url ('css/default.css') ?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/component.css') ?>" />
		<script src="<?php echo base_url('asset/js/modernizr.custom.js') ?>"></script>


    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <title>LPK Multimedia SMARIFDA</title>
   </head>


   <body style="background-image: linear-gradient(#00AFD2, white); height:600px;">
   <nav class="navbar navbar-inverse navbar-fixed-bottom">
  <div class="container">
    <div class="nav navbar-nav navbar-left  ">
      </span><a href="" class='btn' style="background-color:white;" data-toggle="modal" data-target="#l_modal"><span class='glyphicon glyphicon-log-in'></span> login Siswa</a>
    </div>
</nav>
<div class="modal fade" id="l_modal" role="dialog">
    <div class="modal-dialog modal-md">
    
      <!-- Modal content-->
      <div class="modal-content">
       
        <div class="modal-body">
            <form class="form-horizontal" action="<?php echo base_url('home/login_siswa'); ?>" method="post">
              <div class="form-group">
                <label class="control-label col-sm-2">Nama:</label>
                <div class="col-sm-10">
                  <input class="form-control" placeholder="Masukkan nama" name="nama">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2">Password:</label>
                <div class="col-sm-10">          
                  <input type="password" class="form-control" placeholder="Masukkan password" name="pass">
                </div>
              </div>
              <div class="form-group text-center">        
                <div class="col-sm-12 bg-info">
                  <button type="submit" class="btn btn-warning"><h4><b>Masuk</b></h4></button>
                </div>
              </div>
            </form>
        </div>
        
      </div>
      
    </div>
  </div>
  </div>
</nav>
   </body>
</html>