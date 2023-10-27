<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
    <form>
  <div class="form-outline mb-4">
	<label class="form-label" for="form3Example3">Nama</label>
	<input type="text" name="masyarakat_nama" class="form-control p_input" placeholder="Masukkan Nama " />
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <hr>
	<a href="<?php echo base_url()?>register" class="btn btn-google btn btn-danger btn-user btn-block ">
  Belum Punya akun..? Silahkan Daftar
  </a>
</form>
    </div>
  </div>
</div>
</div>
  


</div>
</body>
</html>