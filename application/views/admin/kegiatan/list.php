<!DOCTYPE html>
<html lang="en">

<div class='container-fluid' id="page-wrapper">
<br/>

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<!-- DataTables -->
				<div class="panel-group">
				<div class='panel panel-info'>
				<div class='panel-heading'>
						<a href="<?php echo site_url('admin/kegiatan/tambah') ?>"><i class="glyphicon glyphicon-plus"></i> Add New</a>
				</div>
				<div class='panel-body'>
						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Judul</th>
										<th>Foto</th>
										<th>Keterangan</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($kegiatan as $product): ?>
									<tr>
										<td width="150">
											<?php echo $product->judul ?>
										</td>
										<td>
											<img src="<?php echo base_url('upload/kegiatan/'.$product->foto) ?>" width="64" />
										</td>
										<td>
											<?php echo substr($product->keterangan, 0, 120) ?>...</td>
										<td width="250">
											<a href="<?php echo site_url('admin/kegiatan/edit/'.$product->id_kegiatan) ?>"
											 class="btn btn-small"><i class="glyphicon glyphicon-edit"></i> Edit</a>
											<a onclick="deleteConfirm('<?php echo site_url('admin/kegiatan/delete/'.$product->id_kegiatan) ?>')"
											 href="#!" class="btn btn-small text-danger"><i class="glyphicon glyphicon-trash"></i> Hapus</a>
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

			<!-- Sticky Footer -->

</html>
