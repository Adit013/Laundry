<html>
	<head>
		<title>Home</title>
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/sb-admin-2.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/style.css">
	</head>
	<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-navbar ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Cek Laundry</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

	<div class="container">
		<div class="card">
			<div class="card-header">
				Home Page
			</div>
			<div class="card-body">
				<center><h1>Selamat Datang <?php echo $this->session->userdata('name'); ?></h1></center>
				<hr/>
				<a href="<?php echo base_url(); ?>index.php/login/logout" class="btn btn-primary btn-lg btn-block">Logout</a>
			</div>
		</div>
	</div>		
	</body>
</html>