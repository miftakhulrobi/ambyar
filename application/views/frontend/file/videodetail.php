 <!--================ Subject section start =================-->
 <section class="section-margin">
     <div class="container">
         <div class="section-intro text-center pb-65px">
             <h2 class="section-intro__title">Mainkan Video Ambyar</h2>
         </div>
         <div class="row">
             <div class="col-sm-12 col-lg-12 col-xl-12 mb-4 mb-xl-0">
                 <div class="card card-subject card-table-data">
                     <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                         <iframe src="<?= base_url('admin') ?>/assets/files/video/<?= $video->video ?>" class="embed-responsive-item" allowfullscreen></iframe>
                     </div>
                     <div class="card-subject__body">
                         <h3><a href="#"><?= $video->video ?></a></h3>
                     </div>
                 </div>
             </div>
         </div>

     </div>
 </section>
 <!--================ Subject section end =================-->