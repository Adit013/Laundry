<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Halaman Login</title>
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
  <div class="form-group">
    <label for="exampleInputUsername">ID</label>
    <input type="text" class="form-control" id="exampleInputId" aria-describedby="emailHelp" placeholder="Enter username">
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
  Belum Punya akun..? Silahkan register
  </a>
</form> 
    </div>
  </div>
</div>
</div>
  


</div>

</body>
</html>