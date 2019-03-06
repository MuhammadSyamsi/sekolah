<table>
<?php foreach($cari as $kolom){ ?>
    <tr>
        <td><?php echo $kolom->nama?></td>
        <td><?php echo $kolom->kelas, ' ';
			echo $kolom->jurusan ?></td>
        <td><?php echo $kolom->nilai?></td>
    </tr>
<?php } ?>
</table>

<div style='margin-bottom:60px;'></div>
</div>