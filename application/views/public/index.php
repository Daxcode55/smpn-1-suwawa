<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/styling/style.css' ?>">
    <title>SMPN 1 Suwawa</title>
</head>

<body>

    <!-- header start -->
    <header>
        <div class="header-top">
            <div class="logo">
                <img src="<?= base_url() . 'assets/img/logo.png' ?>" alt="">
            </div>
            <div class="contact-header">
                <div class="sectionContact telepon">
                    <img src="<?= base_url() . 'assets/img/icons/telepon.svg' ?>" alt="logo email">
                    <div class="desc-telepon">
                        <p class="p1">Telepon</p>
                        <p class="p2">085212345678</p>
                    </div>
                </div>
                <div class="sectionContact email">
                    <img src="<?= base_url() . 'assets/img/icons/email.svg' ?>" alt="logo email">
                    <div class="desc-email">
                        <p class="p1">Email</p>
                        <p class="p2">smpn1suwawa18@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>

        <nav>
            <ul class="ul-nav">
                <li><a href="">Beranda</a></li>
                <li class="dropdown-contain"><a href="">Profil Sekolah
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5" d="m6 9l6 6l6-6" />
                        </svg>
                    </a>
                    <ul class="dropdown">
                        <li><a href="">Sambutan Kepala Sekolah</a></li>
                        <li><a href="">Visi dan Misi</a></li>
                        <li><a href="">Struktur Organisasi</a></li>
                        <li class="non-border"><a href="">Civitas Akademik</a></li>
                    </ul>
                </li>
                <li><a href="">Gallery</a></li>
                <li><a href="">PPDB</a></li>
                <li><a href="">Kontak Kami</a></li>
            </ul>
        </nav>
    </header>
    <!-- header end -->



</body>

</html>