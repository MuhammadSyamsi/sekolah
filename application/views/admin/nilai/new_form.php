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

						<form action="<?php base_url('admin/nilai/tambah') ?>" method="post" enctype="multipart/form-data" >
							<div class="form-group">
								<label for="name">Nama Siswa</label>
								<select class="form-control1" id="sel1" name="id_siswa" placeholder="ID Siswa...">
                                <?php foreach ($siswa as $siswa): ?>
                                <option value="<?php echo $siswa->id_siswa ?>"><?php echo $siswa->nama ?></option>
                                <?php endforeach; ?>
                                </select>
							</div>

							<div class="form-group">
								<label for="name">Kelas</label>
								<select class="form-control1" id="sel1" name="id_kelas" placeholder="ID Siswa...">
                                <?php foreach ($kelas as $kelas): ?>
                                <option value="<?php echo $kelas->id_kelas ?>">
								<?php echo $kelas->kelas; ?><?php echo ' ' . $kelas->jurusan; ?></option>
                                <?php endforeach; ?>
                                </select>
							</div>

							<div class="form-group">
								<label for="name">Kompetensi Dasar</label>
								<input class="form-control1" type="text" name="kd" placeholder="Kompetensi Dasar..." />
							</div>

							<div class="form-group">
								<label for="name">Niali</label>
								<input class="form-control1" type="number" name="nilai" placeholder="Nilai Siswa..." />
							</div>

							<div class="form-group">
								<label for="name">Keterangan</label>
								<input class="form-control1" id="sel1" name="keterangan" type="text" placeholder="contoh : Siswa mampu membuat sebuah desain grafis dengan teknik gambar 2D dan 3D" />
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

				</div>
				</div>
				<!-- /.container-fluid -->

</body>

</html>