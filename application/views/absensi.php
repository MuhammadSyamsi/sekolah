<div class='container'>

<!-- form pencarian-->
<form action="<?php echo base_url('home/cari') ?>" class="form" method='post'>
<div class="form-group">
    <input type="text" class="form-control" placeholder="Masukkan nama siswa..." name='cari' />
</div>
<button type="submit" class="">Cari</button>
<hr>
<!-- konten -->
<b>Atau cari di tanggal berikut :</b><hr>
<?php foreach ($absen as $absen): ?>
<div class="form-group">
    <input type='submit' class="form-control" value='<?php echo $absen->tanggal ?>' name='cari' />
</div>
<?php endforeach; ?>
</form>

</div>

<div style='margin-bottom:60px;'></div>
</div>