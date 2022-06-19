<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pengisian Data</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />
</head>
<body>

<!--Navbar--->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#">Add</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
         aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="/cv">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link  active" href="add">Add</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="update">View</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="delete">LogOut</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!--Akhir Navbar-->

    <div class="container">
        <div class="row mb-3">
            <div class="col-lg-13">
            </div>
        </div>
        <form action= "/cv/simpan" method="POST">
            <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="inputEmail3" name="nama">
                </div>
            </div>
            <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">Tempat, Tanggal Lahir</label>
                <div class="col-sm-5">
                <input type="text" class="form-control" id="" name="tempat_lahir">

                <div class="row-md-3">
                <label for=""></label>
                <div class="col-sm-5">
                <input type="date" class="form-control" id="" name="tanggal_lahir">
                </div>
                </div>
                </div>
            </div>
            <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="inputEmail3" name="alamat">
                </div>
            </div>
            <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="inputEmail3" name="status">
                </div>
            </div>
            <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">Agama</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="inputEmail3" name="agama">
                </div>
            </div>
            <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">Hobi</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="inputEmail3" name="hobi">
                </div>
            </div>
            <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">Contact</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="inputEmail3" name="contact">
                </div>
            </div>
            <button type="submit" class="btn btn-dark">Tambahkan</button>
        </form>
    </div>
    </div>
</body>

</html>