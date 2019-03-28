<?php foreach ($siswa as $siswa): ?>
	<div class="panel panel-default col-xs-6" style='height:300px;'>
		<div class='panel-body'>
			<?php echo '<h4>'.$siswa->nama . '</h4>' ?>
			<img src="<?php echo base_url('upload/siswa/'.$siswa->foto) ?>" width="100px" /><br>
			<?php echo $siswa->NISN . '<br/>' ?>
			<?php echo $siswa->asal_sekolah . '<br/>' ?>
			<?php echo $siswa->alamat ?>...
		</div>
	</div>
<?php endforeach; ?>