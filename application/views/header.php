<nav class="navbar navbar-default navbar-fixed-top" style="z-index:1;">
<div class="container-fluid">
    <div class="navbar-header">
      <button type="button" id="sidebarCollapse" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="<?php echo base_url() ?>">Multimedia</a>
    </div>

    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo base_url('home/siswa') ?>">Siswa</a></li>
        <li><a href="<?php echo base_url('home/kegiatan') ?>">Kegiatan</a></li>
        <li><a href="<?php echo base_url('home/absensi') ?>">Absensi</a></li>
        <li><a href="https://www.youtube.com/channel/UCqAbTGRvLDglgM9Ux2zeEEw/videos" target='_blank'>Video</a></li>
        <li><a href="<?php echo base_url('login') ?>"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
</div>
</nav>