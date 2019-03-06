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

							<input type="hidden" name="id" value="<?php echo $absen->id_absen?>" />
							<input type="hidden" name="id_siswa" value="<?php echo $absen->id_siswa?>" />
							<input type="hidden" name="id_kelas" value="<?php echo $absen->id_kelas?>" />
							<input type="hidden" name="tanggal" value="<?php echo $absen->tanggal?>" />

							<div class="form-group">
								<label for="name">Keterangan</label>
								<select class="form-control1" id="sel1" name="alasan" placeholder="ID Siswa...">
                                <option value="sakit">sakit</option>
                                <option value="izin">izin</option>
                                <option value="alpha">alpha</option>
                                </select>
							</div>

							<div class="form-group">
								<label for="name">Lampiran</label>
								<input class="form-control1" id="sel1" name="keterangan" type="text" placeholder="contoh : (sakit) surat istirahat dari dokter" />
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
