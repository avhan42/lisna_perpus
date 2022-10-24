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
                                Data Buku
                            </h1>
                            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                                <ol class="breadcrumb breadcrumb-alt">
                                    <li class="breadcrumb-item">Dashboard</li>
                                    <li class="breadcrumb-item" aria-current="page">
                                        <a class="link-fx" href="">Data Buku</a>
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
                            <a href="<?= base_url('buku/tambah/') ?>" class="btn btn-primary btn-sm"><i class="far fa-plus-square"></i> Tambah Data Buku</a>
                            
                        </div>
                        <div class="block-content block-content-full">
                            <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                            <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="width: 80px;">No</th>
                                        <th>Judul Buku</th>
                                        <th class="d-none d-sm-table-cell" style="width: 30%;">Penulis</th>
                                        <th class="d-none d-sm-table-cell" style="width: 15%;">Gambar</th>
                                        <th style="width: 15%;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $no=1;
                                    foreach($buku as $b): ?>
                                    <tr>
                                        <td class="text-center font-size-sm"><?= $no++ ?></td>
                                        <td class="font-w600 font-size-sm">
                                            <?= $b['judul']; ?>
                                        </td>
                                        <td class="d-none d-sm-table-cell font-size-sm">
                                            <?= $b['penulis']; ?>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <?php 
                                            if($b['gambar'] != NULL){?>
                                            <img src="<?= base_url() ?>/uploads/<?= $b['gambar'] ?>" alt="<?= $b['judul']; ?>" width="100" height="100">
                                            <?php }else{ ?>
                                                <span class="badge badge-danger"> Belum Ada Gambar</span>
                                                <?php } ?>
                                        </td>
                                        <td>
                                            <!-- <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modalEditBuku"><i class="far fa-edit"></i></button> -->
                                            <a href="<?= base_url() ?>/buku/edit/<?= $b['id_buku']; ?>" class="btn btn-info btn-sm"><i class="far fa-edit"></i></a>
                                            <a href="<?= base_url() ?>/buku/delete/<?= $b['id_buku']; ?>" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></a>

                                            <!-- <a href="<?= base_url() ?>buku/edit/<?= $b['id_buku'];?>" class="btn btn-info btn-sm"><i class="far fa-edit"></i></a> -->
                                            <!-- <a href="<?= base_url() ?>buku/delete/<?= $b['id_buku']; ?>" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></a> -->
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
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

