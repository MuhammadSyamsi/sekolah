<!DOCTYPE html>
<html lang="en">

<div class='container-fluid' id="page-wrapper">
<br/>

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<!-- DataTables -->
				<div class="panel-group">
				<div class='panel panel-info'>
				<div class='panel-heading'>
						<a href="<?php echo site_url('admin/tambah_kegiatan') ?>"><i class="glyphicon glyphicon-plus"></i> Tambah Kegiatan</a>
				</div>
				<div class='panel-body'>
						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Kegiatan</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($kegiatan as $product): ?>
									<tr>
										<td width="250">
											<img src="<?php echo base_url('upload/kegiatan/'.$product->foto) ?>" class='pull-left col-xs-3' />
											<h4><?php echo $product->judul ?></h4>
											<h6><?php echo $product->tanggal ?></h6>
											<p><?php echo substr($product->keterangan, 0, 120) ?></p>
										</td>
										<td width="250">
											<a href="<?php echo base_url('admin/edit_kegiatan/'.$product->id_kegiatan) ?>"
											 class="btn btn-small"><i class="glyphicon glyphicon-edit"></i> Edit</a>
											<a onclick="deleteConfirm('<?php echo site_url('admin/kegiatan/delete/'.$product->id_kegiatan) ?>')"
											 href="#!" class="btn btn-small text-danger"><i class="glyphicon glyphicon-trash"></i></a>
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
