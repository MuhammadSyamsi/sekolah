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
						<a href="<?php echo site_url('admin/kegiatan/') ?>"><i class="glyphicon glyphicon-arrow-left"></i> Kembali</a>
					</div>
					<div class="panel-body">

						<form action="<?php base_url('admin/kegiatan/edit') ?>" method="post" enctype="multipart/form-data">

							<input type="hidden" name="id" value="<?php echo $kegiatan->id_kegiatan?>" />

								<label>NIP</label>
							<input type="text" class='form-control' name="nip" value="<?php echo $kegiatan->nip?>" />
							
							<div class="form-group">
								<label for="name">Judul*</label>
								<input class="form-control1 <?php echo form_error('name') ? 'is-invalid':'' ?>"
								 type="text" name="judul" placeholder="Judul Kegiatan..." value="<?php echo $kegiatan->judul ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('judul') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Tanggal*</label>
								<input class="form-control1 <?php echo form_error('tanggal') ? 'is-invalid':'' ?>"
								 type="date" name="tanggal" placeholder="Tanggal Kegiatan..." value="<?php echo $kegiatan->tanggal ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('tanggal') ?>
								</div>
							</div>
							
							<div class="form-group">
								<label for="name">Foto</label>
								<input class="form-control-file <?php echo form_error('foto') ? 'is-invalid':'' ?>"
								 type="file" name="foto" />
								<input type="hidden" name="old_image" value="<?php echo $kegiatan->foto ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('foto') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Keterangan</label>
								<textarea class="form-control1"
								 name="keterangan" placeholder="Keterangan Kegiatan..."><?php echo $kegiatan->keterangan ?></textarea>
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>


				</div>
			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->
</body>

</html>
