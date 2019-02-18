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
						<a href="<?php echo site_url('admin/absensi/') ?>"><i class="glyphicon glyphicon-arrow-left"></i> Back</a>
					</div>
					<div class="panel-body">

						<form action="<?php base_url('admin/absensi/edit') ?>" method="post" enctype="multipart/form-data">

							<div class="form-group">
								<label for="name">Nama Siswa</label>
								<input class="form-control" type="text" name="id_siswa" placeholder="<?php echo $absen->id_siswa ?>" value="<?php echo $absen->nama ?>" disabled />
							</div>

							<div class="form-group">
								<label for="name">Kelas</label>
								<select class="form-control1" id="sel1" name="id_kelas" placeholder="ID Siswa...">
                                <?php foreach ($absen as $absen): ?>
                                <option value="<?php echo $absen->id_kelas ?>">
								<?php echo $absen->kelas; ?><?php echo ' ' . $absen->jurusan; ?></option>
                                <?php endforeach; ?>
                                </select>
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
