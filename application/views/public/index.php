<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'src/output.css' ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'src/styles/style.css' ?>">
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
          <img class="w-11 mr-3" src="<?= base_url() . 'assets/icons/telepon.svg' ?>" alt="logo email">
          <div>
            <p class="text-primary">Telepon</p>
            <p>085212345678</p>
          </div>
        </div>
        <div class="flex items-center h-max pl-8 cursor-pointer">
          <img class="w-11 mr-3" src="<?= base_url() . 'assets/icons/email.svg' ?>" alt="logo email">
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

      <a class="swiper-button-prev absolute top-1/2 py-2 px-4 text-5xl left-7 prev" onclick="plusSlides(-1)"> ❮ </a>
      <a class="swiper-button-next absolute top-1/2 py-2 px-4 text-5xl right-7 next" onclick="plusSlides(1)"> ❯ </a>

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
      <h1 class="text-4xl font-bold font-secFont lg:text-6xl">SMP NEGERI 1<br><span
          class="inline-block text-primary mt-2 pb-2 border-b-2 border-primary lg:pb-6">SUWAWA</span></h1>

      <P class="mt-3 text-sm sm:w-3/4 lg:mt-6 lg:text-lg">Lorem Ipsum is simply dummy text of the printing and
        typesetting industry. Lorem Ipsum has been the industry's
        standard dummy text ever since the.</P>

      <P class="mt-3 text-sm sm:w-3/4 lg:text-lg">Lorem Ipsum is simply dummy text of the printing and typesetting
        industry. Lorem Ipsum has.</P>
      <button
        class="mt-4 bg-primary py-2 px-4 rounded-md text-bgColor cursor-pointer hover:bg-sky-700 ease-in-out duration-300">Selengkapnya</button>
    </div>

    <div class="p-3 lg:w-1/2">
      <img class="rounded-md" src="<?= base_url() . 'assets/img/smp1.jpg' ?>" alt="siswa smp">
    </div>
  </section>

  <section class="mt-16 px-4 lg:mt-32 unggulan">
    <div class="lg:flex lg:gap-14">
      <h2 class="text-4xl font-bold w-52 lg:mb-16 lg:pl-16 lg:text-6xl">Program <span
          class="text-primary border-b-2 border-primary pb-4 lg:border-none">Unggulan</span></h2>
      <p class="w-2/4 mt-10 mb-6 text-base text-textColor lg:text-xl lg:w-1/4">Didukung oleh guru yang kompeten pada
        bidangnya</p>
    </div>
    <div class="col-content">
      <div class="flex row-content-about">
        <div class="border-r-2 border-lineColor w-1/5 flex justify-center items-center relative col col-1">
          <p
            class="inline-block text-sm font-bold bg-primary text-bgColor py-2 px-5 rounded-xl shadow-custom lg:text-4xl">
            1</p>
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
          <p
            class="inline-block text-sm font-bold bg-primary text-bgColor py-2 px-5 rounded-xl shadow-custom lg:text-4xl">
            2</p>
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
          <p
            class="inline-block text-sm font-bold bg-primary text-bgColor py-2 px-5 rounded-xl shadow-custom lg:text-4xl">
            3</p>
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


  <section
    class="mt-16 px-4 pt-20 pb-12 lg:mt-32 bg-gradient-to-t from-transparentBg to-primary rounded-t-3xl fasilitas">
    <div class="flex items-center lg:gap-14">
      <h2 class="text-4xl font-bold w-52 border-r-2 border-bgColor lg:border-none lg:mb-16 lg:pl-16 lg:text-6xl">
        Fasilitas <span class="text-bgColor pb-4">Sekolah</span></h2>
      <p class="w-2/4 ml-7 lg:text-2xl text-bgColor lg:pb-12 lg:w-1/4">Fasilitas penunjang pembelajaran</p>
    </div>

    <div class="flex flex-wrap gap-4 justify-center mt-12 lg:gap-8">
      <div class="w-44 lg:w-60 card">
        <img class="w-full h-auto rounded-t-lg" src="<?= base_url() . 'assets/img/smp1.jpg' ?>" alt="Avatar"
          style="width: 100%" />
        <div class="py-3 px-4 container bg-bgColor rounded-b-lg">
          <h4 class="text-base"><b>Lab Komputer</b></h4>
        </div>
      </div>

      <div class="w-44 lg:w-60 card">
        <img class="w-full h-auto rounded-t-lg" src="<?= base_url() . 'assets/img/smp1.jpg' ?>" alt="Avatar"
          style="width: 100%" />
        <div class="py-3 px-4 container bg-bgColor rounded-b-lg">
          <h4 class="text-base"><b>Lab Komputer</b></h4>
        </div>
      </div>

      <div class="w-44 lg:w-60 card">
        <img class="w-full h-auto rounded-t-lg" src="<?= base_url() . 'assets/img/smp1.jpg' ?>" alt="Avatar"
          style="width: 100%" />
        <div class="py-3 px-4 container bg-bgColor rounded-b-lg">
          <h4 class="text-base"><b>Lab Komputer</b></h4>
        </div>
      </div>

      <div class="w-44 lg:w-60 card">
        <img class="w-full h-auto rounded-t-lg" src="<?= base_url() . 'assets/img/smp1.jpg' ?>" alt="Avatar"
          style="width: 100%" />
        <div class="py-3 px-4 container bg-bgColor rounded-b-lg">
          <h4 class="text-base"><b>Lab Komputer</b></h4>
        </div>
      </div>
    </div>
  </section>


  <section class="testimoni mt-20 mx-7 lg:pl-14 lg:mx-0">
    <div class="flex flex-col justify-center items-center">
      <p class="text-textColor lg:text-xl">Testimoni dan Harapan</p>
      <h2 class="text-3xl font-bold mt-2 text-primary lg:text-6xl">SMP Negeri 1 Suwawa</h2>
    </div>

    <div class="container-cards-testimoni overflow-x-scroll snap-mandatory lg:mt-8">
      <div class="flex gap-6">
        <div class="min-w-80 mt-6 p-6 rounded-2xl shadow-2xl">
          <h2 class="text-primary font-semibold">content heading</h2>
          <p class="mt-8 text-textColor">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto possimus
            nesciunt eos
            voluptatibus omnis
            nihil temporibus reiciendis! Eos, neque necessitatibus.</p>
          <div class="flex gap-4 mt-6">
            <img class="w-2/12 rounded-full" src="<?= base_url() . 'assets/img/avatar-user.png' ?>" alt="">
            <div>
              <h4 class="font-semibold">John Doe</h4>
              <p class="text-xs">Ketua Komite</p>
            </div>
          </div>
        </div>

        <div class="min-w-80 mt-6 p-6 rounded-2xl shadow-2xl">
          <h2 class="text-primary font-semibold">content heading</h2>
          <p class="mt-8 text-textColor">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto possimus
            nesciunt eos
            voluptatibus omnis
            nihil temporibus reiciendis! Eos, neque necessitatibus.</p>
          <div class="flex gap-4 mt-6">
            <img class="w-2/12 rounded-full" src="<?= base_url() . 'assets/img/avatar-user.png' ?>" alt="">
            <div>
              <h4 class="font-semibold">John Doe</h4>
              <p class="text-xs">Ketua Komite</p>
            </div>
          </div>
        </div>

        <div class="min-w-80 mt-6 p-6 rounded-2xl shadow-2xl">
          <h2 class="text-primary font-semibold">content heading</h2>
          <p class="mt-8 text-textColor">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto possimus
            nesciunt eos
            voluptatibus omnis
            nihil temporibus reiciendis! Eos, neque necessitatibus.</p>
          <div class="flex gap-4 mt-6">
            <img class="w-2/12 rounded-full" src="<?= base_url() . 'assets/img/avatar-user.png' ?>" alt="">
            <div>
              <h4 class="font-semibold">John Doe</h4>
              <p class="text-xs">Ketua Komite</p>
            </div>
          </div>
        </div>

        <div class="min-w-80 mt-6 p-6 rounded-2xl shadow-2xl">
          <h2 class="text-primary font-semibold">content heading</h2>
          <p class="mt-8 text-textColor">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto possimus
            nesciunt eos
            voluptatibus omnis
            nihil temporibus reiciendis! Eos, neque necessitatibus.</p>
          <div class="flex gap-4 mt-6">
            <img class="w-2/12 rounded-full" src="<?= base_url() . 'assets/img/avatar-user.png' ?>" alt="">
            <div>
              <h4 class="font-semibold">John Doe</h4>
              <p class="text-xs">Ketua Komite</p>
            </div>
          </div>
        </div>

        <div class="min-w-80 mt-6 p-6 rounded-2xl shadow-2xl">
          <h2 class="text-primary font-semibold">content heading</h2>
          <p class="mt-8 text-textColor">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto possimus
            nesciunt eos
            voluptatibus omnis
            nihil temporibus reiciendis! Eos, neque necessitatibus.</p>
          <div class="flex gap-4 mt-6">
            <img class="w-2/12 rounded-full" src="<?= base_url() . 'assets/img/avatar-user.png' ?>" alt="">
            <div>
              <h4 class="font-semibold">John Doe</h4>
              <p class="text-xs">Ketua Komite</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section
    class="berita mt-28 mb-16 pt-10 pb-8 lg:pt-28 rounded-t-3xl bg-transparentBg lg:rounded-custom lg:bg-gradient-to-t from-bgColor to-transparentBg">
    <div class="flex flex-col justify-center items-center px-6">
      <p class="text-primary lg:text-xl">News Update</p>
      <h2 class="text-3xl text-center font-bold mt-2 text-black lg:text-6xl">Berita Seputar Aktivitas dan Kegiatan
        Keseharian</h2>
      <p class="text-sm mt-3 text-slate-700 lg:text-lg">SMP Negeri 1 Suwawa</p>
    </div>

    <div class="px-3 py-5 flex flex-col gap-7 md:pl-12 lg:pl-0 lg:py-12 lg:flex-row lg:flex-wrap lg:justify-center">
      <div class="flex lg:flex-col lg:w-72 lg:shadow-2xl">
        <img class="max-w-36 max-h-max rounded-lg md:max-w-64 lg:rounded-b-none lg:max-w-full"
          src="<?= base_url() . 'assets/img/smp1.jpg' ?>" alt="Avatar" />
        <div class="pl-3 md:w-2/5 lg:p-3 lg:w-full lg:mt-4">
          <p class="text-xs text-slate-800 lg:text-textColor lg:text-sm">Oktober 18, 2024</p>
          <h2
            class="hover:text-primary ease-in-out duration-300 cursor-pointer text-xl font-semibold lg:text-lg lg:mt-2">
            Upacara HUT Pramuka ke-63 di SMP Negeri 1 Suwawa: <span class="inline-block lg:truncate lg:w-full">Mengusung
              Tema
              “Pramuka Berjiwa Pancasila Menjaga NKRI”</span></h2>
        </div>
      </div>

      <div class="flex lg:flex-col lg:w-72 lg:shadow-2xl">
        <img class="max-w-36 max-h-max rounded-lg md:max-w-64 lg:rounded-b-none lg:max-w-full"
          src="<?= base_url() . 'assets/img/smp1.jpg' ?>" alt="Avatar" />
        <div class="pl-3 md:w-2/5 lg:p-3 lg:w-full lg:mt-4">
          <p class="text-xs text-slate-800 lg:text-textColor lg:text-sm">Oktober 18, 2024</p>
          <h2
            class="hover:text-primary ease-in-out duration-300 cursor-pointer text-xl font-semibold lg:text-lg lg:mt-2 lg:truncate lg:w-full">
            Upacara HUT RI ke-79 <span class="inline-block lg:truncate lg:w-full">SMP NEGERI 1 Suwawa</span></h2>
        </div>
      </div>

      <div class="flex lg:flex-col lg:w-72 lg:shadow-2xl">
        <img class="max-w-36 max-h-max rounded-lg md:max-w-64 lg:rounded-b-none lg:max-w-full"
          src="<?= base_url() . 'assets/img/smp1.jpg' ?>" alt="Avatar" />
        <div class="pl-3 md:w-2/5 lg:p-3 lg:w-full lg:mt-4">
          <p class="text-xs text-slate-800 lg:text-textColor lg:text-sm">Oktober 18, 2024</p>
          <h2
            class="hover:text-primary ease-in-out duration-300 cursor-pointer text-xl font-semibold lg:text-lg lg:mt-2">
            Upacara HUT Pramuka ke-63 di SMP Negeri 1 Suwawa: <span class="inline-block lg:truncate lg:w-full">Mengusung
              Tema
              “Pramuka Berjiwa Pancasila Menjaga NKRI”</span></h2>
        </div>
      </div>

      <div class="flex lg:flex-col lg:w-72 lg:shadow-2xl">
        <img class="max-w-36 max-h-max rounded-lg md:max-w-64 lg:rounded-b-none lg:max-w-full"
          src="<?= base_url() . 'assets/img/smp1.jpg' ?>" alt="Avatar" />
        <div class="pl-3 md:w-2/5 lg:p-3 lg:w-full lg:mt-4">
          <p class="text-xs text-slate-800 lg:text-textColor lg:text-sm">Oktober 18, 2024</p>
          <h2
            class="hover:text-primary ease-in-out duration-300 cursor-pointer text-xl font-semibold lg:text-lg lg:mt-2 lg:truncate lg:w-full">
            Upacara HUT RI ke-79 <span class="inline-block lg:truncate lg:w-full">SMP NEGERI 1 Suwawa</span></h2>
        </div>
      </div>
    </div>

    <div class="flex justify-center items-center">
      <a
        class="mt-4 bg-primary py-3 px-6 rounded-3xl text-bgColor cursor-pointer hover:bg-sky-700 ease-in-out duration-300">Selengkapnya</a>
    </div>

  </section>

  <footer class="shadow-[0px_-1px_5px_0px_rgba(122,122,122,0.75)]">
    <div class="px-7 md:border-b md:border-b-lineColor md:flex md:gap-3 md:justify-center md:px-10 lg:py-10">
      <div class="flex pb-3 pt-5 border-b border-lineColor md:justify-center md:border-b-0 md:w-1/3">
        <i class="fa-solid fa-location-dot text-3xl text-primary"></i>
        <div class="pl-3">
          <p class="font-bold">Lokasi</p>
          <a href="https://maps.app.goo.gl/oMWBXZZ24c9MxYFs7 ">Jl natsir Mooduto,Desa Suwawa</a>
        </div>
      </div>

      <div class="flex pb-3 pt-5 border-b border-lineColor md:justify-center md:border-b-0 md:w-1/3">
        <i class="fa-solid fa-phone-flip text-3xl text-primary"></i>
        <div class="pl-3">
          <p class="font-bold">Telepon</p>
          <p>085212345678</p>
        </div>
      </div>

      <div class="flex pb-3 pt-5 border-b border-lineColor md:justify-center md:border-b-0 md:w-1/3">
        <i class="fa-solid fa-envelope-open-text text-3xl text-primary"></i>
        <div class="pl-3">
          <p class="font-bold">Email</p>
          <p>smpn1suwawa18@gmail.com</p>
        </div>
      </div>
    </div>

    <div
      class="mt-7 px-3 pb-3 border-b border-lineColor md:flex md:justify-between md:items-center md:px-7 lg:justify-around lg:px-20 lg:border-b-0">
      <img src="<?= base_url() . 'assets/img/logo.png' ?>" alt="">
      <div>
        <p class="mt-7">Bergabung Bersama Kami</p>
        <a href="">
          <button
            class="mt-4 mb-7 bg-primary py-2 px-4 rounded-md text-bgColor cursor-pointer hover:bg-sky-700 ease-in-out duration-300">Gabung
            Sekarang</button>
        </a>
      </div>
    </div>

    <div class="mt-7 px-4 md:flex md:justify-between md:gap-4 md:px-7">
      <div class="md:w-1/3">
        <p class="font-bold">Tentang Kami</p>
        <ul class="mt-4">
          <li class="pt-2"><a class="text-textColor hover:text-primary ease-in-out duration-300" href="">Sambutan kepala sekolah</a></li>
          <li class="pt-2"><a class="text-textColor hover:text-primary ease-in-out duration-300" href="">Visi dan Misi</a></li>
          <li class="pt-2"><a class="text-textColor hover:text-primary ease-in-out duration-300" href="">Struktur Organisasi</a></li>
          <li class="pt-2"><a class="text-textColor hover:text-primary ease-in-out duration-300" href="">Civitas Akademik</a></li>
        </ul>
      </div>

      <div class="mt-7 md:mt-0 md:w-1/3">
        <p class="font-bold">Menu navigasi</p>
        <ul class="mt-4">
          <li class="pt-2"><a class="text-textColor hover:text-primary ease-in-out duration-300" href="">Beranda</a></li>
          <li class="pt-2"><a class="text-textColor hover:text-primary ease-in-out duration-300" href="">Galery</a></li>
          <li class="pt-2"><a class="text-textColor hover:text-primary ease-in-out duration-300" href="">PPDB</a></li>
          <li class="pt-2"><a class="text-textColor hover:text-primary ease-in-out duration-300" href="">Kontak Kami</a></li>
        </ul>
      </div>

      <div class="mt-7 md:mt-0 md:w-1/3">
        <p class="font-bold">Lokasi</p>
        <p class="mt-4 text-textColor"> Jalan Natsir Mooduto, Desa Suwawa, Tingkohubu, Bone Bolango, Kabupaten Bone
          Bolango, Gorontalo 96113</p>
      </div>
    </div>

    <div
      class="mt-7 py-3 flex flex-col gap-3 justify-center items-center md:flex-row md:justify-between md:px-7 bg-gradient-to-t from-transparentBg to-primary lg:justify-around lg:mt-20 lg:py-10">
      <p class="text-slate-800 font-medium lg:font-semibold">&copy; Copyright 2024 by SMPN 1 Suwawa</p>
      <div class="flex justify-center items-center gap-7">
        <a href="#"><i class="fab fa-facebook text-2xl text-slate-800"></i></a>
        <a href="#"><i class="fab fa-instagram text-2xl text-slate-800"></i></a>
        <a href="#"><i class="fab fa-youtube text-2xl text-slate-800"></i></a>
      </div>
    </div>

  </footer>

  <script src="<?php echo base_url() . 'src/script/script.js' ?>"></script>

</body>

</html>