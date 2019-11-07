 <!--================ Subject section start =================-->
 <section class="section-margin">
     <div class="container">
         <div class="section-intro text-center pb-65px">
             <h2 class="section-intro__title">Video Ambyar Kabeh</h2>
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
             <nav class="blog-pagination justify-content-center d-flex">
                 <ul class="pagination">
                     <?php foreach ($links as $l) : ?>
                         <?= $l ?>
                     <?php endforeach ?>
                 </ul>
             </nav>

         </div>
     </div>
 </section>
 <!--================ Subject section end =================-->