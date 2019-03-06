<!DOCTYPE html>
<html lang="en">

<div class='container-fluid' id="page-wrapper">
<br/>

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<!-- DataTables -->
				<div class="panel-group">
				<div class='panel panel-info'>
				<div class='panel-heading'>
						<a href="<?php echo site_url('admin/nilai/tambah') ?>"><i class="glyphicon glyphicon-plus"></i> Add New</a>
				</div>
				<div class='panel-body'>
						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Nama</th>
										<th>Kelas</th>
										<th>Kompetensi Dasar</th>
										<th>Nilai</th>
										<th>Keterangan</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($nilai as $nilai): ?>
									<tr>
										<td width="150">
											<?php echo $nilai->nama ?>
										</td>
										<td width="150">
											<?php echo $nilai->kelas, ' ';
											echo $nilai->jurusan ?>
										</td>
										<td width="150">
											<?php echo $nilai->kd ?>
										</td>
										<td width="150">
											<?php echo $nilai->nilai ?>
										</td>
										<td width="150">
											<?php echo $nilai->keterangan ?>
										</td>
										<td width="250">
											<a href="<?php echo site_url('admin/nilai/edit/'.$nilai->id_nilai) ?>"
											 class="btn btn-small"><i class="glyphicon glyphicon-edit"></i> Edit</a>
											<a onclick="deleteConfirm('<?php echo site_url('admin/nilai/delete/'.$nilai->id_nilai) ?>')"
											 href="#!" class="btn btn-small text-danger"><i class="glyphicon glyphicon-trash"></i> Hapus</a>
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