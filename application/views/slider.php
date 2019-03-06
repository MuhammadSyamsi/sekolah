<div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-bottom:20px; margin-top:70px;">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="<?php echo base_url('asset/img/img1.jpeg') ?>" class='img-responsive' alt="img1">
      <div class="carousel-caption">
        <h3>Wisuda</h3>
        <p>Lapangan Futsal Ma'arif NU Pandaan</p>
      </div>
    </div>

    <div class="item">
      <img src="<?php echo base_url('asset/img/img2.jpeg') ?>" class='img-resposive' alt="img2">
      <div class="carousel-caption">
        <h3>Rame - Rame</h3>
        <p>Lapangan Futsa Ma'arif NU Pandaan</p>
      </div>
    </div>

    <div class="item">
      <img src="<?php echo base_url('asset/img/struktur.jpg') ?>" class='img-responsive' alt="Struktur">
      <div class="carousel-caption">
        <h3>Struktur</h3>
        <p>uk 700x400</p>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>