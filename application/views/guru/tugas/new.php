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
						<a href="<?php echo site_url('admin/tugas/') ?>"><i class="glyphicon glyphicon-arrow-left"></i> Back</a>
					</div>
					<div class="panel-body">
                    <div class="card-footer small text-muted form-group">
						*) Wajib diisi
					</div>

						<form action="<?php base_url('admin/tambah_tugas') ?>" method="post" enctype="multipart/form-data" >

                        <input type="hidden" name='nip' value='<?php $this->session->userdata('ses_id'); ?>'>

							<div class="form-group">
								<label for="nomor">Nomor tugas</label>
								<input type='text' class="form-control1" name="nomor" placeholder="...">
                                </select>
							</div>

                            <div class="form-group">
								<label for="foto">Gambar</label>
								<input class="form-control-file" type="file" name="foto" />
							</div>

							<div class="form-group">
								<label for="name">Soal*</label>
                                <textarea rows="6" class="form-control1 control2 <?php echo form_error('soal') ? 'is-invalid':'' ?> " name='soal'></textarea>
                                <div class="invalid-feedback">
									<?php echo form_error('soal') ?>
								</div>
							</div>

                            <div class='form-group'>
                                <label for="tanggal">Batas pengumpulan tugas</label>
    							<input type="date" class='form-control1' name="tanggal" />
                            </div>

							<div class="form-group">
								<label for="kelas">Untuk kelas*</label>
								<select class="form-control1 <?php echo form_error('kelas') ? 'is-invalid':'' ?>" id="sel1" name="kelas">
                                <option value="X MIPA">X</option>
                                <option value="X IPS">X</option>
                                <option value="XI MIPA">XI</option>
                                <option value="XI IPS">XI</option>
                                <option value="XII MIPA">XII</option>
                                <option value="XII IPS">XII</option>
                                </select>
                                <div class="invalid-feedback">
									<?php echo form_error('kelas') ?>
								</div>
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Tambah" />
						</form>
					</div>

				</div>
				</div>
				<!-- /.container-fluid -->

</body>

</html>