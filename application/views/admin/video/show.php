<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Video</h4>
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
                        <a href="#">Video</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-table-data">
                        <div class="card-header">
                            <h4 class="card-title">Memutar Video
                                <a href="<?= base_url('video') ?>" class="btn btn-success btn-sm float-right">Kembali</a>
                            </h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                    <iframe src="<?= base_url('admin') ?>/assets/files/video/<?= $video->video ?>" class="embed-responsive-item" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>