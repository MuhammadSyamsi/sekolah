<div class="panel-group">
				<div class='panel panel-info'>
				<div class='panel-body'>
						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>NISN</th>
										<th>Nama</th>
										<th>Foto</th>
										<th>Asal Sekolah</th>
                                        <th>Alamat</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($siswa as $siswa): ?>
									<tr>
										<td width="150">
											<?php echo $siswa->NISN ?>
										</td>
										<td width="250">
											<?php echo $siswa->nama ?>
										</td>
										<td>
											<img src="<?php echo base_url('upload/siswa/'.$siswa->foto) ?>" width="64" />
										</td>
                                        <td width="250">
											<?php echo $siswa->asal_sekolah ?>
										</td>
										<td>
											<?php echo substr($siswa->alamat, 0, 120) ?>...</td>
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>
					</div>
					</div>
					</div>