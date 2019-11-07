<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Member Baru</h4>
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
                        <a href="#">Notifikasi</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Member</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-table-data">
                        <div class="card-header">
                            <h4 class="card-title">Semua Data

                            </h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <?php foreach ($notif as $c) : ?>
                                    <div class="message-item m-3" data-toggle="modal" data-target="#show" notif_id="<?= $c->notif_id ?>">
                                        <h4><?= $c->name ?></h4>
                                        <div class="message-content">
                                            <span>
                                                <?php if ($c->open == 0) : ?>
                                                    <b><?= $c->email ?></b>
                                                <?php else : ?>
                                                    <?= $c->email ?>
                                                <?php endif ?>
                                                <small class="float-right"><?= date('H:i, D, d M Y', strtotime($c->created_at)) ?></small>
                                            </span>
                                        </div>
                                    </div>
                                <?php endforeach ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="show" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="showLabel">Member Baru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h3>Nama : <span class="message-name"></span></h3>
                    <small><span class="message-email text-success"></span> | Mendaftar: <span class="message-phone text-success"></span></small>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close">Okay</button>
                </div>
            </div>
        </div>
    </div>