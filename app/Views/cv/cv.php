<!DOCTYPE html>
<html lang="en">
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />

    <!--aos-->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!--akhir aos-->

    <title>Fadil Ai</title>
  </head>

  <body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#">CV-Me</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
         aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cv/add">Add</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cv/update">View</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cv/logout">LogOut</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!--Akhir Navbar-->
    
    <!--jumbotrom-->
    <section class="jumbotron text-center">
      <img src="/assets/IMG_20220119_090343.jpg" alt="Fadil Ainuddin" width="200" class="rounded-circle img-thumbnail">
      <h1 class="display-4">Fadil Ainuddin</h1>
      <p class="lead">Mahasiswa</p>
      <p>"Saya adalah seorang Mahasiswa dari Politeknik Negeri Lampung Jurusan Ekonomi dan Bisnis dari Prodi Manajemen Informatika angkatan 2020. 
        Saat ini saya sedang mendalami dunia IT tentang Web Developer."</p>
    </section>
    <!--Akhir jumbotrom-->

    <!--Biodata-->
        <section id="biodata">
            <div class="row">
              <div class="col text-center">
                <h3>BIODATA</h3>
              </div>
             <div class="table-responsive">
            <table class="table table-bordered border-dark table-middle">
              <tbody> 
                <tr>
                  <th>Nama</th>
                  <th>:</th>
                  <th><?=$data['nama']?></th>
                </tr>
                <tr>
                  <th>Tempat,Tanggal Lahir</th>
                  <th>:</th>
                  <th><?=$data['tempat_lahir']?>, <?=$data['tanggal_lahir']?></th>
                </tr>
                <tr>
                  <th>Alamat</th>
                  <th>:</th>
                  <th><?=$data['alamat']?> </th>
                </tr>
                <tr>
                  <th>Status</th>
                  <th>:</th>
                  <th><?=$data['status']?></th>
                </tr>
                <tr>
                  <th>Agama</th>
                  <th>:</th>
                  <th><?=$data['agama']?></th>
                </tr>
                <tr>
                  <th>Hobi</th>
                  <th>:</th>
                  <th><?=$data['hobi']?></th>
                </tr>
                <tr>
                  <th>Contact</th>
                  <th>:</th>
                  <th><?=$data['contact']?></th>
                </tr>
              </tbody>
              </table>
            </div>
            </div>
        </section>

        <!--Pengalaman-->
        <section class="pengalaman">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e2edff" fill-opacity="1" d="M0,192L40,213.3C80,235,160,277,240,250.7C320,224,400,128,480,90.7C560,53,640,75,720,101.3C800,128,880,160,960,149.3C1040,139,1120,85,1200,106.7C1280,128,1360,224,1400,272L1440,320L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path></svg>
          <div class="container">
            <div class="row justify-content-md-center">
              <div class="col text-center">
                <h5>RIWAYAT PENDIDIKAN</h5>
                <table class="table table-bordered">
                <tbody>
                    <tr>
                      <th>2006-2013</th>
                      <td>:</td>
                      <td>SD Negeri 3 Labuhan Ratu 1</td>
                    </tr>
                    <tr>
                      <th>2013-2017</th>
                      <td>:</td>
                      <td>SMP Muhammadiyah 1 Way Jepara</td>
                    </tr>
                    <tr>
                      <th>2017-2019</th>
                      <td>:</td>
                      <td>SMA Muhammadiyah 1 Way Jepara</td>
                    </tr>
                    <tr>
                      <th>2020-Sekarang</th>
                      <td>:</td>
                      <td>Politeknik Negeri Lampung</td>
                    </tr>
                </table>
              </div>
              <div class="col text-center">
              <h5>PENGALAMAN ORGANISASI</h5>
              <table class="table table-bordered">
                <tbody>
                    <tr>
                      <th>2020-2022</th>
                      <td>:</td>
                      <td>UKM English Club (Anggota Screabble)</td>
                    </tr>
                    <tr>
                      <th>2020-Sekarang</th>
                      <td>:</td>
                      <td>UKM Albanna (Anggota Media Center)</td>
                    </tr>
                    <tr>
                      <th>2021-Sekarang</th>
                      <td>:</td>
                      <td>Pemuda Muhammadiyah (Relawan Bencana)</td>
                    </tr>
                    <tr>
                      <th>2021-Sekarang</th>
                      <td>:</td>
                      <td>Agent Of Perebahan</td>
                    </tr>
                </table>
              </div>
            </div>
          </div>
          </section>
        <!--Akhir Pengalaman-->

        <!-- Sekill -->
        <section id="skill">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e2edff" fill-opacity="1" d="M0,32L48,32C96,32,192,32,288,64C384,96,480,160,576,197.3C672,235,768,245,864,240C960,235,1056,213,1152,170.7C1248,128,1344,64,1392,32L1440,0L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
        <div class="container">
            <div class="row justify-content-md-center">
            <div class="col-md-auto text-center">
                <h2>SKILL</h2>
                <table class="table table-bordered">
                <tbody>
                    <tr>
                      <th>HTML & CSS</th>
                    </tr>
                    <tr>
                      <th>Desain Grafis</th>
                    </tr>
                    <tr>
                      <th>Microsoft Office</th>
                    </tr>
                </table>
            </div>   
        </div>
        </div>
        </section>
        <!-- Sekill -->


        <!--Footer-->
        <footer class="bg-dark text-white text-center">
          <p> Created with By Fadil Ainuddin <a href="https://www.instagram.com/fadil.ain?r=nametag" class="text-white fw-bold">Fadil Ai</a></p>
        </footer>
        <!--Akhir Footer-->
  </body>
</html>