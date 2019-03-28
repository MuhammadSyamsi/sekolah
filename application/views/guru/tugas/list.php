<!DOCTYPE html>
<html lang="en">

<div class='container-fluid' id="page-wrapper">
<br/>

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<!-- DataTables -->
				<div class="panel-group">
				<div class='panel panel-info'>
				<div class='panel-heading'>
						<a href="<?php echo base_url('admin/tambah_tugas') ?>"><i class="glyphicon glyphicon-plus"></i> Tugas Baru</a>
						<a href="<?php echo base_url('admin/lihat_pekerjaan') ?>" class='pull-right'><i class="glyphicon glyphicon-eye-open"></i> Lihat Pekerjaan</a>
				</div>
				<div class='panel-body'>
						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Soal</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($tugas as $baris): ?>
									<tr>
									<?php if($baris->pic_soal != NULL): ?>
										<td width='150'>
											<h5><?php echo $baris->soal ?></h5>
											<img src="<?php echo base_url('upload/tugas/'.$baris->pic_soal) ?>" class='img-responsive' width='75px'>
											Batas pengumpulan (<?php echo $baris->batas ?>)
											<h6>Untuk kelas (<?php echo $baris->kelas ?>)</h6>
										</td>
									<?php else: ?>
										<td>
											<h5><?php echo $baris->soal ?></h5>
											Batas pengumpulan (<?php echo $baris->batas ?>)
											<h6>Untuk kelas (<?php echo $baris->kelas ?>)</h6>
										</td>
									<?php endif; ?>
										<td width="150">
											<a href="<?php echo base_url('admin/edit_tugas/'.$baris->id_tugas) ?>"
											 class="btn btn-small"><i class="glyphicon glyphicon-edit"></i> Edit</a>
											 <a onclick="deleteConfirm('<?php echo base_url('admin/hapus_tugas/'.$baris->id_tugas) ?>')"
											 href="#!" class="btn btn-small text-danger"><i class="glyphicon glyphicon-trash"></i></a>
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