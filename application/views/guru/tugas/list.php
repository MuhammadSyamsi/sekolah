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
				</div>
				<div class='panel-body'>
						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Nomor</th>
										<th>Soal</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($tugas as $baris): ?>
									<tr>
										<td width='10'>
											<?php echo $baris->nomor ?>
										</td>
										<td width="250">
											<?php echo $baris->soal ?>
										</td>
										<td width="150">
											<a href="<?php echo base_url('admin/edit_absensi/'.$baris->id_tugas) ?>"
											 class="btn btn-small"><i class="glyphicon glyphicon-edit"></i> Edit</a>
											 <a onclick="deleteConfirm('<?php echo base_url('admin/hapus_absensi/'.$baris->id_tugas) ?>')"
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