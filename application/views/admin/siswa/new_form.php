<!DOCTYPE html>
<html lang="en">

<div class='container-fluid' id="page-wrapper">
<br/>

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<div class="panel-group">
				<div class='panel panel-info'>
					<div class="panel-heading">
						<a href="<?php echo base_url('admin/data_siswa/') ?>"><i class="glyphicon glyphicon-arrow-left"></i> Kembali</a>
					</div>
					<div class="panel-body">
					<div class="card-footer small text-muted">
						* wajib diisi
					</div>

						<form action="<?php base_url('admin/tambah_siswa') ?>" method="post" enctype="multipart/form-data" >
							<div class="form-group">
								<label for="name">NISN*</label>
								<input class="form-control1 <?php echo form_error('NISN') ? 'is-invalid':'' ?>"
								 type="text" name="NISN" placeholder="NISN Siswa..." />
								<div class="invalid-feedback">
									<?php echo form_error('NISN') ?>
								</div>
							</div>

                            <div class="form-group">
								<label for="name">Nama*</label>
								<input class="form-control1 <?php echo form_error('nama') ? 'is-invalid':'' ?>"
								 type="text" name="nama" placeholder="Nama Siswa..." />
								<div class="invalid-feedback">
									<?php echo form_error('nama') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Foto</label>
								<input class="form-control-file <?php echo form_error('foto') ? 'is-invalid':'' ?>"
								 type="file" name="foto" />
								<div class="invalid-feedback">
									<?php echo form_error('foto') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Asal Sekolah*</label>
								<textarea class="form-control1 <?php echo form_error('asal_sekolah') ? 'is-invalid':'' ?>"
								 name="asal_sekolah" placeholder="Asal Sekolah Siswa..."></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('asal_sekolah') ?>
								</div>
							</div>

                            <div class="form-group">
								<label for="name">Alamat</label>
								<textarea class="form-control1"
								 name="alamat" placeholder="Alamat Siswa..."></textarea>
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

				</div>
				</div>
				<!-- /.container-fluid -->

</body>

</html>
