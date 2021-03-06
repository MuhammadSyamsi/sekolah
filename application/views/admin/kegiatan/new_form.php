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
						<a href="<?php echo base_url('admin/kegiatan') ?>"><i class="glyphicon glyphicon-arrow-left"></i> Back</a>
					</div>
					<div class="panel-body">
					<div class="card-footer small text-muted">
						* Wajib di isi
					</div>
						<form action="<?php base_url('admin/tambah_kegiatan') ?>" method="post" enctype="multipart/form-data" >
							<input type="hidden" name='nip' value='<?php echo $this->session->userdata('ses_id') ?>'>

							<div class="form-group">
								<label for="name">Judul*</label>
								<input class="form-control1 <?php echo form_error('judul') ? 'is-invalid':'' ?>"
								 type="text" name="judul" placeholder="Judul Kegiatan..." />
								<div class="invalid-feedback">
									<?php echo form_error('judul') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Tanggal</label>
								<input class="form-control1 <?php echo form_error('tanggal') ? 'is-invalid':'' ?>"
								 type="date" name="tanggal" placeholder="Tanggal Kegiatan..." />
								<div class="invalid-feedback">
									<?php echo form_error('tanggal') ?>
								</div>
							</div>
							
							<div class="form-group">
								<label for="name">Foto*</label>
								<input class="form-control-file <?php echo form_error('foto') ? 'is-invalid':'' ?>"
								 type="file" name="foto" />
								<div class="invalid-feedback">
									<?php echo form_error('foto') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Keterangan</label>
								<textarea class="form-control1" name="keterangan" placeholder="Keterangan Kegiatan..."></textarea>
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Tambah" />
						</form>

					</div>
					
				</div>
				</div>
				<!-- /.container-fluid -->

</body>

</html>
