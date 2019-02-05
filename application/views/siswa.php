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


   <body style="background-color:#E6E6E6;">
   <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header" style="height:60px;">
      <a class="navbar-brand navlogo" href="<?php echo base_url('') ?>"><img width="110 px" style=" margin-top:-7px;" src="<?php echo base_url('asset/img/logo.png') ?>"/></a>
    </div>
<div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse navbar-right" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class=""><a href="<?php echo base_url('') ?>">Beranda</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="">Artikel<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="artikel#a1">Tentang SMARIFDA</a></li>
            <li><a href="artikel#b2">Tentang LPK SMARIFDA</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="">Aktifitas<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="kegiatan">Kegiatan</a></li>
            <li><a target='_blank' href="https://www.youtube.com/channel/UCqAbTGRvLDglgM9Ux2zeEEw">Tonton Video Gratis</a></li>
            <li><a href="komik">Baca Komik Gratis</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="">Informasi<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="Informasi">Struktur Kepengurusan</a></li>
            <li><a href="Informasi">Event</a></li>
            <li><a href="Informasi">Info Lomba</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="">Kelas<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="Materi">Materi</a></li>
            <li><a href="Tugas">Tugas</a></li>
            <li><a href="Evaluasi">Evaluasi (test)</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav">
        <li><a href="<?php echo base_url('home/keluar'); ?>"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
      </ul>
    </div>
</nav>
  </div>
</nav>
   </body>
</html>