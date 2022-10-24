<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>
<main id="main-container">

<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill h3 my-2">
                Tambah Data Anggota
            </h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-alt">
                    <li class="breadcrumb-item">Anggota</li>
                    <li class="breadcrumb-item" aria-current="page">
                        <a class="link-fx" href="">Tambah Data</a>
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
            <form action="<?= base_url('anggota/tambah_proses/'); ?>" method="POST" >
                <div class="block">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Tambah Data</h3>
                      
                    </div>
                    <div class="block-content">
                        <div class="row justify-content-center">
                            <div class="col-sm-10 col-md-8">
                                <div class="form-group">
                                  <label>Nama</label>
                                  <input type="text" name="nama" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Umur</label>
                                    <input type="text" name="umur" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <textarea name="alamat" id="alamat" cols="30" rows="5" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="simpan" class="btn btn-outline-primary btn-sm">Simpan</button>
                                    <a class="btn btn-outline-danger btn-sm" href="<?= base_url('anggota') ?>">Cancel</a>
                                    <!-- <button type="reset" name="simpan" class="btn btn-outline-danger btn-sm">Reset</button> -->
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