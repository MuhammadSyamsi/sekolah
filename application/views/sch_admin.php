<!DOCTYPE html>
<html lang="en">

<div class='container-fluid' id="page-wrapper">
<br/>

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<form class="form-group" method='post' action='<?php echo base_url('admin/cari_absensi') ?>'>
				Cari berdasarkan nama <hr>
					<div class="input-group input-icon right">
					<input class="form-control1" type="text" name='cari' placeholder="Masukkan nama siswa">
						<button type='submit' class='btn block btn-info'><i class="fa fa-search"></i></button>
					</div>
				</form>
				<form class="form-group" method='post' action='<?php echo base_url('admin/cari_absensi') ?>'>
				Atau cari berdasarkan tanngal <hr>
					<div class="input-group input-icon right">
					<input name="cari" class="form-control1" type="date">
						<button type='submit' class='btn block btn-info'><i class="fa fa-search"></i></button>
					</div>
				</form>
				<!-- DataTables -->
				<div class="panel-group">
				<div class='panel panel-info'>
				<div class='panel-heading'>
						<a href="<?php echo base_url('admin/tambah_absensi') ?>"><i class="glyphicon glyphicon-plus"></i> Absensi Baru</a>
				</div>
				<div class='panel-body'>
						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Nama</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($cr_absen as $absen): ?>
									<tr>
										<td width="150">
											<?php echo $absen->nama ?>
											<h5><?php echo $absen->tanggal ?>
											<?php echo $absen->alasan ?></h5>
											<h6><?php echo $absen->keterangan ?></h6>
										</td>
										<td width="150">
											<a href="<?php echo base_url('admin/edit_absensi/'.$absen->id_absen) ?>"
											 class="btn btn-small"><i class="glyphicon glyphicon-edit"></i> Edit</a>
											 <a onclick="deleteConfirm('<?php echo base_url('admin/hapus_absensi/'.$absen->id_absen) ?>')"
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