<div id="page-wrapper">
 <div class="graphs">
	<h4>Tugas, <b><?php echo $this->session->userdata('ses_nama');?></b></h4>

<div class="mailbox-content">
<table class="table">
                    <thead>
                    <tr>
						<th>Dari</th>
						<th>Soal</th>
						<th>Batas Pengumpulan</th>
						<th>Kerjakan</th>
					<tr>
                    </thead>
                    <tbody>
						<?php foreach ($tugas as $baris): ?>
                        <tr>
										<td width="150">
											<?php echo $baris->nip ?>
										</td>
										<td width="550">
											<?php echo $baris->soal ?>
										</td>
										<td width="150">
											<?php echo '20-12-2030' ?>
										</td>
										<td width="250">
											<a href="<?php echo base_url('tugas/kerjakan_tugas/'.$baris->id_tugas) ?>"
											 class="btn btn-small"><i class="glyphicon glyphicon-edit"></i></a>
										</td>
									</tr>
						<?php endforeach; ?>
                    </tbody>
                </table>
                </div>

    </div>
		<div class="copy">
            <p>Copyright &copy; 2018 ~ All Rights Reserved | by <a href="<?php echo base_url('') ?>">LPK MM SMARIFDA</a> </p>
	    </div>
		</div>
  </div>
</div>