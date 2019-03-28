<div class='container-fluid' id="page-wrapper">
<br/>
<h2 class='text-center'>_Rapot Sementara_</h2>
<hr>
<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

<?php foreach ($nama as $kolom):
?><a href='<?php echo base_url('admin/rapot_akhir/' . $kolom->NISN) ?>' class='btn block btn-info pull-right'>
<i class="fa fa-file"></i> Rapot Akhir
</a>
<?php
    echo '<h3>' . $kolom->nama . '</h3>';
    echo  $kolom->NISN . '<hr>';
    endforeach; ?>

<table class="table table-bordered">
<thead>
    <th>Materi</th>
    <th>Nilai</th>
    <th>keterangan</th>
</thead>
<tbody>
<?php
    foreach ($rapot as $baris):
    echo '<tr><td>'. $baris->materi . '</td>';
    echo '<td>'. $baris->nilai . '</td>';
    echo '<td>'. $baris->keterangan . '</td></tr>';
    endforeach; ?>

<?php
    foreach ($ujian as $baris):
    echo '<tr><td><b>Nilai UTS</b></td>';
    echo '<td>' . $baris->uts . '</td></tr>';
    $nilai_uts = $baris->uts;
    endforeach;
?>
    <tr>
        <td>Nilai Akhir</td>
        
        <?php foreach ($rata as $out):
            $nilai_tugas = $out->nilai;
        endforeach; ?>
        <td>
            <?php $nilai_akhir = ($nilai_uts+$nilai_tugas)/2;
            // string number_format ( float $number [, int $decimals = 0 ] );  
            $nilai_format = number_format($nilai_akhir, 2);
            echo $nilai_format;
             ?>
        </td>
    </tr>
    <tr>
        <td>Predikat</td>
        <td><?php
            if ($nilai_format >= 90 ){
                echo 'A';
            }else if($nilai_format >= 80 ){
                echo 'B';
            }else if($nilai_format >= 70){
                echo 'C';
            }else if($nilai_format >=60){
                echo 'D';
            }else{
                echo 'E';
            }
        ?>
        </td>
    </tr>
</tbody>
</table>
<?php foreach ($nama as $kolom):?>
<a href='<?php echo base_url('admin/update_rapot') ?>' class='btn block btn-info'><i class="fa fa-arrow-left"></i> Kembali</a>
<a href='<?php echo base_url('admin/cetak/'.$kolom->NISN) ?>' class='btn block btn-info pull-right'><i class="fa fa-print"></i> Cetak</a>
<?php endforeach; ?>

</div>