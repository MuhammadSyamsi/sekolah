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
						* Wajib di isi
					</div>

						<form action="<?php base_url('admin/edit_siswa') ?>" method="post" enctype="multipart/form-data">

							<input type="hidden" name="id_siswa" value="<?php echo $siswa->id_siswa?>" />

							<div class="form-group">
								<label for="name">NISN*</label>
								<input class="form-control1 <?php echo form_error('NISN') ? 'is-invalid':'' ?>"
								 type="text" name="NISN" placeholder="NISN Siswa..." value="<?php echo $siswa->NISN ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('NISN') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Nama*</label>
								<input class="form-control1 <?php echo form_error('nama') ? 'is-invalid':'' ?>"
								 type="text" name="nama" placeholder="Nama Siswa..." value="<?php echo $siswa->nama ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('nama') ?>
								</div>
							</div>
							
							<div class="form-group">
								<label for="name">Foto</label>
								<input class="form-control-file <?php echo form_error('foto') ? 'is-invalid':'' ?>"
								 type="file" name="foto" />
								<input type="hidden" name="old_image" value="<?php echo $siswa->foto ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('foto') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Asal Sekolah*</label>
								<input class="form-control1 <?php echo form_error('asal_sekolah') ? 'is-invalid':'' ?>"
								 type="text" name="asal_sekolah" placeholder="Asal Sekolah Siswa..." value="<?php echo $siswa->asal_sekolah ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('asal_sekolah') ?>
								</div>
							</div>
                            
                            <div class="form-group">
								<label for="name">Alamat</label>
								<textarea class="form-control1"
								 name="alamat" placeholder="Alamat Siswa..."><?php echo $siswa->alamat ?></textarea>
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
