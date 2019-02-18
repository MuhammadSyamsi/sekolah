<!DOCTYPE html>
<html lang="en">

<div class='container-fluid' id="page-wrapper">
<br/>

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<!-- DataTables -->
				<div class="panel-group">
				<div class='panel panel-info'>
				<div class='panel-heading'>
						<a href="<?php echo site_url('admin/absensi/tambah') ?>"><i class="glyphicon glyphicon-plus"></i> Add New</a>
				</div>
				<div class='panel-body'>
						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Nama</th>
										<th>Kelas</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($absen as $absen): ?>
									<tr>
										<td width="150">
											<?php echo $absen->nama ?>
										</td>
										<td width="150">
											<?php echo $absen->kelas, ' ';
											echo $absen->jurusan ?>
										</td>
										<td width="250">
											<a href="<?php echo site_url('admin/absensi/edit/'.$absen->id_siswa) ?>"
											 class="btn btn-small"><i class="glyphicon glyphicon-edit"></i> Edit</a>
											<a onclick="deleteConfirm('<?php echo site_url('admin/absensi/delete/'.$absen->id_siswa) ?>')"
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