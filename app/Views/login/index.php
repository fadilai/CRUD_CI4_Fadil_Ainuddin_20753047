<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />
</head>
<body>

<!--Header--->
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid justify-content-center">
    <span class="navbar-brand h1"> <marquee>Silahkan Masukkan Akun Anda</marquee></span>
  </div>
</nav>
<!--Header--->

<div class="card bg-light">
<div class="col-md-2">
      <img src="/assets/login.png" class="img-fluid rounded-start" alt="">
</div>
  <div class="card-body">
  <div class="container">
  <div class="row d-flex justify-content-center mt-5">
    <div class="col-lg-5">
      <h1>Login</h1>
      <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-danger d-flex align-items-center" role="alert">
          <?= session()->getFlashdata('pesan'); ?>
        </div>
        <?php endif;?>
  
        <p class="mb-10"></p>
        <form action="/auth/index" method="POST">
          <div class="row mb-4">
            <label for="inputEmail3" class="col-sm-4 col-form-label">Username</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputEmail3" name="username">
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-3 col-form-label">Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="inputPassword3" name="password">
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
    </div>
  </div>
</div>
  </div>
</div>

</div>
<!--Footer-->
    <footer class="navbar-light bg-light text-dark text-center">
      <p> Created by Fadil Ainuddin <a href="https://www.instagram.com/fadil.ain?r=nametag" class="text-black fw-bold">20753047</a></p>
    </footer>
<!--Akhir Footer-->

</body>
</html>