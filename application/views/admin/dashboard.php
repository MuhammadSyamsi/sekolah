<div id="page-wrapper">
 <div class="graphs">
	<h1>Dashboard Admin</h1>

	<div class="col-md-6 col_5">
		  <div id="chart_container">
		   <div id="chart"></div>
	       <div id="slider"></div>
<!-- //map -->
       </div>
       <div class="clearfix"> </div>
    </div>
    <div class="content_bottom">
     <div class="col-md-8 span_3">
		  <div class="bs-example1" data-example-id="contextual-table">
				<a class='btn btn-warning panel-body' href="<?php echo base_url('admin/kegiatan') ?>"><i>- Kegiatan -</i></a>
<hr>
      <div class='row'>
      <?php foreach($index as $u){ ?>
        <div class='col-md-4'>
          <div class='thumbnail'>
            <div class='text-center '>
              <button class='btn btn-default'><span class='glyphicon glyphicon-edit'></span></button>
              <button class='btn btn-default'><span class='glyphicon glyphicon-trash'></span></button>
              </div>
            <img src="<?php echo base_url('upload/kegiatan/'.$u->foto) ?>" alt="<?php echo $u->judul ?>" class='img-responsive'>
            <div class='caption'>
              <p class='text-center'><?php echo $u->judul ?></p>
              <hr>
              <p class='text-center'><?php echo $u->keterangan ?></p>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>


		   </div>
	   </div>
	   <div class="col-md-4 span_4">
		 <div class="col_2">
		  <div class="box_1">
		   <div class="col-md-6 col_1_of_2 span_1_of_2">
             <a class="tiles_info">
			    <div class="tiles-head red1">
			        <div class="text-center">Galeri</div>
			    </div>
			    <div class="tiles-body red">10</div>
			 </a>
		   </div>
		   <div class="col-md-6 col_1_of_2 span_1_of_2">
              <a class="tiles_info tiles_blue">
			    <div class="tiles-head tiles_blue1">
			        <div class="text-center">Tugas Siswa</div>
			    </div>
			    <div class="tiles-body blue1">30</div>
			  </a>
		   </div>
		   <div class="clearfix"> </div>
		 </div>
		 <div class="box_1">
		   <div class="col-md-6 col_1_of_2 span_1_of_2">
             <a class="tiles_info">
			    <div class="tiles-head fb1">
			        <div class="text-center">Komik</div>
			    </div>
			    <div class="tiles-body fb2">10</div>
			 </a>
		   </div>
		   <div class="col-md-6 col_1_of_2 span_1_of_2">
              <a class="tiles_info tiles_blue">
			    <div class="tiles-head tw1">
			        <div class="text-center">Siswa</div>
			    </div>
			    <div class="tiles-body tw2">30</div>
			  </a>
		   </div>
		   <div class="clearfix"> </div>
		   </div>
		  </div>
		</div>

		<div class="col-md-12 span_3">
		  <div class="bs-example1" data-example-id="contextual-table">
			<a class='btn btn-warning panel-body' href="<?php echo base_url('admin/komik') ?>"><i>- Komik -</i></a>
          <table class="table">
		      <thead>
		        <tr>
		          <th>id</th>
		          <th>Judul</th>
		          <th>Genre</th>
							<th>Gambar</th>
							<th>deskripsi</th>
		        </tr>
		      </thead>
		      <tbody>
            <?php foreach($index as $u){ ?>
		        <tr class="active">
		          <td><?php echo $u->id ?></td>
		          <td><?php echo $u->judul ?></td>
		          <td><?php echo $u->judul ?></td>
                  <td width="500px"> <div class='col-md-3' ><img class='img-responsive' src="<?php echo base_url($u->foto) ?>" /></div> </td>
                  <td><?php echo $u->keterangan ?></td>
                </tr>
            <?php } ?>
		      </tbody>
		    </table>
		   </div>
			 </div>
			 
		<div class="clearfix"> </div>
	    </div>
		<div class="copy">
            <p>Copyright &copy; 2018 ~ All Rights Reserved | Design by <a href="<?php echo base_url('') ?>" target="_blank">LPK MM SMARIFDA</a> </p>
	    </div>
		</div>
  </div>
</div>