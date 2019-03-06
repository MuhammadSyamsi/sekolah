<table>
<?php foreach($cr_absen as $kolom){ ?>
    <tr>
        <td><?php echo $kolom->nama?></td>
        <td><?php echo $kolom->tanggal?></td>
        <td><?php echo $kolom->alasan?></td>
    </tr>
<?php } ?>
</table>

<div style='margin-bottom:60px;'></div>
</div>