  <!--================ Hero sm Banner start =================-->
  <section class="hero-banner hero-banner--sm">
      <div class="hero-banner__content text-center">
          <h1 class="title-banner">Blog Ambyar</h1>
          <nav aria-label="breadcrumb" class="banner-breadcrumb">
              <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?= base_url('/') ?>">Beranda</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Blog</li>
              </ol>
          </nav>
      </div>
  </section>
  <!--================ Hero sm Banner end =================-->


  <!--================Blog Categorie Area =================-->
  <section class="blog_categorie_area">
      <div class="container">
          <div class="row">
              <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
                  <div class="categories_post">
                      <img class="card-img rounded-0" src="<?= base_url('frontend') ?>/img/blog/cat-post/1.jpg" alt="post">
                      <div class="categories_details">
                          <div class="categories_text">
                              <a href="single-blog.html">
                                  <h5>Rodok Ambyar</h5>
                              </a>
                              <div class="border_line"></div>
                              <p>Kategori Blog</p>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
                  <div class="categories_post">
                      <img class="card-img rounded-0" src="<?= base_url('frontend') ?>/img/blog/cat-post/2.jpg" alt="post">
                      <div class="categories_details">
                          <div class="categories_text">
                              <a href="single-blog.html">
                                  <h5>Setengah Ambyar</h5>
                              </a>
                              <div class="border_line"></div>
                              <p>Kategori Blog</p>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
                  <div class="categories_post">
                      <img class="card-img rounded-0" src="<?= base_url('frontend') ?>/img/blog/cat-post/3.jpg" alt="post">
                      <div class="categories_details">
                          <div class="categories_text">
                              <a href="single-blog.html">
                                  <h5>Poll Ambyar</h5>
                              </a>
                              <div class="border_line"></div>
                              <p>Kategori Blog</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!--================Blog Categorie Area =================-->

  <!--================Blog Area =================-->
  <section class="blog_area pb-xl-4">
      <div class="container">
          <div class="row">
              <div class="col-lg-8">
                  <div class="blog_left_sidebar">
                      <form action="" class="mb-5" id="form-post-blog" enctype="multipart/form-data">
                          <div class="form-group">
                              <input type="text" name="title" class="form-control" placeholder="Judul">
                          </div>
                          <div class="form-group">
                              <textarea type="text" name="content" id="content" class="form-control" placeholder="Konten anda"></textarea>
                          </div>
                          <div class="form-group">
                              <input type="file" name="thumbnail" class="form-control">
                          </div>
                          <div class="form-group mt-4">
                              <input type="radio" id="Rodok Ambyar" name="categorie_id" value="1" required>
                              <label for="Rodok Ambyar">Rodok Ambyar</label>

                              <input type="radio" id="Setengah Ambyar" name="categorie_id" value="2" class="ml-3" required>
                              <label for="Setengah Ambyar">Setengah Ambyar</label>

                              <input type="radio" id="poll Ambyar" name="categorie_id" value="3" class="ml-3" required>
                              <label for="poll Ambyar">poll Ambyar</label>
                          </div>
                          <div class="form-group">
                              <button type="submit" class="button btn-post-blog">Kirim</button>
                          </div>
                      </form>
                      <div id="target">

                      </div>

                  </div>
              </div>
              <div class="col-lg-4">
                  <div class="blog_right_sidebar">
                      <aside class="single_sidebar_widget author_widget">
                          <?php if (!$admin->avatar) : ?>
                              <img class="author_img rounded-circle img-thumbnail" src="<?= base_url('admin') ?>/assets/img/user/admin.jpg" alt="">
                          <?php else : ?>
                              <img class="author_img rounded-circle img-thumbnail" src="<?= base_url('admin') ?>/assets/files/avatar/<?= $admin->avatar ?>" alt="">
                          <?php endif ?>
                          <h4><?= $admin->name ?></h4>
                          <p>Admin Blog Ambyar</p>
                          <div class="social_icon">
                              <a href="<?= $this->auth->app()->fb ?>">
                                  <i class="fab fa-facebook-f"></i>
                              </a>
                              <a href="<?= $this->auth->app()->ig ?>">
                                  <i class="fab fa-instagram"></i>
                              </a>
                              <a href="<?= $this->auth->app()->wa ?>">
                                  <i class="fab fa-whatsapp"></i>
                              </a>
                              <a href="<?= $this->auth->app()->github ?>">
                                  <i class="fab fa-github"></i>
                              </a>
                          </div>
                          <p>Dear wong wedok ojo nyawang wong lanang sebelah mata, belum tentu nak omahe elek di kiro wonge sederhana, sopo ngerti wongtuane sawahe ombo. Contone Aku
                          </p>
                          <div class="br"></div>
                      </aside>
                      <aside class="single_sidebar_widget popular_post_widget">
                          <h3 class="widget_title">Postingan Populer</h3>
                          <div id="target2"></div>

                          <div class="br"></div>
                      </aside>
                      <aside class="single_sidebar_widget ads_widget">
                          <a href="#">
                              <img class="img-fluid" src="<?= base_url('frontend') ?>/img/blog/add.jpg" alt="">
                          </a>
                          <div class="br"></div>
                      </aside>
                      <aside class="single_sidebar_widget post_category_widget">
                          <h4 class="widget_title">Kategori Postingan</h4>
                          <ul class="list cat-list" id="target3">

                          </ul>
                          <div class="br"></div>
                      </aside>
                      <aside class="single-sidebar-widget newsletter_widget">
                          <h4 class="widget_title">Mood Pengunjung</h4>
                          <p>
                              Sukai Halaman Kami!<br>
                              <button type="button" class="button mt-3 btn-like-this-page">Suka</button>
                          </p>

                      </aside>

                  </div>
              </div>
          </div>
      </div>
  </section>
  <!--================Blog Area =================-->