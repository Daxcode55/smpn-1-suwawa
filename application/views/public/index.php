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

  <section class="slideShow pt-20 sm:pt-16 md:scroll-pt-0.5  lg:pt-0">
    <div class="relative container-slideshow">
      <div class="hidden slideshow-item fade">
        <img src="<?= base_url() . 'assets/img/gambar 1.jpg' ?>" alt="gambar 1" style="width: 100%" />
      </div>

      <div class="hidden slideshow-item fade">
        <img src="<?= base_url() . 'assets/img/gambar 2.jpg' ?>" alt="gambar 2" style="width: 100%" />
      </div>

      <div class="hidden slideshow-item fade">
        <img src="<?= base_url() . 'assets/img/gambar 3.jpg' ?>" alt="gambar 3" style="width: 100%" />
      </div>

      <a class="absolute top-1/2 py-2 px-4 text-5xl left-7 prev" onclick="plusSlides(-1)"> ❮ </a>
      <a class="absolute top-1/2 py-2 px-4 text-5xl right-7 next" onclick="plusSlides(1)"> ❯ </a>

      <div class="rangeTime"></div>
    </div>

    <div style="text-align: center" class="mt-3">
      <span class="h-3 w-3 mx-1 inline-block cursor-pointer lg:h-4 lg:w-4 dot" onclick="currentSlide(1)"></span>
      <span class="h-3 w-3 mx-1 inline-block cursor-pointer lg:h-4 lg:w-4 dot" onclick="currentSlide(2)"></span>
      <span class="h-3 w-3 mx-1 inline-block cursor-pointer lg:h-4 lg:w-4 dot" onclick="currentSlide(3)"></span>
    </div>
  </section>

  <section class="pt-8 lg:flex lg:px-32 lg:pt-14">
    <div class="p-3 lg:w-1/2">
      <h1 class="text-4xl font-bold font-secFont lg:text-6xl">SMP NEGERI 1<br><span class="inline-block text-primary mt-2 pb-2 border-b-2 border-primary lg:pb-6">SUWAWA</span></h1>

      <P class="mt-3 text-sm sm:w-3/4 lg:mt-6 lg:text-lg">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
        standard dummy text ever since the.</P>

      <P class="mt-3 text-sm sm:w-3/4 lg:text-lg">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has.</P>
      <button class="mt-4 bg-primary py-2 px-4 rounded-md text-bgColor cursor-pointer hover:bg-sky-700 ease-in-out duration-300">Selengkapnya</button>
    </div>

    <div class="p-3 lg:w-1/2">
      <img class="rounded-md" src="<?= base_url() . 'assets/img/smp1.jpg' ?>" alt="siswa smp">
    </div>
  </section>

  <section class="mt-16 px-4 lg:mt-32 unggulan">
      <div class="lg:flex lg:gap-14">
        <h2 class="text-4xl font-bold w-52 lg:mb-16 lg:pl-16 lg:text-6xl">Program <span class="text-primary border-b-2 border-primary pb-4 lg:border-none">Unggulan</span></h2>
        <p class="w-2/4 mt-10 mb-6 text-base text-textColor lg:text-xl lg:w-1/4">Didukung oleh guru yang kompeten pada bidangnya</p>
      </div>
      <div class="col-content">
        <div class="flex row-content-about">
          <div class="border-r-2 border-lineColor w-1/5 flex justify-center items-center relative col col-1">
            <p class="inline-block text-sm font-bold bg-primary text-bgColor py-2 px-5 rounded-xl shadow-custom lg:text-4xl">1</p>
          </div>

          <div class="w-4/5 flex justify-center items-center gap-5 p-6 lg:p-16 col-desc-content">
            <img class="lg:w-1/2 shadow-md" src="<?= base_url() . 'assets/img/smp1.jpg' ?>" alt="" />
            <div class="desc-img">
              <h3 class="lg:text-3xl text-xs font-bold mb-4">Ekstrakurikuler</h3>
              <p class="h-auto font-light lg:w-3/4">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Commodi voluptas nostrum aliquam, corporis sapiente deserunt eum
              </p>
            </div>
          </div>
        </div>

        <div class="flex row-content-about">
          <div class="border-r-2 border-lineColor w-1/5 flex justify-center items-center relative col col-1">
            <p class="inline-block text-sm font-bold bg-primary text-bgColor py-2 px-5 rounded-xl shadow-custom lg:text-4xl">2</p>
          </div>

          <div class="w-4/5 flex justify-center items-center gap-5 p-6 lg:p-16 col-desc-content">
            <img class="lg:w-1/2 shadow-md" src="<?= base_url() . 'assets/img/smp1.jpg' ?>" alt="" />
            <div class="desc-img">
              <h3 class="lg:text-3xl text-xs font-bold mb-4">Ekstrakurikuler</h3>
              <p class="h-auto font-light lg:w-3/4 lg:text-base">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Commodi voluptas nostrum aliquam, corporis sapiente deserunt eum
              </p>
            </div>
          </div>
        </div>

        <div class="flex row-content-about">
          <div class="border-r-2 border-lineColor w-1/5 flex justify-center items-center relative col col-1">
            <p class="inline-block text-sm font-bold bg-primary text-bgColor py-2 px-5 rounded-xl shadow-custom lg:text-4xl">3</p>
          </div>

          <div class="w-4/5 flex justify-center items-center gap-5 p-6 lg:p-16 col-desc-content">
            <img class="lg:w-1/2 shadow-md" src="<?= base_url() . 'assets/img/smp1.jpg' ?>" alt="" />
            <div class="desc-img">
              <h3 class="lg:text-3xl text-xs font-bold mb-4">Ekstrakurikuler</h3>
              <p class="h-auto font-light lg:w-3/4 lg:text-base">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Commodi voluptas nostrum aliquam, corporis sapiente deserunt eum
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="mt-16 px-4 pt-20 pb-12 lg:mt-32 bg-gradient-to-r from-cyan-500 to-primary rounded-t-3xl fasilitas">
      <div class="flex items-center lg:gap-14">
        <h2 class="text-4xl font-bold w-52 border-r-2 border-bgColor lg:border-none lg:mb-16 lg:pl-16 lg:text-6xl">Fasilitas <span class="text-bgColor pb-4">Sekolah</span></h2>
        <p class="w-2/4 ml-7 lg:text-2xl text-bgColor lg:pb-12 lg:w-1/4">Fasilitas penunjang pembelajaran</p>
      </div>

      <div class="flex flex-wrap gap-4 justify-center mt-12 lg:gap-8">
        <div class="w-44 lg:w-60 card">
          <img class="w-full h-auto rounded-t-lg" src="<?= base_url() . 'assets/img/smp1.jpg' ?>" alt="Avatar" style="width: 100%" />
          <div class="py-3 px-4 container bg-bgColor rounded-b-lg">
            <h4 class="text-base"><b>Lab Komputer</b></h4>
          </div>
        </div>

        <div class="w-44 lg:w-60 card">
          <img class="w-full h-auto rounded-t-lg" src="<?= base_url() . 'assets/img/smp1.jpg' ?>" alt="Avatar" style="width: 100%" />
          <div class="py-3 px-4 container bg-bgColor rounded-b-lg">
            <h4 class="text-base"><b>Lab Komputer</b></h4>
          </div>
        </div>

        <div class="w-44 lg:w-60 card">
          <img class="w-full h-auto rounded-t-lg" src="<?= base_url() . 'assets/img/smp1.jpg' ?>" alt="Avatar" style="width: 100%" />
          <div class="py-3 px-4 container bg-bgColor rounded-b-lg">
            <h4 class="text-base"><b>Lab Komputer</b></h4>
          </div>
        </div>

        <div class="w-44 lg:w-60 card">
          <img class="w-full h-auto rounded-t-lg" src="<?= base_url() . 'assets/img/smp1.jpg' ?>" alt="Avatar" style="width: 100%" />
          <div class="py-3 px-4 container bg-bgColor rounded-b-lg">
            <h4 class="text-base"><b>Lab Komputer</b></h4>
          </div>
        </div>
      </div>
    </section>

  <script src="<?php echo base_url() . 'src/script/script.js' ?>"></script>

</body>

</html>