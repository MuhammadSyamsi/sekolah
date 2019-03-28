<!DOCTYPE html>
<html lang="en">

<div class='container-fluid' id="page-wrapper">
<br/>

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>
				
				<!-- DataTables -->
				<div class="panel-group">
				<div class='panel panel-info'>
				<div class='panel-heading'>
					<a href="<?php echo base_url('admin/rapot') ?>"><i class="glyphicon glyphicon-arrow-left"></i> Kembali</a>
				</div>
				<div class='panel-body'>
					<div class='col-xs-4 col-lg-4'></div>
					<div class='col-xs-3 col-lg-2'><h5><u>UTS</u></h5></div>
					<div class='col-xs-3 col-lg-2'><h5><u>UAS</u></h5></div>
					<div class='col-xs-2 col-lg-4'><h5><u>Action</u></h5></div>
					<div class=></div>
					<!-- yang telah ditambah -->
					<?php foreach ($view_nilai as $nilai): ?>
					<div class='col-xs-4 col-lg-4'><h5><?php echo $nilai->nama ?></h5></div>
					<form action='<?php base_url('admin/update_rapot') ?>' method="post">
						<input type="hidden" name='NISN' value='<?php echo $nilai->NISN ?>'>
						<input type="hidden" name='nama' value='<?php echo $nilai->nama ?>'>
						<div class='col-xs-3 col-lg-2'><input type="text" name='uts' class='form-control' value='<?php echo $nilai->uts ?>'></div>
						<div class='col-xs-3 col-lg-2'><input type="text" name='uas' class='form-control' value='<?php echo $nilai->uas ?>'></div>
						<div class='col-xs-2 col-lg-4'>
							<button type='submit' class="btn btn-default">
							Update
							</button>
							
							<a href='<?php echo base_url('admin/lihat_rapot/'.$nilai->NISN) ?>' class='btn block btn-info'><i class="glyphicon glyphicon-file">Rapot</i></a>
						</div>
					</form>
					<div class=></div>
					<?php endforeach; ?>
				</div>
				</div>
				</div>
				</div>
				<script src="<?php echo base_url('js/hapus.js') ?>"></script>
				<?php $this->load->view("admin/_partials/modal.php") ?>
</html>	