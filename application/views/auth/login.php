<div class="wrapper">
    <div class="main-panel">
        <div class="container">
            <div class="row justify-content-center mt-2">
                <div class="col-md-5">
                    <h3 class="text-center mt-5 title-login">Silahkan Login!</h3>
                    <div class="card mt-5 card-login">
                        <div class="card-body">
                            <p class="text-center">Login sesuai session anda</p>
                            <div class="form-login m-3">
                                <form action="<?= base_url('auths/postlogin') ?>" method="POST">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                                    </div>
                                    <div class="form-group text-center">
                                        <button type="submit" class="btn btn-lime mt-1">Login</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                    <div class="text-form-footer mt-3">
                        <a class="text-white" href="<?= base_url('/') ?>">Beranda</a>
                        <a class="text-white float-right" href="<?= base_url('auths/register') ?>">Register</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>