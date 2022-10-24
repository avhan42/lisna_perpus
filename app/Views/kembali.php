<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<?php if(!empty(session()->getFlashdata('berhasil'))): ?>
    <script>
        toastr.success("<?= session()->getFlashdata('berhasil') ?>");
    </script>
<?php endif; ?>
<!-- Main Container -->
            <main id="main-container">
                <!-- Hero -->
                <div class="bg-body-light">
                    <div class="content content-full">
                        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                            <h1 class="flex-sm-fill h3 my-2">
                                Data Pengembalian Pinjaman
                            </h1>
                            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                                <ol class="breadcrumb breadcrumb-alt">
                                    <li class="breadcrumb-item">Dashboard</li>
                                    <li class="breadcrumb-item" aria-current="page">
                                        <a class="link-fx" href="">Data Pinjaman Kembali</a>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- END Hero -->

                <!-- Page Content -->
                <div class="content">
                    <!-- Dynamic Table Full -->
                    <div class="block">
                        <div class="block-header">
                            <!-- <h3 class="block-title">Dynamic Table <small>Full</small></h3> -->
                            <!-- <button type="button" class="btn btn-primary btn-sm psuh" data-toggle="modal" data-target="#modalTambahBuku"><i class="far fa-plus-square"></i> Tambah Data Buku </button> -->
                            <a href="<?= base_url('kembali/tambah/') ?>" class="btn btn-primary btn-sm"><i class="far fa-plus-square"></i> Tambah Data Peminjam</a>
                            
                        </div>
                        <div class="block-content block-content-full">
                            <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                            <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="width: 80px;">No</th>
                                        <th>Nama</th>
                                        <th>Buku</th>
                                        <th>Tanggal Kembali</th>
                                        <!-- <th style="width: 15%;">Aksi</th> -->
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- END Dynamic Table Full -->
                </div>
                <!-- END Page Content -->

            </main>
            <!-- END Main Container -->

            <?= $this->endSection(); ?>

