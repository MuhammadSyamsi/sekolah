<div class='container-fluid' id="page-wrapper">
<br/>

    <?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<!-- DataTables -->
	<div class="panel-group">
	<div class='panel-heading'>
		<h3 class='text-center'>Absensimmu</h3>
	</div>
	<div class='panel-body'>
        <table class='table table-hover table-responsive'>
        <tr>
            <th>Tanggal</th>
            <th>Keterangan</th>
            <th>Lampiran</th>
        </tr>
        <?php foreach ($var_absen as $baris): ?>
            <tr>
                <td><?php echo $baris->tanggal ?></td>
                <td><?php echo $baris->alasan ?></td>
                <td><?php echo $baris->keterangan ?></td>
            </tr>
        <?php endforeach; ?>
        </table>
    </div>
</div>