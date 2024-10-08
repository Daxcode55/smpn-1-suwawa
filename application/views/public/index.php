<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'src/output.css' ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'src/style.css' ?>">
  <title>SMPN 1 Suwawa</title>
</head>

<body>

  <!-- header start -->
  <header class="fixed top-0 left-0 right-0 bg-bgColor lg:relative">
    <div class="lg:flex justify-between lg:items-center container-navtop">
      <div class="flex justify-between items-center p-3 lg:block logo">
        <img class="w-1/3 sm:w-2/12 lg:w-4/5" src="<?= base_url() . 'assets/img/logo.png' ?>" alt="">
        <div class="lg:hidden">
          <svg id="hamburgerMenu" class="text-3xl lg:hidden" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
            viewBox="0 0 24 24">
            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M3 17h18M3 12h18M3 7h18" />
          </svg>
        </div>
      </div>
      <div class="hidden lg:flex">
        <div class="flex items-center h-max pr-8 border-r border-primary cursor-pointer">
          <img class="w-11 mr-3" src="<?= base_url() . 'assets/img/icons/telepon.svg' ?>" alt="logo email">
          <div>
            <p class="text-primary">Telepon</p>
            <p>085212345678</p>
          </div>
        </div>
        <div class="flex items-center h-max pl-8 cursor-pointer">
          <img class="w-11 mr-3" src="<?= base_url() . 'assets/img/icons/email.svg' ?>" alt="logo email">
          <div>
            <p class="text-primary">Email</p>
            <p>smpn1suwawa18@gmail.com</p>
          </div>
        </div>
      </div>
    </div>

    <nav class="absolute top-full w-3/4 h-screen bg-bgColor shadow-md pt-4 lg:pt-0 lg:pl-24 lg:h-auto navbar">
      <ul class="lg:flex">
        <li class="li-links"><a class="block link" href="">Beranda</a></li>
        <li id="dropdown" class="lg:cursor-pointer lg:relative li-links">
          <div class="flex items-center justify-between link lg:justify-normal">Profil Sekolah
            <svg class="text-lg" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
              <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                d="m6 9l6 6l6-6" />
            </svg>
          </div>
          <div class="hidden pl-4 pb-4 flex flex-col lg:absolute lg:pl-0 lg:w-72 lg:block dropdown-link">
            <a href="#">Sambutan Kepala Sekolah</a>
            <a href="#">Visi dan Misi</a>
            <a href="#">Struktur Organisasi</a>
            <a class="borderNon" href="#">Civitas Akademik</a>
          </div>
        </li>

        <li class="li-links"><a class="block link" href="">Gallery</a></li>
        <li class="li-links"><a class="block link" href="">PPDB</a></li>
        <li class="li-links"><a class="block link" href="">Kontak Kami</a></li>
      </ul>
    </nav>
  </header>
  <!-- header end -->

  <section class="slideShow mt-16 lg:mt-0">
    <div class="container-slideshow">
      <div class="slideshow-item fade">
        <img src="<?= base_url() . 'assets/img/gambar 1.jpg' ?>" alt="gambar 1" style="width: 100%" />
      </div>

      <div class="slideshow-item fade">
        <img src="<?= base_url() . 'assets/img/gambar 2.jpg' ?>" alt="gambar 2" style="width: 100%" />
      </div>

      <div class="slideshow-item fade">
        <img src="<?= base_url() . 'assets/img/gambar 3.jpg' ?>" alt="gambar 3" style="width: 100%" />
      </div>

      <a class="prev" onclick="plusSlides(-1)"> ❮ </a>
      <a class="next" onclick="plusSlides(1)"> ❯ </a>

      <div class="rangeTime"></div>
    </div>

    <div style="text-align: center">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
    </div>
  </section>

  <script src="<?php echo base_url() . 'src/script/script.js' ?>"></script>

</body>

</html>