 <!--================ Hero Banner start =================-->
 <section class="hero-banner">
     <div class="hero-banner__content text-center">
         <h1 class="title-banner">Selamat Datang di Website para Pasukan Ambyar</h1>
         <!-- <a class="button" href="#">Make an Appoinment</a> -->
     </div>
 </section>
 <!--================ Hero Banner end =================-->


 <!--================ Work Statics section start =================-->
 <section>
     <div class="container static__single-position">
         <div class="row">
             <div class="col-md-6 col-xl-3 mb-4 mb-xl-0 card-data-hover">
                 <div class="card static__single">
                     <h3 class="item-data-hover"><?= $cmusic ?></h3>
                     <h4>Lagu</h4>
                 </div>
             </div>
             <div class="col-md-6 col-xl-3 mb-4 mb-xl-0 card-data-hover">
                 <div class="card static__single">
                     <h3 class="item-data-hover"><?= $cvideo ?></h3>
                     <h4>Video</h4>
                 </div>
             </div>
             <div class="col-md-6 col-xl-3 mb-4 mb-xl-0 card-data-hover">
                 <div class="card static__single">
                     <h3 class="item-data-hover"><?= $cmember ?></h3>
                     <h4>Member</h4>
                 </div>
             </div>
             <div class="col-md-6 col-xl-3 mb-4 mb-xl-0 card-data-hover">
                 <div class="card static__single">
                     <h3 class="item-data-hover"><?= $this->auth->app()->visitor ?></h3>
                     <h4>Pengunjung Suka</h4>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!--================ Work Statics section end =================-->

 <!--================ Subject section start =================-->
 <section class="section-margin">
     <div class="container">
         <div class="section-intro text-center pb-65px">
             <h2 class="section-intro__title avatar-animation">Lagu Ambyar Terbaru</h2>
             <p>Urip mung sawang sinawang, Koyone waras tapi edan, Koyone edan jebule tenan. #pekok</p>
         </div>
         <div class="row">
             <?php foreach ($music as $m) : ?>
                 <div class="col-sm-6 col-lg-4 col-xl-3 mb-4 mb-xl-0">
                     <div class="card card-subject card-table-data">
                         <div class="card-subject__img">
                             <audio src="<?= base_url('admin') ?>/assets/files/music/<?= $m->audio ?>" controls></audio>

                         </div>
                         <div class="card-subject__body">
                             <h3><a href="#"><?= $m->audio ?></a></h3>
                         </div>
                     </div>
                 </div>
             <?php endforeach ?>
         </div>
         <div class="col-12 text-center mt-5 pt-xl-4">
             <a class="button" href="<?= base_url('file/music') ?>">Lihat Semua <span class="align-middle"><i class="ti-arrow-right"></i></span></a>
         </div>
     </div>
 </section>
 <!--================ Subject section end =================-->

 <!--================ Subject section start =================-->
 <section class="section-margin">
     <div class="container">
         <div class="section-intro text-center pb-65px">
             <h2 class="section-intro__title avatar-animation">Video Ambyar Terbaru</h2>
             <p>Ojo seneng ngece koncomu seng jomblo seng bertahun2 drung payu2.. Disitu kamu tidak tau kalau kamu baru saja menyakiti perasaanya. #vangsat kau</p>
         </div>
         <div class="row">
             <?php foreach ($video as $v) : ?>
                 <div class="col-sm-6 col-lg-4 col-xl-3 mb-4 mb-xl-0">
                     <div class="card card-subject card-table-data">
                         <div class="card-subject__img">
                             <img class="card-img rounded-0" src="<?= base_url('frontend') ?>/img/home/video.jpg" alt="">
                             <div class="card-subject__imgOverlay" style="cursor:pointer" video_id="<?= $v->video_id ?>">
                                 <img src="<?= base_url('frontend') ?>/img/home/play.png" alt="">
                             </div>
                         </div>
                         <div class="card-subject__body">
                             <h3><a href="<?= base_url('file/videodetail/' . $v->video_id) ?>"><?= $v->video ?></a></h3>
                         </div>
                     </div>
                 </div>
             <?php endforeach ?>
         </div>
         <div class="col-12 text-center mt-5 pt-xl-4">
             <a class="button" href="<?= base_url('file/video') ?>">Lihat Semua <span class="align-middle"><i class="ti-arrow-right"></i></span></a>
         </div>
     </div>
 </section>
 <!--================ Subject section end =================-->


 <!--================ Cta section start =================-->
 <section class="section-padding--smaller cta-wrapper card-blog-nya-wong-ambyar">
     <div class="container">
         <div class="cta__content text-center item-blog-nya-wong-ambyar">
             <h2>Blog nya wong2 Ambyar</h2>
             <p>Ciri2 cewek seng gak serius karo koe.. Wonge mesti muni ngene: Mas aku jek pengen fokus kuliah, aku jek pengen fokus kerja, aku durung mikir ngunuwi.. wes coba gk sah mbok hubungi trus deloken sebulan maneh lak wes foto2 bareng cowok barunya.. 90% akurat cok</p>
             <p>Tapi cewek seng serius karo koe.. Wonge mesti muni ngene: Mas enteni aku 4 tahun lagi ya aku tak kuliah disek, Ayo mas golek duit disek dinggo modal nikah sok mben.. Ayo mas podo2 berjuang. Tapi sayangnya cewek model ngeneki wes hampir punah. fuck</p>
             <a href="<?= base_url('blogs') ?>" class="button button-cta">Lihat Blog</a>
         </div>
     </div>
 </section>
 <!--================ Cta section end =================-->


 <!--================ Blog section start =================-->
 <section class="section-margin">
     <div class="container">
         <div class="section-intro text-center pb-65px">
             <h2 class="section-intro__title avatar-animation">Postingan Terbaru Blog</h2>
             <p>Aku pernah due cewek tapi cewek ku isin nk sampek konco2ne ngerti mergo aku iki bakol tepo, akhirnya wonge mileh cowok seng kerjo neng pabrik odong2, piro sih gajine? porayo okeh aku bakol tepo.. cewek jembot</p>
         </div>
         <div class="row">
             <?php foreach ($blog as $b) : ?>
                 <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
                     <div class="card card-blog">
                         <img class="card-img rounded-0" src="<?= base_url('admin') ?>/assets/files/blog/<?= $b->thumbnail ?>" alt="">
                         <div class="card-blog__body">
                             <h3><a href="<?= base_url('blogs/singleblog/' . $b->blog_id) ?>"><?= $b->title ?></a></h3>
                             <ul class="card-blog__info">
                                 <li><a href="#"><i class="ti-notepad"></i><?= date('H:i D,d M Y', strtotime($b->created_at)) ?></a></li>
                                 <li><a href="#"><i class="ti-thumbs-up"></i><?= $b->like ?> Suka</a></li>
                             </ul>
                         </div>
                         <div class="card-blog__footer">
                             <a href="<?= base_url('blogs/singleblog/' . $b->blog_id) ?>">Detail<i class="ti-arrow-right"></i></a>
                         </div>
                     </div>
                 </div>
             <?php endforeach ?>
         </div>
     </div>
 </section>
 <!--================ Blog section end =================-->