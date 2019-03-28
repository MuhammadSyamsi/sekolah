<div class='container-fluid' id="page-wrapper">
<br>
<?php
foreach ($propil as $kolom):
    echo '<h2 class="text-center">'. $kolom->nama . '</h2>';
?>
<hr>
    <form action="<?php echo base_url('admin/ganti_pass') ?>" method="post" class='form-group'>
        <label class='control-label'>
        Password lama
        </label>
            <div class='input-group'>
                <span class="input-group-addon">
                    <i class="fa fa-key"></i>
                </span>
                <input type="password" name="pas_lama" placeholder='password' class='form-control1'>
            </div>

        <label class='control-label'>
        Password Baru
        </label>
            <div class='input-group'>
                <span class="input-group-addon">
                    <i class="fa fa-key"></i>
                </span>
                <input type="password" name="pas_baru" placeholder='password' class='form-control1'>
            </div>

        <input type="submit" value="Ganti password" class='btn btn-danger'>
    </form>
<?php endforeach;

?>
</div>