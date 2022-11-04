
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>Aplikasi Perpustakaan AMIK Global Kendari</title>

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

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="<?= base_url() ?>/assets/css/themes/amethyst.min.css"> -->
        <!-- END Stylesheets -->
    </head>
    <body>
        <!-- Page Container -->
        
        <div id="page-container">
            <!-- Side Overlay-->
          

            <!-- Main Container -->
            <main id="main-container">

                <!-- Page Content -->
                <div class="content">
                    <div class="row">
                        <div class="col-md-5 col-xl-3">
                            <!-- Toggle Inbox Side Navigation -->
                            <div class="d-md-none push">
                                <!-- Class Toggle, functionality initialized in Helpers.coreToggleClass() -->
                                <button type="button" class="btn btn-block btn-primary" data-toggle="class-toggle" data-target="#one-inbox-side-nav" data-class="d-none">
                                    Menu
                                </button>
                            </div>
                            <!-- END Toggle Inbox Side Navigation -->

                            <!-- Inbox Side Navigation -->
                            <div id="one-inbox-side-nav" class="d-none d-md-block push">
                                <!-- Inbox Menu -->
                                <div class="block">
                                    <div class="block-header block-header-default">
                                        <h3 class="block-title">Info</h3>
                                        
                                    </div>
                                    <div class="block-content">
                                        <ul class="nav nav-pills flex-column font-size-sm push">
                                            <li class="nav-item my-1">
                                                <a class="nav-link d-flex justify-content-between align-items-center active" href="">
                                                    <span>
                                                        <i class="fa fa-fw fa-inbox mr-1"></i> Buku 
                                                    </span>
                                                    <span class="badge badge-pill badge-secondary">1</span>
                                                </a>
                                            </li>
                                            <li class="nav-item my-1">
                                                <a class="nav-link d-flex justify-content-between align-items-center " href="">
                                                    <span>
                                                        <i class="fa fa-fw fa-inbox mr-1"></i> Buku Di Pinjam
                                                    </span>
                                                    <span class="badge badge-pill badge-secondary">1</span>
                                                </a>
                                            </li>
                                            <li class="nav-item my-1">
                                                <a class="nav-link d-flex justify-content-between align-items-center" href="javascript:void(0)">
                                                    <span>
                                                        <i class="fa fa-fw fa-star mr-1"></i> Buku Di Kembalikan
                                                    </span>
                                                    <span class="badge badge-pill badge-secondary">1</span>
                                                </a>
                                            </li>
                                           
                                        </ul>
                                    </div>
                                </div>
                                <!-- END Inbox Menu -->


                                <!-- Account -->
                                <div class="block">
                                    <div class="block-header block-header-default">
                                        <h3 class="block-title">Account</h3>
                                        <div class="block-options">
                                            <a href="logout" class="btn-block-option">
                                                <i class="si si-logout"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="block-content">
                                        <!-- Easy Pie Chart (.js-pie-chart class is initialized in Helpers.easyPieChart()) -->
                                        <!-- For more info and examples you can check out http://rendro.github.io/easy-pie-chart/ -->
                                        <!-- Pie Chart Container -->
                                        <div class="js-pie-chart pie-chart push" data-percent="35" data-line-width="3" data-size="100" data-bar-color="#abe37d" data-track-color="#eeeeee" data-scale-color="#dddddd">
                                            <span>
                                                <img class="img-avatar" src="<?= base_url() ?>/assets/media/avatars/avatar12.jpg" alt="">
                                            </span>
                                        </div>
                                        <h3 class="text-center text-muted"><?= strtoupper(session()->get('username')); ?></h3>
                                        <p class="text-center text-muted">
                                            <?php if(session()->get('role') == 0){ 
                                                echo "USER";
                                                } ?>
                                        </p>
                                        <!-- <a class="block block-bordered block-rounded block-link-shadow" href="javascript:void(0)">
                                            <div class="block-content block-content-full text-center">
                                                <div class="push">
                                                    <i class="si si-like fa-2x text-success"></i>
                                                </div>
                                                <div class="font-size-h2 font-w700">
                                                    <span class="text-muted">+</span> 2.5TB
                                                </div>
                                                <div class="font-size-sm text-muted text-uppercase">Upgrade Now</div>
                                            </div>
                                        </a> -->
                                    </div>
                                </div>
                                <!-- END Account -->
                            </div>
                            <!-- END Inbox Side Navigation -->
                        </div>
                        <div class="col-md-7 col-xl-9">
                            <!-- Message List -->
                            <div class="block">
                                <div class="block-header block-header-default">
                                    <h3 class="block-title">Data Buku</h3>
                                </div>
                        <div class="block-content block-content-full">
                            <div class="table-responsive">
                            <table class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="width: 80px;">No</th>
                                        <th>Judul</th>
                                        <th>Penulis</th>
                                        <th>Gambar</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                               <tbody>
                                    <?php 
                                    $no=1;
                                    foreach($buku as $b):?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $b['judul'] ?></td>
                                        <td><?= $b['penulis'] ?></td>
                                        <td>
                                            <img src="<?= base_url() ?>/uploads/<?= $b['gambar'] ?>" width="50" height="50">
                                        </td>
                                        <td>
                                            <form action="pilih" method="post">
                                                <input type="hidden" value="<?= $b['id_buku'] ?>" name="id">
                                                <input type="hidden" value="<?= session()->get('id_user'); ?>" name="anggota">
                                                <button type="submit" class="btn btn-primary btn-sm" >Pilih</button>                
                                                <!-- <a href="pilih/<?= $b['id_buku'] ?>" class="btn btn-primary btn-sm">Pilih</a> -->
                                                <!-- <button type="submit" class="btn btn-info btn-sm" data-id="<?= $b['id_buku'] ?>">Pilih</button> -->
                                            </form>
                                            </td>
                                    </tr>
                                    <?php endforeach; ?>
                               </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                            <!-- END Message List -->
                        </div>
                    </div>
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            <footer id="page-footer" class="bg-body-light">
                <div class="content py-3">
                    <div class="row font-size-sm">
                        <div class="col-sm-6 order-sm-2 py-1 text-center text-sm-right">
                            Crafted with <i class="fa fa-heart text-danger"></i> by <a class="font-w600" href="https://1.envato.market/ydb" target="_blank">pixelcave</a>
                        </div>
                        <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-left">
                            <a class="font-w600" href="#" target="_blank">Lisna</a> &copy; <span data-toggle="year-copy"></span>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- END Footer -->

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
        <script src="<?= base_url() ?>/assets/js/plugins/easy-pie-chart/jquery.easypiechart.min.js"></script>

        <script src="<?= base_url() ?>/assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?= base_url() ?>/assets/js/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <script src="<?= base_url() ?>/assets/js/plugins/datatables/buttons/dataTables.buttons.min.js"></script>
        <script src="<?= base_url() ?>/assets/js/plugins/datatables/buttons/buttons.print.min.js"></script>
        <script src="<?= base_url() ?>/assets/js/plugins/datatables/buttons/buttons.html5.min.js"></script>
        <script src="<?= base_url() ?>/assets/js/plugins/datatables/buttons/buttons.flash.min.js"></script>
        <script src="<?= base_url() ?>/assets/js/plugins/datatables/buttons/buttons.colVis.min.js"></script>

        <!-- Page JS Code -->
        <script src="assets/js/pages/be_tables_datatables.min.js"></script>

        <!-- Page JS Helpers (Table Tools Checkable Helper + Easy Pie Chart Plugin) -->
        <script>jQuery(function(){ One.helpers(['table-tools-checkable', 'easy-pie-chart']); });</script>
    </body>
</html>
