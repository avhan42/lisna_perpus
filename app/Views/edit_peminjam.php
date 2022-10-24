<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>
<main id="main-container">

<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill h3 my-2">
                Edit Data Peminjam
            </h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-alt">
                    <li class="breadcrumb-item">Peminjam</li>
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
            <?php foreach($pinjam as $data): ?>
            <form action="<?= base_url('peminjam/edit_proses/'.$data['id_peminjam']); ?>" method="POST" >
                <div class="block">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Edit Data</h3>
                      
                    </div>
                    <div class="block-content">
                        <div class="row justify-content-center">
                            <div class="col-sm-10 col-md-8">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" name="nama" class="form-control" value="<?= $data['nama'] ?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label>Buku</label>
                                    <input type="text" name="buku" class="form-control" value="<?= $data['judul'] ?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Pinjam</label>
                                    <input type="text" name="pinjam" class="form-control" value="<?= $data['tgl_pinjam'] ?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Kembali</label>
                                    <input type="date" name="kembali" class="form-control" value="<?= $data['tgl_kembali'] ?>">
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="simpan" class="btn btn-outline-primary btn-sm">Simpan</button>
                                    <a class="btn btn-outline-danger btn-sm" href="<?= base_url('peminjam') ?>">Cancel</a>
                                    <!-- <button type="reset" name="simpan" class="btn btn-outline-danger btn-sm">Reset</button> -->
                                </div>
                        </div>
                        
                    </div>
                </div>
            </form>
            <?php endforeach; ?>
        </div>
    </div>
    <!-- END Form Submission in Options -->
</div>
<!-- END Page Content -->

</main>
<!-- END Main Container -->
<?= $this->endSection(); ?>
    

