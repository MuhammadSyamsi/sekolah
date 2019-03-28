<!DOCTYPE html>
<html lang="en">

<div class='container-fluid' id="page-wrapper">
<br/>
	<?php $this->load->view("admin/_partials/breadcrumb.php") ?>
	<!-- DataTables -->
	<div class="panel-group">
		<div class='panel panel-info'>
			<div class='panel-heading'>
					<a href="<?php echo base_url('admin/tambah_guru') ?>"><i class="glyphicon glyphicon-plus"></i> Tambah Guru</a>
			</div>
		</div>
	</div>
		
	<?php foreach ($guru as $kolom): ?>
	<div class="panel-group col-xs-12 col-sm-6 col-lg-3">
		<div class='panel panel-default'>
			<img src="<?php echo base_url('upload/guru/'.$kolom->foto) ?>" class="img-responsive" />
			<div class='panel-body'>
			<h4><?php echo substr($kolom->nama, 0, 15) ?>...</h4>
			<b>NIP. </b><?php echo $kolom->nip . '<br>';
			echo substr($kolom->level, 0, 120) ?>...<br>
			<div class='text-center'><a href="<?php echo base_url('admin/edit_guru/'.$kolom->nip) ?>" class="btn btn-small btn-info"><i class="glyphicon glyphicon-edit"></i> Edit</a>
			<a onclick="deleteConfirm('<?php echo base_url('admin/delete_guru/'.$kolom->nip) ?>')"
			href="#!" class="btn btn-small btn-danger"><i class="glyphicon glyphicon-trash"></i> Hapus</a></div>
			</div>
		</div>
	</div>
	<?php endforeach; ?>

</div>
	<script src="<?php echo base_url('js/hapus.js') ?>"></script>
	<?php $this->load->view("admin/_partials/modal.php") ?>
</html>
