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
									<?php foreach ($kegiatan as $baris): ?>
									<tr>
										<td width="250">
											<img src="<?php echo base_url('upload/kegiatan/'.$baris->foto) ?>" class='pull-left col-xs-3' />
										    <div class='col-xs-6'>
                                                <h4><?php echo $baris->judul ?></h4>
                                                <h6><?php echo $baris->tanggal ?></h6>
                                                <p><?php echo substr($baris->keterangan, 0, 120) ?></p>
                                            </div>
										</td>
										<td width="250">
											<a href="<?php echo base_url('admin/edit_kegiatan/'.$baris->id_kegiatan) ?>"
											 class="btn btn-small"><i class="glyphicon glyphicon-edit"></i> Edit</a>
											<a onclick="deleteConfirm('<?php echo site_url('admin/hapus_kegiatan/'.$baris->id_kegiatan) ?>')"
											 href="#!" class="btn btn-small text-danger"><i class="glyphicon glyphicon-trash"></i> hapus</a>
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
