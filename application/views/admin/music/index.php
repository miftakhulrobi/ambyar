<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Music</h4>
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
                        <a href="#">Files</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Music</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-table-data">
                        <div class="card-header">
                            <h4 class="card-title">Semua Lagu
                                <a href="#" data-toggle="modal" data-target="#create" class="btn btn-success btn-sm float-right">Tambah Lagu</a>
                            </h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="basic-datatables" class="display table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>MP3</th>
                                            <th>Di upload</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($music as $m) : ?>
                                            <tr>
                                                <td>
                                                    <audio src="<?= base_url('admin') ?>/assets/files/music/<?= $m->audio ?>" controls></audio>
                                                    <br>
                                                    <?= $m->audio ?>
                                                </td>
                                                <td><?= $m->name ?></td>
                                                <td>
                                                    <a href="#" music_id="<?= $m->music_id ?>" class="btn btn-success btn-sm hapus">Hapus</a>
                                                </td>
                                            </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createLabel">Tambah Lagu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('music/store') ?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="file" name="audio" class="form-control input-border-bottom" required>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
                </form>
            </div>
        </div>
    </div>