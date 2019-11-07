 <!-- ================ start footer Area ================= -->
 <footer class="footer-area">
     <div class="container">
         <div class="row">
             <div class="col-lg-3  col-md-6 col-sm-6">
                 <div class="single-footer-widget">
                     <h6>Tentang Agensi</h6>
                     <p>
                         Dear wong wedok ojo nyawang wong lanang sebelah mata, belum tentu nak omahe elek di kiro wonge sederhana, sopo ngerti wongtuane sawahe ombo. Contone Aku
                     </p>
                 </div>
             </div>
             <div class="col-lg-3 col-md-6 col-sm-6">
                 <div class="single-footer-widget">
                     <h6>Link Navigasi</h6>
                     <div class="row">
                         <div class="col">
                             <ul>
                                 <li><a href="<?= base_url('/') ?>">Beranda</a></li>
                                 <li><a href="<?= base_url('about') ?>">Tentang</a></li>
                                 <li><a href="<?= base_url('contact') ?>">Kontak</a></li>
                                 <li><a href="<?= base_url('blogs') ?>">Blog</a></li>
                             </ul>
                         </div>
                         <div class="col">
                             <ul>
                                 <li><a href="<?= base_url('file/music') ?>">Lagu</a></li>
                                 <li><a href="<?= base_url('file/video') ?>">Video</a></li>
                                 <li><a href="<?= base_url('auths/login') ?>">Login</a></li>
                                 <li><a href="<?= base_url('auths/register') ?>">Daftar</a></li>
                             </ul>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-lg-3  col-md-6 col-sm-6">
                 <div class="single-footer-widget">
                     <h6>Mood Pengunjung</h6>
                     <p>
                         Sukai Halaman Kami!<br>
                         <button type="button" class="button mt-3 btn-like-this-page">Suka</button>
                     </p>

                 </div>
             </div>
             <div class="col-lg-3  col-md-6 col-sm-6">
                 <div class="single-footer-widget mail-chimp">
                     <h6 class="mb-20">Gambar Blog</h6>
                     <ul class="instafeed d-flex flex-wrap">
                         <?php foreach ($this->auth->imgblog() as $i) : ?>
                             <li><img width="50" src="<?= base_url('admin') ?>/assets/files/blog/<?= $i->thumbnail ?>" alt=""></li>
                         <?php endforeach ?>
                     </ul>
                 </div>
             </div>
         </div>
     </div>
     <div class="footer-bottom">
         <div class="container">
             <div class="row align-items-center">
                 <p class="col-lg-8 col-sm-12 footer-text m-0 text-center text-lg-left">

                     <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                     Copyright &copy;<script>
                         document.write(new Date().getFullYear());
                     </script> All rights reserved | <i class="fa fa-heart" aria-hidden="true"></i> by <a href="<?= $this->auth->app()->biodata ?>" target="_blank">Miftakhul Robi</a>
                     <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                 </p>
                 <div class="col-lg-4 col-sm-12 footer-social text-center text-lg-right">
                     <a href="<?= $this->auth->app()->fb ?>"><i class="fab fa-facebook-f"></i></a>
                     <a href="<?= $this->auth->app()->ig ?>"><i class="fab fa-instagram"></i></a>
                     <a href="<?= $this->auth->app()->wa ?>"><i class="fab fa-whatsapp"></i></a>
                     <a href="<?= $this->auth->app()->github ?>"><i class="fab fa-github"></i></a>
                 </div>
             </div>
         </div>
     </div>
 </footer>
 <!-- ================ End footer Area ================= -->

 <script src="<?= base_url('frontend') ?>/vendors/jquery/jquery-3.2.1.min.js"></script>
 <script src="<?= base_url('frontend') ?>/vendors/bootstrap/bootstrap.bundle.min.js"></script>
 <script src="<?= base_url('frontend') ?>/vendors/owl-carousel/owl.carousel.min.js"></script>
 <script src="<?= base_url('frontend') ?>/vendors/Magnific-Popup/jquery.magnific-popup.min.js"></script>
 <script src="<?= base_url('frontend') ?>/js/jquery.ajaxchimp.min.js"></script>
 <script src="<?= base_url('frontend') ?>/js/mail-script.js"></script>
 <script src="<?= base_url('frontend') ?>/js/main.js"></script>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
 <script>
     const success = '<?= $this->session->flashdata('success') ?>';
     const error = '<?= $this->session->flashdata('error') ?>';
     if (success) {
         toastr.success("<?= $this->session->flashdata('success') ?>")
     }
     if (error) {
         toastr.error("<?= $this->session->flashdata('error') ?>")
     }

     $('.btn-like-this-page').click(function(e) {
         e.preventDefault();
         const visitor = 1;
         $.ajax({
             url: '<?= base_url('beranda/likethispage') ?>',
             type: 'POST',
             data: {
                 visitor: visitor
             },
             dataType: 'json',
             success: function(data) {
                 toastr.success("Saya suka ini!");
             }
         })
     })
 </script>