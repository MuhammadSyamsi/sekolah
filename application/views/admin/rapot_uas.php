<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Rapot UTS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
    #outtable{
      padding: 20px;
      border:1px solid #e3e3e3;
      border-radius: 5px;
    }
 
    .short{
      width: 50px;
    }
 
    .normal{
      width: 150px;
    }

    .judul{
        text-align: center;
    }
 
    table{
      border-collapse: collapse;
      font-family: arial;
      color:#5E5B5C;
    }
 
    thead th{
      text-align: left;
      padding: 10px;
    }
 
    tbody td{
      border-top: 1px solid #e3e3e3;
      padding: 10px;
    }
 
    tbody tr:nth-child(even){
      background: #F6F5FA;
    }
 
    tbody tr:hover{
      background: #EAE9F5
    }
  </style>
</head>
<body style='background-image:url(../asset/img/bg.jpg);'>
<div id='outtable'>
<h2 class='judul'>SERTIFIKAT MULTIMEDIA</h2>
<hr>

<div style='margin-top:150px;'>
<?php foreach ($nama as $kolom):
    echo '<h3>' . $kolom->nama . '</h3>';
    echo  $kolom->NISN . '<hr>';
    endforeach; ?>

<table>
<thead>
<tr>
    <th>Materi</th>
    <th>Nilai</th>
    <th>keterangan</th>
</tr>
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
    echo '<tr><td><b>Nilai UAS</b></td>';
    echo '<td>' . $baris->uas . '</td></tr>';
    $nilai_uts = $baris->uts;
    $nilai_uas = $baris->uas;
    endforeach;
?>
    <tr>
        <td>Nilai Akhir</td>
        
        <?php foreach ($rata as $out):
            $nilai_tugas = $out->nilai;
        endforeach; ?>
        <td>
            <?php $nilai_akhir = ($nilai_uts+$nilai_tugas+$nilai_uas)/3;
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
</div>
</body>
</html>