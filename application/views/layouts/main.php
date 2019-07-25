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

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="#">Ciapp</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="<?php echo base_url();?>">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url();?>/Users/register">Register</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url();?>/Projects/">Projects</a>
				</li>
			</ul>

			<?php if($this->session->userdata('logged_in')): ?>

				<ul class="nav navbar-nav navbar-right">
					<li><a href="<?php echo base_url();?>users/logout">Logout</a></li>
				</ul>

			<?php endif; ?>

		</div>
	</nav>

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