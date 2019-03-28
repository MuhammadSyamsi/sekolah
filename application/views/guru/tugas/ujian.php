<!DOCTYPE html>
<html lang="en">

<div class='container-fluid' id="page-wrapper">
<br/>

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<!-- DataTables -->
				<div class="panel-group">
				<div class='panel panel-info'>
				<div class='panel-heading'>
					<a href="<?php echo base_url('admin/update_rapot') ?>"><i class="glyphicon glyphicon-file"></i> Data yang telah ditambahkan</a>
				</div>
				<div class='panel-body'>
						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Siswa</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<!-- yang belum ditambah -->
									<?php foreach ($siswa as $baris): ?>
									<tr>
										<td>
											<h5><?php echo $baris->nama ?></h5>
										</td>
										<td colspan='3'>
                                        <form action="<?php base_url('admin/nilai_ujian') ?>" method="post">
                                            <input type="hidden" name='NISN' value='<?php echo $baris->NISN ?>'>
                                            <input type="hidden" name='nama' value='<?php echo $baris->nama ?>'>
											<button class="btn btn-default"><i class="glyphicon glyphicon-plus"></i> Tambah Nilai Ujian</button>
                                        </form>
										</td>
									</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>
					</div>
					</div>
				</div>
				<script src="<?php echo base_url('js/hapus.js') ?>"></script>
				<?php $this->load->view("admin/_partials/modal.php") ?>
</html>