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

  