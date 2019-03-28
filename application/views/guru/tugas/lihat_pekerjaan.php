<!DOCTYPE html>
<html lang="en">

<div class='container-fluid' id="page-wrapper">
<br/>

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<!-- DataTables -->
				<div class="panel-group">
				<div class='panel panel-info'>
				<div class='panel-heading'>
						<a href="<?php echo base_url('admin/tugas') ?>"><i class="glyphicon glyphicon-arrow-left"></i> Back</a>
				</div>
				<div class='panel-body'>
						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Soal</th>
										<th>Terkumpul</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($kerjaan as $baris): ?>
									<tr>
									<td width='550'>
									<?php if($baris->pic_soal != NULL): ?>
										<h5><?php echo $baris->soal ?></h5>
										<img src="<?php echo base_url('upload/tugas/'.$baris->pic_soal) ?>" class='img-responsive' width='75px'>
										Batas pengumpulan (<?php echo $baris->batas ?>)
										<h6>Untuk kelas (<?php echo $baris->kelas ?>)</h6>
									<?php else: ?>
										<h5><?php echo $baris->soal ?></h5>
										Batas pengumpulan (<?php echo $baris->batas ?>)
										<h6>Untuk kelas (<?php echo $baris->kelas ?>)</h6>
									<?php endif; ?>
									</td>
										<td width="50">
											<h4><?php echo $baris->terkumpul ?></h4> 
											<a href="<?php echo base_url('admin/nilai_tugas/'.$baris->id_tugas) ?>"><i class="glyphicon glyphicon-file"></i> Lihat</a>
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
				<script src="<?php echo base_url('js/hapus.js') ?>"></script>
				<?php $this->load->view("admin/_partials/modal.php") ?>
</html>