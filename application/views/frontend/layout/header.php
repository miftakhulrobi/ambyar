<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?= $this->auth->app()->name ?></title>
  <link rel="icon" href="<?= base_url('frontend') ?>/img/Fevicon.png" type="image/png">

  <link rel="stylesheet" href="<?= base_url('frontend') ?>/vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url('frontend') ?>/vendors/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="<?= base_url('frontend') ?>/vendors/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="<?= base_url('frontend') ?>/vendors/linericon/style.css">
  <link rel="stylesheet" href="<?= base_url('frontend') ?>/vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?= base_url('frontend') ?>/vendors/owl-carousel/owl.carousel.min.css">
  <link rel="stylesheet" href="<?= base_url('frontend') ?>/vendors/Magnific-Popup/magnific-popup.css">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">

  <link rel="stylesheet" href="<?= base_url('frontend') ?>/css/style.css">

  <style>
    .ck-editor__editable_inline {
      min-height: 200px;
    }

    .card-table-data {
      box-shadow: 0px 5px 10px 5px rgba(0, 0, 0, .2);
    }

    .ti-mobile,
    .ti-email,
    .item-static-app {
      animation: iconTopBar 1s ease infinite;
    }

    .ti-facebook,
    .fa-facebook-f {
      animation: iconTopBarFb 1s ease infinite;
    }

    .ti-instagram,
    .fa-instagram {
      animation: iconTopBarIg 1s ease .5s infinite;
    }

    .fa-whatsapp,
    .fa-whatsapp {
      animation: iconTopBarWa 1s ease 1s infinite;
    }

    .ti-github,
    .fa-github {
      animation: iconTopBarGithub 1s ease 1.5s infinite;
    }

    .card-subject__body {
      height: 100px;
      overflow: auto
    }

    .title-banner {
      animation: titleBannerAnimate 4s ease infinite;
    }

    .avatar-animation {
      animation: avatarAnimation 4s ease infinite;
    }

    .card-data-hover:hover .item-data-hover {
      transform: scale(1.3);
      transition: 1s;
      color: orangered;
    }

    .card-blog-nya-wong-ambyar:hover .item-blog-nya-wong-ambyar {
      color: aqua;
    }

    /* my animation */
    @keyframes iconTopBar {
      0% {
        color: white;
      }

      100% {
        animation-delay: 3s;
      }
    }

    @keyframes iconTopBarFb {
      0% {
        color: blue;
      }

      100% {
        animation-delay: 3s;
      }
    }

    @keyframes iconTopBarIg {
      0% {
        color: salmon;
      }

      100% {
        animation-delay: 3s;
      }
    }

    @keyframes iconTopBarWa {
      0% {
        color: greenyellow;
      }

      100% {
        animation-delay: 3s;
      }
    }

    @keyframes iconTopBarGithub {
      0% {
        color: violet;
      }

      100% {
        animation-delay: 3s;
      }
    }

    @keyframes titleBannerAnimate {
      0% {
        color: white;
        transform: scale(1);
      }


      25% {
        transform: scale(1.2);
        color: yellow;
      }

      50% {
        transform: scale(1);
      }

      75% {
        color: cyan;
      }

      100% {
        color: white;
      }
    }

    @keyframes avatarAnimation {
      0% {
        transform: rotateY(360deg);
      }

      100% {}
    }
  </style>
</head>

<body>
  <!--================ Header Top Area Start =================-->
  <section class="header-top d-none d-sm-block">
    <div class="container">
      <div class="d-sm-flex justify-content-between">
        <ul class="header-top__info mb-2 mb-sm-0">
          <li><a href="tel:+<?= $this->auth->app()->phone ?>"><span class="align-middle"><i class="ti-mobile"></i></span>+<?= $this->auth->app()->phone ?></a></li>
          <li><a href="mailto:<?= $this->auth->app()->email ?>"><span class="align-middle"><i class="ti-email"></i></span><?= $this->auth->app()->email ?></a></li>
        </ul>
        <ul class="header-top__social">
          <li><a href="<?= $this->auth->app()->fb ?>"><i class="ti-facebook"></i></a></li>
          <li><a href="<?= $this->auth->app()->ig ?>"><i class="ti-instagram"></i></a></li>
          <li><a href="<?= $this->auth->app()->wa ?>"><i class="fab fa-whatsapp"></i></a></li>
          <li><a href="<?= $this->auth->app()->github ?>"><i class="ti-github"></i></a></li>
        </ul>
      </div>
    </div>
  </section>
  <!--================ Header Top Area end =================-->

  <!--================ Header Menu Area start =================-->
  <header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container box_1620">
          <a class="navbar-brand logo_h" href="<?= base_url('/') ?>"><img src="<?= base_url('frontend') ?>/img/logo.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav justify-content-end">
              <li class="nav-item active"><a class="nav-link" href="<?= base_url('/') ?>">Beranda</a></li>
              <li class="nav-item"><a class="nav-link" href="<?= base_url('about') ?>">Tentang</a></li>
              <li class="nav-item"><a class="nav-link" href="<?= base_url('contact') ?>">Kontak</a>
              <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">File</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="<?= base_url('file/music') ?>">Lagu</a></li>
                  <li class="nav-item"><a class="nav-link" href="<?= base_url('file/video') ?>">Video</a></li>
                </ul>
              </li>
              <li class="nav-item"><a class="nav-link" href="<?= base_url('blogs') ?>">Blog</a></li>
              <li class="nav-item"><a class="nav-link" href="<?= base_url('auths/login') ?>">Login</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <!--================Header Menu Area =================-->