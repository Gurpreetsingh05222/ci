<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Document</title>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css">
	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<?php $this->load->view('users/login_view'); ?>
			</div>
			<div class="col-md-8">
				<?php $this->load->view($main_view); ?>	
			</div>
		</div>
	</div>
</body>
</html>