<div class="container">
  <h2>Kegiatan Kami di LPK</h2>
  <hr/>

  <?php foreach($foto as $u){ ?>
        <div type="button" style='width:30%; float:left; margin:2px;' data-toggle="modal" data-target="#myModal_<?php echo $u->id_kegiatan ?>">
            <img src="<?php echo base_url('upload/kegiatan/'.$u->foto) ?>" alt="<?php echo $u->judul ?>" class='img-responsive'>
        </div>
        <?php } ?>

<div style='margin-bottom:60px;'></div>
</div>

  <?php foreach($foto as $u){ ?>
  <!-- Modal -->
  <div class="modal fade" id="myModal_<?php echo $u->id_kegiatan ?>" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
       
        <div class="modal-body">
          <img src="<?php echo base_url('upload/kegiatan/'.$u->foto) ?>" alt="<?php echo $u->judul ?>" class='img-responsive'>
          <h3 style='text-align:center;'><?php echo $u->keterangan ?></h3>
        </div>
        
      </div>
      
    </div>
  </div>
  <?php } ?>

</div>