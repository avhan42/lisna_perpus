<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>Login | Aplikasi Perpustakaan</title>


        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="<?= base_url() ?>/assets/media/favicons/favicon.png">
        <link rel="icon" type="image/png" sizes="192x192" href="<?= base_url() ?>/assets/media/favicons/favicon-192x192.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url() ?>/assets/media/favicons/apple-touch-icon-180x180.png">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Fonts and OneUI framework -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
        <link rel="stylesheet" id="css-main" href="<?= base_url() ?>/assets/css/oneui.min.css">

        <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
        <!-- <link rel="stylesheet" href="<?= base_url() ?>/assets/toastr.min.css"> -->
        <link rel="stylesheet" href="<?= base_url() ?>/assets/toastr.css">
        <script src="<?= base_url() ?>/assets/toastr.min.js"></script>
        <!-- END Stylesheets -->
    </head>
    <body>
        <!-- Page Container -->
        
<div id="page-container">

<?php if(!empty(session()->getFlashdata('msg'))): ?>
    <script>
        toastr.error("<?= session()->getFlashdata('msg') ?>");
    </script>
<?php endif; ?>
<!-- Main Container -->
<main id="main-container">

    <!-- Page Content -->
<div class="bg-image" style="background-image: url('<?= base_url() ?>/assets/media/photos/photo6@2x.jpg');">
<div class="hero-static bg-white-95">
<div class="content">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6 col-xl-4">
            <!-- Sign In Block -->
            <div class="block block-themed block-fx-shadow mb-0">
                <div class="block-header">
                    <h3 class="block-title">Masuk </h3>
                    <div class="block-options">
       
    </div>
                </div>
                <div class="block-content">
                    <div class="p-sm-3 px-lg-4 py-lg-5">
                        <h1 class="mb-2">Perpustakaan AMIK GLOBAL</h1>
                        <p>Silahkan Masuk Terlebih Dahulu.</p>

                        <!-- Sign In Form -->
                        <!-- jQuery Validation (.js-validation-signin class is initialized in js/pages/op_auth_signin.min.js which was auto compiled from _es6/pages/op_auth_signin.js) -->
                        <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
    <form class="js-validation-signin" action="" method="POST">
        <div class="py-3">
            <div class="form-group">
                <input type="text" class="form-control form-control-alt form-control-lg" id="login-username" name="username" placeholder="Username">
            </div>
            <div class="form-group">
                <input type="password" class="form-control form-control-alt form-control-lg" name="password" placeholder="Password">
            </div>

        </div>
        <div class="form-group row">
            <div class="col-md-6 col-xl-5">
                <button type="submit" class="btn btn-block btn-primary">
                    <i class="fa fa-fw fa-sign-in-alt mr-1"></i> Masuk
                </button>
            </div>
            <div class="col-md-6 col-xl-5">
                <a href="daftar" class="btn btn-block btn-danger">
                     Daftar <i class="fa fa-fw fa-sign-in-alt mr-1"></i>
                </a>
            </div>
        </div>
    </form>
                        <!-- END Sign In Form -->
                    </div>
                </div>
            </div>
            <!-- END Sign In Block -->
        </div>
    </div>
</div>
<div class="content content-full font-size-sm text-muted text-center">
    <strong>Lisna</strong> &copy; <span data-toggle="year-copy"></span>
</div>
</div>
</div>
    <!-- END Page Content -->

</main>
<!-- END Main Container -->
</div>
        <!-- END Page Container -->

        <!--
            OneUI JS Core

            Vital libraries and plugins used in all pages. You can choose to not include this file if you would like
            to handle those dependencies through webpack. Please check out <?= base_url() ?>/assets/_es6/main/bootstrap.js for more info.

            If you like, you could also include them separately directly from the <?= base_url() ?>/assets/js/core folder in the following
            order. That can come in handy if you would like to include a few of them (eg jQuery) from a CDN.

            <?= base_url() ?>/assets/js/core/jquery.min.js
            <?= base_url() ?>/assets/js/core/bootstrap.bundle.min.js
            <?= base_url() ?>/assets/js/core/simplebar.min.js
            <?= base_url() ?>/assets/js/core/jquery-scrollLock.min.js
            <?= base_url() ?>/assets/js/core/jquery.appear.min.js
            <?= base_url() ?>/assets/js/core/js.cookie.min.js
        -->
        <script src="<?= base_url() ?>/assets/js/oneui.core.min.js"></script>

        <!--
            OneUI JS

            Custom functionality including Blocks/Layout API as well as other vital and optional helpers
            webpack is putting everything together at <?= base_url() ?>/assets/_es6/main/app.js
        -->
        <script src="<?= base_url() ?>/assets/js/oneui.app.min.js"></script>

        <!-- Page JS Plugins -->
        <script src="<?= base_url() ?>/assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>

        <!-- Page JS Code -->
        <script src="<?= base_url() ?>/assets/js/pages/op_auth_signin.min.js"></script>
    </body>
</html>