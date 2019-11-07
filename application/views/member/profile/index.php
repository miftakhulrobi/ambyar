<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Pesan</h4>
                <ul class="breadcrumbs">
                    <li class="nav-home">
                        <a href="#">
                            <i class="flaticon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Kontak</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Pesan</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-profile card-table-data">
                        <div class="card-header" style="background-image: url('<?= base_url('admin') ?>/assets/img/blogpost.jpg')">
                            <div class="profile-picture">
                                <div class="avatar avatar-xl">
                                    <?php if (!$this->auth->user()->avatar) : ?>
                                        <img src="<?= base_url('admin') ?>/assets/img/user/admin.jpg" alt="..." class="avatar-img rounded-circle">
                                    <?php else : ?>
                                        <img src="<?= base_url('admin') ?>/assets/files/avatar/<?= $this->auth->user()->avatar ?>" alt="..." class="avatar-img rounded-circle">
                                    <?php endif ?>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="user-profile text-center">
                                <div class="name"><?= $this->auth->user()->name ?></div>
                                <div class="job"><?= $this->auth->user()->role ?></div>
                                <div class="desc"><?= $this->auth->user()->email ?></div>

                                <div class="view-profile">
                                    <a href="#" class="btn btn-secondary btn-block btn-edit-profile" style="margin-bottom: 4px">Edit Profile</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-8 card-update-profile">
                    <div class="card card-table-data">
                        <div class="card-header">
                            <h4 class="card-title">Perbarui Profile

                            </h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <form action="<?= base_url('profilemember/update') ?>" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" value="<?= $this->auth->user()->name ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="file" name="avatar" class="form-control">
                                    </div>
                                    <div class="form-group mt-4">
                                        <button type="submit" class="btn btn-success">Perbarui</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 card-my-table-data">
                    <div class="row">
                        <div class="col-sm-6 col-md-4">
                            <div class="card card-stats card-primary card-round card-stats-hover">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="icon-big text-center">
                                                <i class="flaticon-customer-support flaticon-stats-hover"></i>
                                            </div>
                                        </div>
                                        <div class="col-7 col-stats">
                                            <div class="numbers">
                                                <p class="card-category">Lagu Saya</p>
                                                <h4 class="card-title"><?= $cmusic ?></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="card card-stats card-info card-round card-stats-hover">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="icon-big text-center">
                                                <i class="flaticon-youtube flaticon-stats-hover"></i>
                                            </div>
                                        </div>
                                        <div class="col-7 col-stats">
                                            <div class="numbers">
                                                <p class="card-category">Video Saya</p>
                                                <h4 class="card-title"><?= $cvideo ?></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="card card-stats card-success card-round card-stats-hover">
                                <div class="card-body ">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="icon-big text-center">
                                                <i class="flaticon-interface-6 flaticon-stats-hover"></i>
                                            </div>
                                        </div>
                                        <div class="col-7 col-stats">
                                            <div class="numbers">
                                                <p class="card-category">Post Saya</p>
                                                <h4 class="card-title"><?= $cblog ?></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12">
                            <div class="card card-stats card-warning card-round card-stats-hover">
                                <div class="card-body ">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="icon-big text-center">
                                                <i class="flaticon-time flaticon-stats-hover"></i>
                                            </div>
                                        </div>
                                        <div class="col-7 col-stats">
                                            <div class="numbers">
                                                <p class="card-category">Bergabung Pada</p>
                                                <h4 class="card-title"><?= date('H:i, D, d M Y', strtotime($this->auth->user()->created_at)) ?></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- <div class="modal fade" id="show" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="showLabel">Tampil Pesan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h3>Dari : <span class="message-name"></span></h3>
                    <small><span class="message-email text-success"></span> | <span class="message-phone text-success"></span></small>
                    <div class="message-content-show mt-3">
                        <p class="message-message"></p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close">Okay</button>
                </div>
            </div>
        </div>
    </div> -->