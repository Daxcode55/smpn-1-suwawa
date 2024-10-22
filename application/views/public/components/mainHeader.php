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