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
						<a href="<?php echo base_url('admin/data_guru/') ?>"><i class="glyphicon glyphicon-arrow-left"></i> Kembali</a>
					</div>
					<div class="panel-body">
					<div class="card-footer small text-muted">
						* Wajib di isi
					</div>

						<form action="<?php base_url('admin/edit_siswa') ?>" method="post" enctype="multipart/form-data">

							<input type="hidden" name="pass" value="<?php echo $guru->pass?>" />

							<div class="form-group">
								<label for="name">NIP*</label>
								<input class="form-control1 <?php echo form_error('nip') ? 'is-invalid':'' ?>"
								 type="text" name="nip" placeholder="NISN Siswa..." value="<?php echo $guru->nip ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('nip') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Nama*</label>
								<input class="form-control1 <?php echo form_error('nama') ? 'is-invalid':'' ?>"
								 type="text" name="nama" placeholder="Nama Siswa..." value="<?php echo $guru->nama ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('nama') ?>
								</div>
							</div>
							
							<div class="form-group">
								<label for="name">Foto</label>
								<input class="form-control-file <?php echo form_error('foto') ? 'is-invalid':'' ?>"
								 type="file" name="foto" />
								<input type="hidden" name="old_image" value="<?php echo $guru->foto ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('foto') ?>
								</div>
							</div>

                            <div class="form-group">
								<label for="name">Alamat</label>
								<textarea class="form-control1"
								 name="alamat" placeholder="Alamat Siswa..."><?php echo $guru->alamat ?></textarea>
							</div>

							 <div class="form-group">
								<label for="name">Level</label>
								<input type='number' class="form-control1" name="level" value='<?php echo $guru->level ?>'>
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>
				</div>
			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->
</body>

</html>
