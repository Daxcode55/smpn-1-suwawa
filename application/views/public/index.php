<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'src/output.css' ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'src/style.css' ?>">
  <title>Document</title>
</head>

<body>

  <!-- header start -->
  <header class="relative">
    <div>
      <div class="flex justify-between items-center p-3 logo">
        <img class="w-1/3 sm:w-2/5 lg:max-w-full" src="<?= base_url() . 'assets/img/logo.png' ?>" alt="">
        <div>
          <svg id="hamburgerMenu" class="text-3xl lg:hidden" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
            viewBox="0 0 24 24">
            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M3 17h18M3 12h18M3 7h18" />
          </svg>
        </div>
      </div>
      <div class="hidden">
        <div>
          <img src="<?= base_url() . 'assets/img/icons/telepon.svg' ?>" alt="logo email">
          <div>
            <p class="text-primary">Telepon</p>
            <p>085212345678</p>
          </div>
        </div>
        <div>
          <img src="<?= base_url() . 'assets/img/icons/email.svg' ?>" alt="logo email">
          <div>
            <p>Email</p>
            <p>smpn1suwawa18@gmail.com</p>
          </div>
        </div>
      </div>
    </div>

    <nav class="absolute top-0 w-3/4 h-screen bg-bgColor shadow-md pt-4 navbar">
      <ul>
        <li class="li-links"><a class="block link" href="">Beranda</a></li>
        <li id="dropdown" class="li-links">
          <div class="flex items-center justify-between link">Profil Sekolah
            <svg class="text-lg" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
              <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                d="m6 9l6 6l6-6" />
            </svg>
          </div>
          <div class="hidden pl-4 flex flex-col dropdown-link">
            <a href="https://www.w3schools.com/css/css_dropdowns.asp">Sambutan Kepala Sekolah</a>
            <a href="#">Visi dan Misi</a>
            <a href="#">Struktur Organisasi</a>
            <a href="#">Civitas Akademik</a>
          </div>
        </li>

        <li class="li-links"><a class="block link" href="">Gallery</a></li>
        <li class="li-links"><a class="block link" href="">PPDB</a></li>
        <li class="li-links"><a class="block link" href="">Kontak Kami</a></li>
      </ul>
    </nav>
  </header>
  <!-- header end -->




  <script src="<?php echo base_url() . 'src/script/script.js' ?>"></script>
</body>

</html>