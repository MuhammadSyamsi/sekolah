<!DOCTYPE html>
<html lang="en">

<div class='container-fluid' id="page-wrapper">
<br/>

	<?php $this->load->view("admin/_partials/breadcrumb.php") ?>
    <?php if ($this->session->flashdata('success')): ?>
		<div class="alert alert-success" role="alert">
			<?php echo $this->session->flashdata('success'); ?>
		</div>
	<?php endif; ?>

				<!-- DataTables -->
	<div class="panel-group">
		<div class='panel panel-info'>
			<div class='panel-heading'>
				<a href="<?php echo site_url('admin/lihat_pekerjaan/') ?>"><i class="glyphicon glyphicon-arrow-left"></i> Back</a>
			</div>
			<div class='panel-body'>
                <div class="media">
			        <div class="media-left">
                    <?php foreach ($soal as $row): ?> 
			            <img class="media-object" data-src="holder.js/64x64" alt="gambar 64x64" src="<?php echo base_url('upload/tugas/'.$row->pic_soal) ?>" data-holder-rendered="true" style="width: 64px; height: 64px;">
			        </div>
			        <div class="media-body">
			            <h4 class="media-heading">Soal</h4>
                            <?php echo $row->soal; ?>
                    <?php endforeach; ?>
			            <div class="media">
					        <?php foreach ($nilai as $baris): ?>
                            <?php if($baris->pic_kerja != null):?>
			                <div class="media-left">
			                    <img class="media-object" data-src="holder.js/64x64" alt="64x64" src="#" data-holder-rendered="true" style="width: 64px; height: 64px;">
			                </div>
                            <?php endif ;?>
			                <div class="media-body">
			                    <h4 class="media-heading"><?php echo $baris->nama ?></h4>
			                    <?php echo $baris->jawab ?>
			                </div>
                            <form action="<?php base_url('admin/nilai_tugas') ?>" method="post" enctype="multipart/form-data" >
                                <input type="hidden" name='id_kerja' value='<?php echo $baris->id_kerja ?>'>
                                <input type="hidden" name='id_tugas' value='<?php echo $baris->id_tugas ?>'>
                                <input type="hidden" name='jawab' value='<?php echo $baris->jawab ?>'>
                                <input type="hidden" name="old_image" value="<?php echo $baris->pic_kerja ?>" />
                                <input type="hidden" name="NISN" value="<?php echo $baris->NISN ?>" />

                                <table class='table'>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class='demolayout padding-l-5'>
                                                    <div class='demobox'>
                                						<input type="text" name="nilai" class='form-control' placeholder='Nilai' value="<?php echo $baris->nilai?>" />
                                                    </div>
                                                </div>                                            
                                            </td>
                                            <td>
                           						<input type="text" name="keterangan" class='form-control' placeholder='belum ada keterangan' value="<?php echo $baris->keterangan?>" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <button class='btn btn-default'>Update</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                </form>
                            <?php endforeach; ?>
			            </div>
			        </div>
		        </div>
	        </div>
	    </div>
    </div>
</div>
				<script src="<?php echo base_url('js/hapus.js') ?>"></script>
				<?php $this->load->view("admin/_partials/modal.php") ?>
</html>