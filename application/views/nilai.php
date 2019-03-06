<div class='container-fluid' id="page-wrapper">
<form action="<?php echo base_url('home/cari_nilai') ?>" class="form" method='post'>
<div class="form-group">
    <input type="text" class="form-control" placeholder="Masukkan nama siswa..." name='cari' />
</div>
<button type="submit" class="">Cari</button>
</form>
<hr>
<b>Atau cari di tabel berikut :</b><hr>
				<div class="panel-group">
						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Nama</th>
										<th>Kelas</th>
										<th>Nilai</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($nilai as $nilai): ?>
									<tr>
										<td width="150">
											<?php echo $nilai->nama ?>
										</td>
										<td width="150">
											<?php echo $nilai->kelas, ' ';
											echo $nilai->jurusan ?>
										</td>
										<td width="150">
											<?php echo $nilai->nilai ?>
										</td>
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>
					</div>
				</div>

<div style='margin-bottom:60px;'></div>
</div>