<div class="wrapper">
    <div class="main-panel">
        <div class="container">
            <div class="row justify-content-center mt-2">
                <div class="col-md-5">
                    <h3 class="text-center mt-5 title-login">Silahkan Mendaftar!</h3>
                    <div class="card mt-5 card-login">
                        <div class="card-body">
                            <p class="text-center">Masukan data anda yang sebenarnya</p>
                            <div class="form-login m-3">
                                <form action="<?= base_url('auths/postregister') ?>" method="POST">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Nama Anda" required>
                                        <small class="text-success name-success"></small>
                                        <small class="text-danger name-danger"></small>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                                        <small class="text-success email-success"></small>
                                        <small class="text-danger email-danger"></small>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                                        <small class="text-success password-success"></small>
                                        <small class="text-danger password-danger"></small>
                                    </div>
                                    <div class="form-group text-center">
                                        <button type="submit" class="btn btn-lime mt-1 btn-sign-up">Daftar</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                    <div class="text-form-footer mt-3">
                        <a class="text-white" href="<?= base_url('/') ?>">Beranda</a>
                        <a class="text-white float-right" href="<?= base_url('auths/login') ?>">Login</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<script src="<?= base_url('admin') ?>/assets/js/core/jquery.3.2.1.min.js"></script>
<script>
    $(document).ready(function() {
        $('[name="name"]').keyup(function() {
            if (this.value.length < 5) {
                $('.name-success').text('');
                $('.name-danger').text('Minimal 5 karakter!');
                $('.btn-sign-up').attr('disabled', 'disabled');
            } else {
                $('.name-success').text('Nice');
                $('.name-danger').text('');
                $('.btn-sign-up').removeAttr('disabled');
            }
        })
        $('[name="email"]').keyup(function() {
            if (this.value.length < 15) {
                $('.email-success').text('');
                $('.email-danger').text('Minimal 15 karakter!');
                $('.btn-sign-up').attr('disabled', 'disabled');
            } else {
                $('.email-success').text('Nice');
                $('.email-danger').text('');
                $('.btn-sign-up').removeAttr('disabled');
            }
        })
        $('[name="password"]').keyup(function() {
            if (this.value.length < 6) {
                $('.password-success').text('');
                $('.password-danger').text('Minimal 6 karakter!');
                $('.btn-sign-up').attr('disabled', 'disabled');
            } else {
                $('.password-success').text('Nice');
                $('.password-danger').text('');
                $('.btn-sign-up').removeAttr('disabled');
            }
        })
    })
</script>