<!DOCTYPE html>
<html lang="en">

<div class='container-fluid' id="page-wrapper">
<br/>

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<!-- DataTables -->
				<div class="panel-group">
				<div class='panel panel-info'>
				<div class='panel-heading'>
						<a href="<?php echo base_url('admin') ?>"><i class="glyphicon glyphicon-arrow-left"></i> Kembali</a>
				</div>
				<div class='panel-body'>
						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<tbody>
									<?php foreach ($view_nilai as $nilai): ?>
									<tr>
										<td width="150">
											<?php echo $nilai->nama ?>
										</td>
										<td>
											<a href="<?php echo base_url('admin/lihat_rapot/' . $nilai->NISN) ?>" class='btn btn-info'>Rapot UTS</a>
										</td>
										<td>
											<a href="<?php echo base_url('admin/rapot_akhir/' . $nilai->NISN) ?>" class='btn btn-info'>Rapot Semester</a>
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