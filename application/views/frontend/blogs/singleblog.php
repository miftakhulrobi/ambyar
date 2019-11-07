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
              <div class="col-lg-8 posts-list">
                  <div class="single-post row">
                      <div class="col-lg-12">
                          <div class="feature-img">
                              <img class="img-fluid" src="<?= base_url('admin') ?>/assets/files/blog/<?= $blog->thumbnail ?>" alt="">
                          </div>
                      </div>
                      <div class="col-lg-3  col-md-3">
                          <div class="blog_info text-right">
                              <div class="post_tag">
                                  <?php if ($blog->categorie_id == 1) : ?>
                                      <a class="active" href="#">Rodok Ambyar,</a>
                                      <a href="#">Satengah Ambyar,</a>
                                      <a href="#">Poll Ambyar</a>
                                  <?php elseif ($blog->categorie_id == 2) : ?>
                                      <a href="#">Rodok Ambyar,</a>
                                      <a class="active" href="#">Satengah Ambyar,</a>
                                      <a href="#">Poll Ambyar</a>
                                  <?php else : ?>
                                      <a href="#">Rodok Ambyar,</a>
                                      <a href="#">Satengah Ambyar,</a>
                                      <a class="active" href="#">Poll Ambyar</a>
                                  <?php endif ?>
                              </div>
                              <ul class="blog_meta list">
                                  <li>
                                      <a href="#"><?= $blog->name ?>
                                          <i class="lnr lnr-user"></i>
                                      </a>
                                  </li>
                                  <li>
                                      <a href="#"><?= date('H:i D,d M Y', strtotime($blog->created_at)) ?>
                                          <i class="lnr lnr-calendar-full"></i>
                                      </a>
                                  </li>
                                  <li>
                                      <a href="#"><?= $blog->view ?> Dilihat
                                          <i class="lnr lnr-eye"></i>
                                      </a>
                                  </li>
                                  <li>
                                      <a href="#"><span class="count-like-blog"></span> Disukai
                                          <i class="lnr lnr-thumbs-up"></i>
                                      </a>
                                  </li>
                                  <li id="target-like">
                                      <button class="button btn-like-this-blog text-white" blog_id="<?= $blog->blog_id ?>">Sukai
                                      </button>
                                      <button class="button btn-unlike-this-blog text-white" blog_id="<?= $blog->blog_id ?>">Batal Suka
                                      </button>
                                  </li>
                              </ul>
                          </div>
                      </div>
                      <div class="col-lg-9 col-md-9 blog_details">
                          <h2><?= $blog->title ?></h2>
                          <p class="excert">
                              <?= $blog->content ?>
                          </p>

                      </div>
                  </div>
                  <div class="navigation-area mt-5">
                      <div class="row">
                          <?php if ($cprev) : ?>
                              <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                                  <div class="thumb">
                                      <a href="<?= base_url('blogs/singleblog/' . $prev->blog_id) ?>">
                                          <img width="80" class="img-fluid" src="<?= base_url('admin') ?>/assets/files/blog/<?= $prev->thumbnail ?>" alt="">
                                      </a>
                                  </div>
                                  <div class="arrow">
                                      <a href="<?= base_url('blogs/singleblog/' . $prev->blog_id) ?>">
                                          <span class="lnr text-white lnr-arrow-left"></span>
                                      </a>
                                  </div>
                                  <div class="detials">
                                      <p>Post Sebelumnya</p>
                                      <a href="<?= base_url('blogs/singleblog/' . $prev->blog_id) ?>">
                                          <h4><?= $prev->title ?></h4>
                                      </a>
                                  </div>
                              </div>
                          <?php endif ?>
                          <?php if ($cnext) : ?>
                              <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                                  <div class="detials">
                                      <p>Post Selanjutnya</p>
                                      <a href="<?= base_url('blogs/singleblog/' . $next->blog_id) ?>">
                                          <h4><?= $next->title ?></h4>
                                      </a>
                                  </div>
                                  <div class="arrow">
                                      <a href="<?= base_url('blogs/singleblog/' . $next->blog_id) ?>">
                                          <span class="lnr text-white lnr-arrow-right"></span>
                                      </a>
                                  </div>
                                  <div class="thumb">
                                      <a href="<?= base_url('blogs/singleblog/' . $next->blog_id) ?>">
                                          <img width="80" class="img-fluid" src="<?= base_url('admin') ?>/assets/files/blog/<?= $next->thumbnail ?>" alt="">
                                      </a>
                                  </div>
                              </div>
                          <?php endif ?>
                      </div>
                  </div>


              </div>
              <!-- <div class="col-lg-8">
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
              </div> -->
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