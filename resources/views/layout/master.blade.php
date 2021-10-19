<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title> @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style1.css">
</head>
<body>
       <div class="bg-image" style="height:50vh; background-image:url(img/20211007_210116.png); background-size:cover;">
        <nav class="navbar navbar-expand-lg navbar-light" style="position: relative">
            <div class="container-fluid">
              <a class="navbar-brand" href="/welcome"><img src="img/Tropisianimal.png" alt="" style="margin-left: 100%; width:150%;"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              </button>
              <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav fw-bolder" style="margin-right: 10%; gap:40px;">
                  <a class="nav-link text-light" aria-current="page" href="/">HOME</a>
                  <a class="nav-link text-light" href="/tentang">TENTANG</a>
                  <a class="nav-link text-light" href="/berita">BERITA</a>
                  <a class="nav-link text-light" href="/galery">GALERI</a>
                  <a class="nav-link text-light" href="/kontak">KONTAK</a>
                </div>
              </div>
            </div>
          </nav>
          <h2 class="text-light fw-bold" style="margin-left: 12%; margin-top:5%">@yield('judul_halaman')</h2>
            </div>
        </div>

             

     @yield('konten')
        <br/>
        <br/>
        <div class="b-example-divider bg-dark" style="height: 60vh">

            <div class="container" style="padding-top:3%">
              <footer class="row row-cols-5 py-5 my-5">
                <div class="col">
                  <h2 class="text-light">Tropisiaminal</h2>
                  </a>
                  <p class="text-muted fw-light" style="width: 160%;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut blanditiis in pariatur voluptatibus ab? Ullam accusamus temporibus nulla culpa quasi, ex voluptatem.</p>
                  <img src="img/001-facebook@2x.png" alt="fb" width="30">
                  <img src="img/002-twitter@2x.png" alt="tw" width="30">
            
                </div>
            
                <div class="col">
            
                </div>
            
                <div class="col">
                  <h5 class="text-light fw-bold">User Link</h5>
                  <ul class="nav flex-column">
                    <li class="nav-item mb-2 active"><a href="#" class="nav-link p-0 text-light">Blog</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Hewan</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Galeri</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Testimonial</a></li>
                  </ul>
                </div>
            
                <div class="col">
                  <h5 class="text-light fw-bold">Privacy</h5>
                  <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Karir</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Tentang Kami</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Kontak Kami</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Servis</a></li>
                  </ul>
                </div>
            
                <div class="col">
                  <h5 class="text-light fw-bold">Contact Info</h5>
                  <ul class="nav flex-column lh-lg" style="width:150%">
                    <li class="nav-item mb-3 text-light"><i class="bi bi-envelope"></i>     tropisianimal@gmail.com</a></li>
                    <li class="nav-item mb-2 text-light"><i class="bi bi-telephone"></i>    +62 812 3456 7890</a></li>
                    <li class="nav-item mb-3 text-light"><i class="bi bi-geo-alt"></i>    Kota Bandung, Jawa barat</a></li>
                  </ul>
                </div>
              </footer>
            </div>
            </div>
        