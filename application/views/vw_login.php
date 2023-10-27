<html>
	<head>
		<title>Form Login</title>
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/sb-admin-2.css">
	</head>
	<body>
	<div class="container">
		<div class="card">
			<div class="card-header">
				Form Login
			</div>
			<div class="card-body">
				<?php 
				if($this->session->flashdata('error') !='')
				{
					echo '<div class="alert alert-danger" role="alert">';
					echo $this->session->flashdata('error');
					echo '</div>';
				}
				?>

			<div class="container">
			<!-- Content here -->
			<br>
			<center>
			<h3>Selamat Datang</h3>
			</center>
			<br>
			<div class="container">
			<div class="row">
				<div class="col-sm">
				<img src="<?php echo base_url()?>assets/img/logo.png" </div>
				</div>
				<div class="col-sm">
				<br>
				<br>
				<br>

				<form method="post" action="<?php echo base_url(); ?>index.php/login/proses">
					<div class="form-group">
						<label for="username">Username</label> 
						<input type="text" class="form-control" name="username" id="username" placeholder="Enter Username">
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control" name="password" id="password" placeholder="Enter Password">
					</div>
					
					<button type="submit" class="btn btn-primary">Login</button>
					<hr>
		            <a href="<?php echo base_url()?>register" class="btn btn-google btn btn-danger btn-user btn-block ">
 		                 Belum Punya akun..? Silahkan register
                    </a>
				</form>
			</div>
		</div>
	</div>		
	</body>
</html>