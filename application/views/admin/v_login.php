<!DOCTYPE HTML>
<html>
<head>
<title>Login Administrator</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="<?php echo base_url('asset/admin/css/bootstrap.min.css') ?>" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="<?php echo base_url('asset/admin/css/style.css') ?>" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url('asset/admin/css/font-awesome.css') ?>" rel="stylesheet"> 
<!-- jQuery -->
<script src="<?php echo base_url('asset/admin/js/jquery.min.js') ?>"></script>
<!----webfonts--->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->    
<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url('asset/admin/js/bootstrap.min.js') ?>"></script>
</head>
<body id="login">
  <div class="login-logo">
    
  </div>
  <h2 class="form-heading">Login</h2>
  <div class="app-cam">
	  <form action="<?php echo base_url('login'); ?>" method="post">
		<input type="text" name="username" class="text" value="Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}">
		<input type="password" name="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
		<div class="submit"><input type="submit" onclick="myFunction()" value="Login"></div>
	</form>
  <?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-danger" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
  <?php endif; ?>
  </div>
   <!-- <div class="copy_layout login">
   <p>Copyright &copy; 2018 ~ All Rights Reserved | Design by <a href="#" target="_blank">LPK MM SMARIFDA</a> </p>
   </div> -->
 
</body>
</html>