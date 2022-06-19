<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Update Data</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />
</head>
<body>

<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#">View</a>
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
              <a class="nav-link" href="add">Add</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="update">View</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout">LogOut</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<div class="container pt-5">
    <a href="<?= base_url('cv');?>" class="btn btn-success mb-6">Lihat Cv</a>
    <div class="card">
        <div class="card-header bg-dark text-white">
            <h4 class="card-title">Data Diri</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped ">
                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Alamat</th>
                            <th>Status</th>
                            <th>Agama</th>
                            <th>Hobi</th>
                            <th>Contact</th>
                            <th>Aksi</th>
                        </tr> 

                        <tr>
                            
                        <?php $no=1; {?>                            
                                <td><?= $no;?></td>
                                <td><?= $data['nama'];?></td>
                                <td><?= $data['tempat_lahir'];?></td>
                                <td><?= $data['tanggal_lahir'];?></td>
                                <td><?= $data['alamat'];?></td>
                                <td><?= $data['status'];?></td>
                                <td><?= $data['agama'];?></td>
                                <td><?= $data['hobi'];?></td>
                                <td><?= $data['contact'];?></td>   
                                <td>
                                    <a href="<?= base_url('cv/edit/'.$data['id']);?>" 
                                    class="btn btn-success">
                                    Edit</a>
                                    <a href="<?= base_url('cv/hapus/'.$data['id']);?>" 
                                    onclick="javascript:return confirm('Apakah ingin menghapus data ini ?')"
                                    class="btn btn-danger">
                                    Hapus</a>
                                </td>
                        </tr>
                        <?php $no++;}?>    
                    </thead>

                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>