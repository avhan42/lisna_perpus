<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>Lisna | Aplikasi Perpustakaan AMIK Global Kendari</title>

      
        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="<?= base_url() ?>/assets/media/favicons/favicon.png">
        <link rel="icon" type="image/png" sizes="192x192" href="<?= base_url() ?>/assets/media/favicons/favicon-192x192.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url() ?>/assets/media/favicons/apple-touch-icon-180x180.png">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <link rel="stylesheet" href="<?= base_url() ?>/assets/js/plugins/datatables/dataTables.bootstrap4.css">

        <!-- Fonts and OneUI framework -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
        <link rel="stylesheet" id="css-main" href="<?= base_url() ?>/assets/css/oneui.min.css">

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="<?= base_url() ?>/assets/css/themes/amethyst.min.css"> -->
        <!-- <script src="assets/js/plugins/bootstrap-notify/bootstrap-notify.min.js"></script> -->
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
        <!-- <link rel="stylesheet" href="<?= base_url() ?>/assets/toastr.min.css"> -->
        <link rel="stylesheet" href="<?= base_url() ?>/assets/toastr.css">
        <link rel="stylesheet" href="<?= base_url() ?>/assets/bootstrap-datepicker3.min.css">
        <script src="<?= base_url() ?>/assets/toastr.min.js"></script>

        <!-- END Stylesheets -->
    </head>
    <body>
        <!-- Page Container -->
        
        <div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed">

        <!-- Sidebar -->
            <!--
                Sidebar Mini Mode - Display Helper classes

                Adding 'smini-hide' class to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
                Adding 'smini-show' class to an element will make it visible (opacity: 1) when the sidebar is in mini mode
                    If you would like to disable the transition animation, make sure to also add the 'no-transition' class to your element

                Adding 'smini-hidden' to an element will hide it when the sidebar is in mini mode
                Adding 'smini-visible' to an element will show it (display: inline-block) only when the sidebar is in mini mode
                Adding 'smini-visible-block' to an element will show it (display: block) only when the sidebar is in mini mode
            -->
            <nav id="sidebar" aria-label="Main Navigation">
                <!-- Side Header -->
                <div class="content-header bg-white-5">
                    <!-- Logo -->
                    <a class="font-w600 text-dual" href="<?= base_url() ?>">
                        <i class="fa fa-circle-notch text-primary"></i>
                        <span class="smini-hide">
                            <span class="font-w700 font-size-h5"><?= session()->get('username') ?></span> <span class="font-w400">Perpus</span>
                        </span>
                    </a>
                    <!-- END Logo -->

                    <!-- Options -->
                    <div>
                        <!-- Color Variations -->
                        <div class="dropdown d-inline-block ml-3">
                            <a class="text-dual font-size-sm" id="sidebar-themes-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
                                <i class="si si-drop"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right font-size-sm smini-hide border-0" aria-labelledby="sidebar-themes-dropdown">
                                <!-- Color Themes -->
                                <!-- Layout API, functionality initialized in Template._uiHandleTheme() -->
                                <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="default" href="#">
                                    <span>Default</span>
                                    <i class="fa fa-circle text-default"></i>
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="assets/css/themes/amethyst.min.css" href="#">
                                    <span>Amethyst</span>
                                    <i class="fa fa-circle text-amethyst"></i>
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="assets/css/themes/city.min.css" href="#">
                                    <span>City</span>
                                    <i class="fa fa-circle text-city"></i>
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="assets/css/themes/flat.min.css" href="#">
                                    <span>Flat</span>
                                    <i class="fa fa-circle text-flat"></i>
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="assets/css/themes/modern.min.css" href="#">
                                    <span>Modern</span>
                                    <i class="fa fa-circle text-modern"></i>
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="assets/css/themes/smooth.min.css" href="#">
                                    <span>Smooth</span>
                                    <i class="fa fa-circle text-smooth"></i>
                                </a>
                                <!-- END Color Themes -->

                                <div class="dropdown-divider"></div>

                                <!-- Sidebar Styles -->
                                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                <a class="dropdown-item" data-toggle="layout" data-action="sidebar_style_light" href="#">
                                    <span>Sidebar Light</span>
                                </a>
                                <a class="dropdown-item" data-toggle="layout" data-action="sidebar_style_dark" href="#">
                                    <span>Sidebar Dark</span>
                                </a>
                                <!-- Sidebar Styles -->

                                <div class="dropdown-divider"></div>

                                <!-- Header Styles -->
                                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                <a class="dropdown-item" data-toggle="layout" data-action="header_style_light" href="#">
                                    <span>Header Light</span>
                                </a>
                                <a class="dropdown-item" data-toggle="layout" data-action="header_style_dark" href="#">
                                    <span>Header Dark</span>
                                </a>
                                <!-- Header Styles -->
                            </div>
                        </div>
                        <!-- END Themes -->

                        <!-- Close Sidebar, Visible only on mobile screens -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <a class="d-lg-none text-dual ml-3" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
                            <i class="fa fa-times"></i>
                        </a>
                        <!-- END Close Sidebar -->
                    </div>
                    <!-- END Options -->
                </div>
                <!-- END Side Header -->

                <!-- Side Navigation -->
                <div class="content-side content-side-full">
                    <ul class="nav-main">
                        <li class="nav-main-heading">Menu</li>
                        <li class="nav-main-item">
                            <a class="nav-main-link active" href="<?= base_url('/') ?>">
                                <i class="nav-main-link-icon si si-speedometer"></i>
                                <span class="nav-main-link-name">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link nav-main-link-submenu" href="<?= base_url('buku'); ?>">
                                <i class="nav-main-link-icon si si-energy"></i>
                                <span class="nav-main-link-name">Buku</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link nav-main-link-submenu" href="<?= base_url('kategori'); ?>">
                                <i class="nav-main-link-icon si si-badge"></i>
                                <span class="nav-main-link-name">Kategori</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link nav-main-link-submenu" href="<?= base_url('anggota'); ?>">
                                <i class="nav-main-link-icon si si-badge"></i>
                                <span class="nav-main-link-name">Anggota</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link nav-main-link-submenu" href="<?= base_url('peminjam'); ?>">
                                <i class="nav-main-link-icon si si-grid"></i>
                                <span class="nav-main-link-name">Data Peminjam</span>
                            </a>
                        </li>
                        <!-- <li class="nav-main-item">
                            <a class="nav-main-link nav-main-link-submenu" href="<?= base_url('kembali'); ?>">
                                <i class="nav-main-link-icon si si-note"></i>
                                <span class="nav-main-link-name">Data Pengembalian</span>
                            </a>
                           
                        </li> -->
                        
                    </ul>
                </div>
                <!-- END Side Navigation -->
            </nav>
            <!-- END Sidebar -->

             <!-- Header -->
 <header id="page-header">
                <!-- Header Content -->
                <div class="content-header">
                    <!-- Left Section -->
                    <div class="d-flex align-items-center">
                        <!-- Toggle Sidebar -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
                        <button type="button" class="btn btn-sm btn-dual mr-2 d-lg-none" data-toggle="layout" data-action="sidebar_toggle">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>
                        <!-- END Toggle Sidebar -->

                        <!-- Toggle Mini Sidebar -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
                        <button type="button" class="btn btn-sm btn-dual mr-2 d-none d-lg-inline-block" data-toggle="layout" data-action="sidebar_mini_toggle">
                            <i class="fa fa-fw fa-ellipsis-v"></i>
                        </button>
                        <!-- END Toggle Mini Sidebar -->

                        <!-- Apps Modal -->
                        <!-- Opens the Apps modal found at the bottom of the page, after footer’s markup -->
                      
                        <!-- END Apps Modal -->

                        <!-- Open Search Section (visible on smaller screens) -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        
                        <!-- END Open Search Section -->

                       
                    </div>
                    <!-- END Left Section -->

                    <!-- Right Section -->
                    <div class="d-flex align-items-center">
                        <!-- User Dropdown -->
                        <div class="dropdown d-inline-block ml-2">
                            <button type="button" class="btn btn-sm btn-dual" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded" src="<?= base_url() ?>/assets//media/avatars/avatar10.jpg" alt="Header Avatar" style="width: 18px;">
                                <span class="d-none d-sm-inline-block ml-1"><?= session()->get('username'); ?></span>
                                <i class="fa fa-fw fa-angle-down d-none d-sm-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right p-0 border-0 font-size-sm" aria-labelledby="page-header-user-dropdown">
                                <div class="p-3 text-center bg-primary">
                                    <img class="img-avatar img-avatar48 img-avatar-thumb" src="<?= base_url() ?>/assets//media/avatars/avatar10.jpg" alt="">
                                </div>
                                <div class="p-2">
                                    <div role="separator" class="dropdown-divider"></div>
                                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="<?= base_url('logout') ?>">
                                        <span>Log Out</span>
                                        <i class="si si-logout ml-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- END User Dropdown -->


                    </div>
                    <!-- END Right Section -->
                </div>
                <!-- END Header Content -->

                <!-- Header Search -->
                <div id="page-header-search" class="overlay-header bg-white">
                    <div class="content-header">
                        <form class="w-100" action="be_pages_generic_search.html" method="POST">
                            <div class="input-group input-group-sm">
                                <div class="input-group-prepend">
                                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                    <button type="button" class="btn btn-danger" data-toggle="layout" data-action="header_search_off">
                                        <i class="fa fa-fw fa-times-circle"></i>
                                    </button>
                                </div>
                                <input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END Header Search -->

                <!-- Header Loader -->
                <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
                <div id="page-header-loader" class="overlay-header bg-white">
                    <div class="content-header">
                        <div class="w-100 text-center">
                            <i class="fa fa-fw fa-circle-notch fa-spin"></i>
                        </div>
                    </div>
                </div>
                <!-- END Header Loader -->
            </header>
            <!-- END Header -->

            <?= $this->renderSection('content') ?>

             <!-- Footer -->
 <footer id="page-footer" class="bg-body-light">
                <div class="content py-3">
                    <div class="row font-size-sm">
                        <div class="col-sm-6 order-sm-2 py-1 text-center text-sm-right">
                            Theme created <i class="fa fa-heart text-danger"></i> by <a class="font-w600" href="https://1.envato.market/ydb" target="_blank">pixelcave</a>
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
        <script src="<?= base_url() ?>/assets/js/plugins/chart.js/Chart.bundle.min.js"></script>
         <!-- Page JS Plugins -->
         <script src="<?= base_url() ?>/assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?= base_url() ?>/assets/js/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <script src="<?= base_url() ?>/assets/js/plugins/datatables/buttons/dataTables.buttons.min.js"></script>
        <script src="<?= base_url() ?>/assets/js/plugins/datatables/buttons/buttons.print.min.js"></script>
        <script src="<?= base_url() ?>/assets/js/plugins/datatables/buttons/buttons.html5.min.js"></script>
        <script src="<?= base_url() ?>/assets/js/plugins/datatables/buttons/buttons.flash.min.js"></script>
        <script src="<?= base_url() ?>/assets/js/plugins/datatables/buttons/buttons.colVis.min.js"></script>

        <!-- Page JS Code -->
        <script src="<?= base_url() ?>/assets/js/pages/be_pages_dashboard.min.js"></script>

        <script src="<?= base_url() ?>/assets/js/pages/be_tables_datatables.min.js"></script>

        <script src="<?= base_url() ?>/assets/bootstrap-datepicker.min.js"></script>
        <!-- <script src="<?= base_url() ?>/assets/js/plugins/bootstrap-notify/bootstrap-notify.min.js"></script> -->

          <!-- Page JS Helpers (BS Notify Plugin) -->
        <!-- <script>jQuery(function(){ One.helpers('notify',{type:'success',icon:'fa fa-check mr-1',message:'Coba Notif'}); });</script> -->
    

    </body>
</html>