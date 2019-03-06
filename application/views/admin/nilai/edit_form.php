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
						<a href="<?php echo site_url('admin/nilai/') ?>"><i class="glyphicon glyphicon-arrow-left"></i> Back</a>
					</div>
					<div class="panel-body">

						<form action="<?php base_url('admin/nilai/edit') ?>" method="post" enctype="multipart/form-data">

							<input type="hidden" name="id" value="<?php echo $nilai->id_nilai?>" />
							<input type="hidden" name="id_siswa" value="<?php echo $nilai->id_siswa?>" />
							<input type="hidden" name="id_kelas" value="<?php echo $nilai->id_kelas?>" />
                            

							<div class="form-group">
								<label for="name">Kompetensi Dasar</label>
								<input class="form-control1" id="sel1" name="kd" type="text" placeholder="Masukkan kembali kompetensi dasar yang akan dicapai siswa" />
							</div>

							<div class="form-group">
								<label for="name">Nilai</label>
								<input class="form-control1" id="sel1" name="nilai" type="number" placeholder="Masukkan nilai siswa..." />
							</div>

							<div class="form-group">
								<label for="name">Keterangan</label>
								<input class="form-control1" id="sel1" name="keterangan" type="text" placeholder="contoh : Siswa mampu membuat sebuah desain grafis dengan teknik gambar 2D dan 3D" />
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
