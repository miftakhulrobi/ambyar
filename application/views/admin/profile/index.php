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
                <div class="col-md-12">
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
                <div class="col-md-8">
                    <div class="card card-table-data">
                        <div class="card-header">
                            <h4 class="card-title">Perbarui Profile

                            </h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <form action="<?= base_url('profile/update') ?>" method="POST" enctype="multipart/form-data">
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
            </div>
        </div>
    </div>