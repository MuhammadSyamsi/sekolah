<!DOCTYPE html>
<html lang="en">

<div class='container-fluid' id="page-wrapper">
<br/>

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<!-- DataTables -->
				<div class="panel-group">
				<div class='panel panel-info'>
				<div class='panel-heading'>
						<a href="<?php echo site_url('admin/siswa/tambah') ?>"><i class="glyphicon glyphicon-plus"></i> Add New</a>
				</div>
				<div class='panel-body'>
						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>NISN</th>
										<th>Nama</th>
										<th>Foto</th>
										<th>Asal Sekolah</th>
                                        <th>Alamat</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($siswa as $siswa): ?>
									<tr>
										<td width="150">
											<?php echo $siswa->NISN ?>
										</td>
										<td width="250">
											<?php echo $siswa->nama ?>
										</td>
										<td>
											<img src="<?php echo base_url('upload/siswa/'.$siswa->foto) ?>" width="64" />
										</td>
                                        <td width="250">
											<?php echo $siswa->asal_sekolah ?>
										</td>
										<td>
											<?php echo substr($siswa->alamat, 0, 120) ?>...</td>
										<td width="250">
											<a href="<?php echo site_url('admin/siswa/edit/'.$siswa->id_siswa) ?>"
											 class="btn btn-small"><i class="glyphicon glyphicon-edit"></i> Edit</a>
											<a onclick="deleteConfirm('<?php echo site_url('admin/siswa/delete/'.$siswa->id_siswa) ?>')"
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
