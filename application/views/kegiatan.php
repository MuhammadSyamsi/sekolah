<div class="container konten">
  <h2>Kegiatan Kami di LPK</h2>
  <hr/>
  <?php foreach($index as $u){ ?>
  <!-- Trigger the modal with a button -->
  <button type="button" style='border:5px solid #286090;background-color: #286090;' class="btn btn-default col-lg-3 col-xs-11 galeri" data-toggle="modal" data-target="#myModal_<?php echo $u->id ?>"> <img class='img-responsive tum' src='<?php echo $u->foto ?>'> <p><?php echo $u->judul ?></p> </button>

  <?php } ?>


  <?php foreach($index as $u){ ?>
  <!-- Modal -->
  <div class="modal fade" id="myModal_<?php echo $u->id ?>" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
       
        <div class="modal-body">
          <img src="<?php echo $u->foto ?>" alt="<?php echo $u->judul ?>" class='img-responsive'>
          <h3 style='text-align:center;'><?php echo $u->keterangan ?></h3>
        </div>
        
      </div>
      
    </div>
  </div>
  <?php } ?>

</div>