<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $this->auth->app()->name ?></title>
    <!-- Fonts and icons -->
    <script src="<?= base_url('admin') ?>/assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Lato:300,400,700,900"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
                urls: ['<?= base_url('admin') ?>/assets/css/fonts.min.css']
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <link rel="stylesheet" href="<?= base_url('admin') ?>/assets/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
    <style>
        html,
        body {
            height: 100%;
            background-color: #21D4FD;
            background-image: linear-gradient(19deg, #21D4FD 0%, #B721FF 100%);

        }

        .card-login {
            box-shadow: 0px 0px 15px 10px rgba(0, 0, 0, .25);
        }

        .title-login {
            color: lime;
            text-shadow: 0px 2px 2px grey;
        }

        .text-lime {
            color: lime;
        }

        .text-salmon {
            color: salmon;
        }

        .btn-lime {
            background-color: lime;
            color: white;
        }

        .login-footer-left {
            position: absolute;
            left: 20px;
            bottom: 5px;
        }
    </style>
</head>

<body>