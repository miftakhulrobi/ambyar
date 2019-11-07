  <!--================ Hero sm Banner start =================-->
  <section class="hero-banner hero-banner--sm">
      <div class="hero-banner__content text-center">
          <h1 class="title-banner">Tentang Kami</h1>
          <nav aria-label="breadcrumb" class="banner-breadcrumb">
              <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?= base_url('about') ?>">Beranda</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Tentang</li>
              </ol>
          </nav>
      </div>
  </section>
  <!--================ Hero sm Banner end =================-->


  <!--================ About section start =================-->
  <section class="d-lg-flex align-items-center section-margin--large">
      <div class="about__videoWrapper">
          <div class="about__video">
              <div class="about__video-image">
                  <img class="card-img" src="<?= base_url('frontend') ?>/img/blog/cat-post/2.jpg" alt="">
              </div>
              <!-- <div class="about__videoContent">
                  <a id="play-home-video" class="video-play-button" href="https://www.youtube.com/watch?v=vParh5wE-tM">
                      <span></span>
                  </a>
                  <h4>Watch our video</h4>
              </div> -->
          </div>
      </div>
      <div class="container">
          <div class="about__content">
              <h3>Visi Misi Website Pekok Ambyar Iki</h3>
              <p>Website iki tak gawe cuma arep kanggo nglampiasne pegelku neng cewek2 seng pernah nglarani ati.. Mboh nyapo wong wedok selalu nyawang wong lanang sebelah mata, mata tertutup pisan.</p>
              <p>Mamane bocae gelem, wes kenal wong tuo ku wes 3 kali moro neng omahku.. Aku malah bolak balik moro neng omahe wonge, weng tuo ne yo sering kirim salam neng wong tuo ku.. sue2 kok bocae molet.. mungkin nyawang aku omahe biasa terus omahe wonge luweh apik ko gonaku, di kiro aku wonge sederhana. wong yo gak ngerti nak sawahku ombo. Wonge + Adine pengen kuliah tapi jare wong tua ne gk due biaya.. laah wong tuo ku nak trimo nguliahne adiku yoo mudah sekali coookk... </p>
              <a class="button mt-xl-3 btn-like-this-page" href="#">Sukai</a>
          </div>
      </div>
  </section>
  <!--================ About section end =================-->

  <!--================ Testimonial section start =================-->
  <section class="bg-albaster section-padding--small">
      <div class="container">
          <div class="section-intro text-center pb-65px">
              <h2 class="section-intro__title">Pesan Kesane Wong Pekok Lainya</h2>
              <p>Sumpah Loro ati banget sebenere.. Bocae wes tak tukokne cincin, lha kok yo wonge iso mulet.. Yowes rapopo tak tompo kanthi iklas ati, mugo2 iso dadi amal ibadah ku Aamiin.</p>
          </div>

          <div class="owl-carousel owl-theme testimonial">
              <div class="testimonial__item">
                  <div class="row">
                      <div class="col-md-3 col-lg-2 align-self-center">
                          <div class="testimonial__img">
                              <img class="card-img rounded-0" src="<?= base_url('frontend') ?>/img/about/1.jpeg" alt="">
                          </div>
                      </div>
                      <div class="col-md-9 col-lg-10">
                          <div class="testimonial__content mt-3 mt-sm-0">
                              <h3>Mas Mukidi bin Yusuf</h3>
                              <p>Pakar Cinta</p>
                              <p class="testimonial__i">Perumpamaan awakmu golek bukur neng kali, Ojo sampek klambi clonomu teles kabeh, oleh teles clonone tok rapopo lha nyapoo??, Podo karo awakmu seneng karo wong liyo nak seneng ojo nemen2 sak duwe mu mbok wehne wonge kabeh, misale wonge selingkuh due pacar liyo piye rasane atimu. kene berjuang mati2an eh si dia malah berkhianat.. itu namanya pekok. </p>
                              <span class="testimonial__icon"><i class="ti-quote-right"></i></span>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="testimonial__item">
                  <div class="row">
                      <div class="col-md-3 col-lg-2 align-self-center">
                          <div class="testimonial__img">
                              <img class="card-img rounded-0" src="<?= base_url('frontend') ?>/img/about/2.jpg" alt="">
                          </div>
                      </div>
                      <div class="col-md-9 col-lg-10">
                          <div class="testimonial__content mt-3 mt-sm-0">
                              <h3>Mas Jalal</h3>
                              <p>Tukang Las</p>
                              <p class="testimonial__i">Bagi yang sekarang masih jomblo belum punya pasangan, Ws gak popo ojo sedih2 nemen tarah iki cobaane gusti, sabar seng penting slamet.. drung due pasangan ra po2 mugo2 rejekine di paringi lancar.. Ingat harus cari rejeki yang halal.. </p>
                              <span class="testimonial__icon"><i class="ti-quote-right"></i></span>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="testimonial__item">
                  <div class="row">
                      <div class="col-md-3 col-lg-2 align-self-center">
                          <div class="testimonial__img">
                              <img class="card-img rounded-0" src="<?= base_url('frontend') ?>/img/about/3.jpg" alt="">
                          </div>
                      </div>
                      <div class="col-md-9 col-lg-10">
                          <div class="testimonial__content mt-3 mt-sm-0">
                              <h3>Mas Suprek</h3>
                              <p>Tukang Macul</p>
                              <p class="testimonial__i">No Comment!!!</p>
                              <span class="testimonial__icon"><i class="ti-quote-right"></i></span>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!--================ Testimonial section end =================-->



  <!--================ Counter section start =================-->
  <section class="counters">
      <div class="container">
          <div class="row">
              <div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
                  <div class="counters__single text-center">
                      <h2 class="item-static-app"><?= $cmusic ?></h2>
                      <h4>Lagu</h4>
                  </div>
              </div>
              <div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
                  <div class="counters__single text-center">
                      <h2 class="item-static-app"><?= $cvideo ?></h2>
                      <h4>Video</h4>
                  </div>
              </div>
              <div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
                  <div class="counters__single text-center">
                      <h2 class="item-static-app"><?= $cmember ?></h2>
                      <h4>Member</h4>
                  </div>
              </div>
              <div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
                  <div class="counters__single text-center">
                      <h2 class="item-static-app"><?= $this->auth->app()->visitor ?></h2>
                      <h4>Pengunjung Suka</h4>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!--================ Counter section end =================-->