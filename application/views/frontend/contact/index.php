  <!--================ Hero sm Banner start =================-->
  <section class="hero-banner hero-banner--sm">
      <div class="hero-banner__content text-center">
          <h1 class="title-banner">Kontak Kami</h1>
          <nav aria-label="breadcrumb" class="banner-breadcrumb">
              <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?= base_url('/') ?>">Beranda</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Kontak</li>
              </ol>
          </nav>
      </div>
  </section>
  <!--================ Hero sm Banner end =================-->



  <!-- ================ contact section start ================= -->
  <section class="section-margin--large">
      <div class="container">
          <div class="d-none d-sm-block mb-5 pb-4">
              <!-- <div id="map" style="height: 420px;"></div> -->
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1249.1530067147266!2d111.37702220298512!3d-7.483129335989126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e79eeb490e28d0f%3A0xf4ec0a0ddea053fb!2sSDN+KEDUNGPUTRI+1!5e1!3m2!1sid!2sid!4v1565096715312!5m2!1sid!2sid" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>


          <div class="row">
              <div class="col-md-4 col-lg-3 mb-4 mb-md-0">
                  <div class="media contact-info">
                      <span class="contact-info__icon"><i class="ti-home"></i></span>
                      <div class="media-body">
                          <h3>Jawa Timur</h3>
                          <p><?= $this->auth->app()->address ?></p>
                      </div>
                  </div>
                  <div class="media contact-info">
                      <span class="contact-info__icon"><i class="ti-headphone"></i></span>
                      <div class="media-body">
                          <h3><a href="tel:<?= $this->auth->app()->phone ?>">+<?= $this->auth->app()->phone ?></a></h3>
                          <p>Mon to Fri 9am to 6pm</p>
                      </div>
                  </div>
                  <div class="media contact-info">
                      <span class="contact-info__icon"><i class="ti-email"></i></span>
                      <div class="media-body">
                          <h3><a href="mailto:<?= $this->auth->app()->email ?>"><?= $this->auth->app()->email ?></a></h3>
                          <p>Send us your query anytime!</p>
                      </div>
                  </div>
              </div>
              <div class="col-md-8 col-lg-9">
                  <form action="#/" class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                      <div class="row">
                          <div class="col-lg-5">
                              <div class="form-group">
                                  <input class="form-control" name="name" id="name" type="text" placeholder="Nama Lengkap" required>
                                  <small class="text-success name-success"></small>
                                  <small class="text-danger name-danger"></small>
                              </div>
                              <div class="form-group">
                                  <input class="form-control" name="email" id="email" type="email" placeholder="Email" required>
                                  <small class="text-success email-success"></small>
                                  <small class="text-danger email-danger"></small>
                              </div>
                              <div class="form-group">
                                  <input class="form-control" name="phone" id="subject" type="text" placeholder="Telepon / Whatsapp" required>
                                  <small class="text-success phone-success"></small>
                                  <small class="text-danger phone-danger"></small>
                              </div>
                          </div>
                          <div class="col-lg-7">
                              <div class="form-group">
                                  <textarea class="form-control different-control w-100" name="message" id="message" cols="30" rows="5" placeholder="Pesan Anda" required></textarea>
                                  <small class="text-success message-success"></small>
                                  <small class="text-danger message-danger"></small>
                              </div>
                          </div>
                      </div>
                      <div class="form-group text-center text-md-right mt-3">
                          <button type="button" class="button button-contactForm btn-send-message">Kirim Pesan</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </section>
  <!-- ================ contact section end ================= -->