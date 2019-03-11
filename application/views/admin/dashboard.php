<div id="page-wrapper">
 <div class="graphs">
	<h4>Hai, <b><?php echo $this->session->userdata('ses_nama');?></b></h4>

	<div class="graphs">
		  <!-- <div id="chart_container"> -->
		   <!-- <div id="chart"></div>
	       <div id="slider"></div> -->
<!-- //map -->
       <!-- </div> -->
			 <div class="col_3">
        	<div class="col-md-3 widget widget1">
        		<a href="<?php echo base_url('admin/tugas') ?>"><div class="r3_counter_box">
                    <i class="pull-left fa fa-tasks icon-rounded"></i>
                    <div class="stats">
                      <h5><strong>4</strong></h5>
                      <span>Tugas Baru</span>
                    </div>
                </div></a>
        	</div>
        	<div class="col-md-3 widget widget1">
					<a href="#"><div class="r3_counter_box">
                    <i class="pull-left fa fa-picture-o user1 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong>16</strong></h5>
                      <span>Jumlah Kegiatan</span>
                    </div></a>
                </div>
        	</div>
        	<div class="col-md-3 widget widget1">
					<a href="#"><div class="r3_counter_box">
                    <i class="pull-left fa fa-users user2 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong>1012</strong></h5>
                      <span>Jumlah Siswa</span>
                    </div>
                </div></a>
        	</div>
        	<div class="col-md-3 widget">
					<a href="#"><div class="r3_counter_box">
                    <i class="pull-left fa fa-users dollar1 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong>105</strong></h5>
                      <span>Jumlah Guru dan Staf</span>
                    </div>
                </div></a>
        	 </div>
        	<div class="clearfix"> </div>
			</div>
			
			<div class="panel-group">
				<div class='panel panel-info'>
				<div class='panel-body'>
						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>No</th>
										<th>Guru</th>
										<th>Tugas</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($tugas as $baris): ?>
									<tr>
										<td width="150">
											<?php echo $baris->nomor ?>
										</td>
										<td width="150">
											<?php echo $baris->nip ?>
										</td>
										<td width="150">
											<?php echo $baris->soal ?>
										</td>
										<td width="250">
											<a href="<?php echo base_url('tugas/kerjakan_tugas/'.$baris->id_tugas) ?>"
											 class="btn btn-small"><i class="glyphicon glyphicon-edit"></i> Kerjakan</a>
										</td>
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>
					</div>
					</div>
					</div>

    </div>
		<div class="copy">
            <p>Copyright &copy; 2018 ~ All Rights Reserved | by <a href="<?php echo base_url('') ?>">LPK MM SMARIFDA</a> </p>
	    </div>
		</div>
  </div>
</div>