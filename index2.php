<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">

    <script src="https://kit.fontawesome.com/51bae724c9.js" crossorigin="anonymous"></script>

    <title>Teach</title>
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg py-3 fixed-top bg-white shadow-sm">
      <div class="container d-flex">
        <a class="navbar-brand" href="#">Teach</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item me-4">
              <a class="nav-link active" aria-current="page" href="#">Beranda</a>
            </li>
            <li class="nav-item me-4">
              <a class="nav-link" href="#">Promo</a>
            </li>
            <li class="nav-item dropdown me-4">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Kelas
              </a>
              <div class="dropdown-menu">
                <div class="row ms-2 mb-3">
                  <h6 class="text-secondary fw-bold">SD</h6>
                  <ul class="d-flex list-unstyled flex-wrap">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Action</a></li>
                  </ul>
                </div>
                <div class="row ms-2 mb-3">
                  <h6 class="text-secondary fw-bold">SMP</h6>
                  <ul class="d-flex list-unstyled">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Action</a></li>
                  </ul>
                </div>
                <div class="row ms-2 mb-3">
                  <h6 class="text-secondary fw-bold">SMA</h6>
                  <ul class="d-flex list-unstyled">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Action</a></li>
                  </ul>
                </div>
              </div>
            </li>
            <li class="nav-item me-4">
              <a class="nav-link" href="#">Guru</a>
            </li>
          </ul>
          <div class="ms-5">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fa-solid fa-user-large fa-xl"></i>
            </a>
            <li class="nav-item list-unstyled dropdown me-4">
              <div class="dropdown dropdown-menu">
                <div class="row ms-2 mb-3 ">
                  <ul class="d-flex list-unstyled flex-wrap">
                    <li><a class="dropdown-item" href="myProfile.html">My Profile</a></li>
                    <li><a class="dropdown-item" href="myCourses.html">My Courses</a></li>
                    <li><a class="dropdown-item" href="settings.html">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Log Out</a></li>
                  </ul>
                </div>
              </div>
            </li>
          </div>
        </div>
      </div>
    </nav>

    <!-- hero -->
    <div class="container hero pb-md-2 pt-md-3">
      <div class="row align-items-center">
        <div class="col-12 col-md-5 text-center text-md-start">
          <h1 class="fw-bold"><span class="text-biru">Belajar</span> Lebih Menarik <br> Dengan Guru <span class="text-biru">Asik</span></h1>
          <p class="text-secondary pt-3">Temukan guru yang asik dan bisa belajar <br> dimana saja sesuai keinginanmu</p>
          <a class="btn btn-primary btn-biru mt-3 mt-md-5 py-2" href="#">Cari Sekarang</a>
        </div>
        <div class="col-12 col-md-7 d-none d-md-block">
          <img src="assets/img/hero.jpg" alt="">
        </div>
      </div>
    </div>

    <!-- service -->
    <div class="bg-light-blue py-3 mb-5">
      <div class="container">
        <div class="row mb-4 text-center">
          <h4 class="fw-bold">Pelayanan Kami</h4>
          <p class="text-secondary">kelebihan guru-guru disini yang akan kamu dapatkan</p>
        </div>
        <div class="row align-items-center justify-content-center gap-3">
          <div class="col-4">
            <div class="img-benefit">
            </div>
          </div>
          <div class="col-6">
            <ul class="list-unstyled benefit">
              <li class="d-flex align-items-start gap-2 mb-4">
                <i class="fa-solid fa-circle-check fa-2xl icon-check"></i>
                <span>  
                  guru bisa menjadi teman diskusi yang seru
                </span>
              </li>
              <li class="d-flex align-items-start gap-2 mb-4">
                <i class="fa-solid fa-circle-check fa-2xl icon-check"></i>
                <span>bisa konsultasi jika mendapat kesulitan atau masalah pada pelajaran</span>
              </li>
              <li class="d-flex align-items-start gap-2 mb-4">
                <i class="fa-solid fa-circle-check fa-2xl icon-check"></i>
                <span>guru bisa kenjadi motivator untuk mengembangkan kebiasaan belajar yang baik</span>
              </li>
              <li class="d-flex align-items-start gap-2 mb-4">
                <i class="fa-solid fa-circle-check fa-2xl icon-check"></i>
                <span>belajar lebih fokus dan fleksibel memilih jam belajar</span>
              </li>
              <li class="d-flex align-items-start gap-2 mb-4">
                <i class="fa-solid fa-circle-check fa-2xl icon-check"></i>
                <span>meningkatkan kemampuan akademis dan bakat</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- top teacher -->
    <div class="container my-5 py-5">
      <h4 class="text-center fw-semibold mb-5">Guru Terpopuler</h4>
      <div class="row justify-content-center mt-4">
        <div class="col-12 col-md-3 d-flex flex-column align-items-center">
          <img class="img-top-teach" src="https://images.unsplash.com/photo-1654110455429-cf322b40a906?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80" alt="">
          <div class="title-tteach mt-2 d-flex flex-column align-items-center">
            <a class="text-decoration-none text-biru" href="#"><h6>Hasan Sulaiman</h6></a>
            <ul class="tag-mapel d-flex list-unstyled flex-wrap justify-content-center">
              <li>Biologi</li>
              <li>Fisika</li>
              <li>Kimia</li>
            </ul>
          </div>
        </div>
        <div class="col-12 col-md-3 d-flex flex-column align-items-center">
          <img class="img-top-teach" src="https://images.unsplash.com/photo-1647436595356-603cea353274?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80" alt="">
          <div class="title-tteach mt-2 d-flex flex-column align-items-center">
            <a class="text-decoration-none text-biru" href="#"><h6>Darwin Hartono</h6></a>
            <ul class="tag-mapel d-flex list-unstyled flex-wrap justify-content-center">
              <li>Ekonomi</li>
              <li>Matematika</li>
              <li>Matematika Peminatan</li>
            </ul>
          </div>
        </div>
        <div class="col-12 col-md-3 d-flex flex-column align-items-center">
          <img class="img-top-teach" src="https://images.pexels.com/photos/1520760/pexels-photo-1520760.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
          <div class="title-tteach mt-2 d-flex flex-column align-items-center">
            <a class="text-decoration-none text-biru" href="#"><h6>Farah Dwi</h6></a>
            <ul class="tag-mapel d-flex list-unstyled flex-wrap justify-content-center">
              <li>Sejarah</li>
              <li>IPS</li>
              <li>Sosiologi</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- feedback -->
    <div class="container mb-5">
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row justify-content-center">
              <div class="col-8">
                <div class="feedback pb-5">
                  <div class="netizen d-flex px-3 gap-3 align-items-center">
                    <img src="https://images.pexels.com/photos/1520760/pexels-photo-1520760.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
                    <h6 class="fw-semibold">Farah Dwi</h6>
                  </div>
                  <h4 class="text-center fw-normal mt-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio quia dignissimos numquam, adipisci a modi porro.</h4>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row justify-content-center">
              <div class="col-8">
                <div class="feedback pb-5">
                  <div class="netizen d-flex px-3 gap-3 align-items-center">
                    <img src="https://images.pexels.com/photos/1520760/pexels-photo-1520760.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
                    <h6 class="fw-semibold">Farah Dwi</h6>
                  </div>
                  <h4 class="text-center fw-normal mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi iure omnis consequatur?</h4>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row justify-content-center">
              <div class="col-8">
                <div class="feedback pb-5">
                  <div class="netizen d-flex px-3 gap-3 align-items-center">
                    <img src="https://images.pexels.com/photos/1520760/pexels-photo-1520760.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
                    <h6 class="fw-semibold">Farah Dwi</h6>
                  </div>
                  <h4 class="text-center fw-normal mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam necessitatibus voluptate quasi voluptatem! Dolores repudiandae minima asperiores. Maiores unde ratione esse officiis perspiciatis?</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- footer -->
    <footer class="bg-dark text-white">
      <div class="container py-5">
        <a class="navbar-brand" href="#">Teach</a>
        <p class="text-secondary">&copy; copyright 2022 by Semicolon Team</p>
      </div>
    </footer>

    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>