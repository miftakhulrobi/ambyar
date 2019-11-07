 <!--================ Subject section start =================-->
 <section class="section-margin">
     <div class="container">
         <div class="section-intro text-center pb-65px">
             <h2 class="section-intro__title">Lagu Ambyar Kabeh</h2>
             <p>Urip mung sawang sinawang, Koyone waras tapi edan, Koyone edan jebule tenan. #pekok</p>
         </div>
         <div class="row">
             <?php foreach ($music as $m) : ?>
                 <div class="col-sm-6 col-lg-4 col-xl-3 mb-4 mb-xl-0 mt-3">
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