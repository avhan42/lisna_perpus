<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<main id="main-container">

<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill h3 my-2">
                Tambah Data Buku
            </h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-alt">
                    <li class="breadcrumb-item">Buku</li>
                    <li class="breadcrumb-item" aria-current="page">
                        <a class="link-fx" href="">Edit Data</a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
    <!-- Form Submission in Options -->
    <div class="row">
        <div class="col-md-6">

            <form action="<?= base_url() ?>/buku/edit_proses/<?= $buku['id_buku'] ?>" method="POST" enctype="multipart/form-data">
                <div class="block">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Edit Data</h3>
                      
                    </div>
                    <div class="block-content">
                        <div class="row justify-content-center">
                            <div class="col-sm-10 col-md-8">
                                <div class="form-group">
                                    <label for="judul">Judul Buku</label>
                                    <input type="text" class="form-control" id="judul" name="judul" value="<?= $buku['judul'] ?>">
                                    <input type="hidden" value="<?= $buku['judul']; ?>" name="id">
                                </div>
                                <div class="form-group">
                                    <label for="penulis">Penulis</label>
                                    <input type="text" class="form-control" id="penulis" name="penulis" value="<?= $buku['penulis'] ?>">
                                </div>
                                <div class="thumbnail">
                                   <?php
                                   if($buku['gambar'] != NULL):?>
                                   <img src="<?= base_url() ?>/uploads/<?= $buku['gambar'] ?>" alt="<?= $buku['judul'] ?>" width="100" height="100">
                                   <?php else: ?>
                                    <span class="badge badge-danger">Belum Ada Gambar</span>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group">
                                    <label for="gambar">Gambar</label>
                                    <input type="file" class="form-control" id="gambar" name="gambar" value="<?= $buku['gambar'] ?>">
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="update" class="btn btn-outline-primary btn-sm">Update</button>
                                    <button type="reset" name="reset" class="btn btn-outline-danger btn-sm">Reset</button>
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
            </form>

        </div>
    </div>
    <!-- END Form Submission in Options -->
</div>
<!-- END Page Content -->

</main>
<!-- END Main Container -->

<?= $this->endSection(); ?>