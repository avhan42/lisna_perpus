<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>
<main id="main-container">

<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill h3 my-2">
                Edit Data Kategori
            </h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-alt">
                    <li class="breadcrumb-item">Kategori</li>
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
            <form action="<?= base_url() ?>/kategori/edit_proses/<?= $kateg['id'] ?>" method="POST" >
                <div class="block">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Tambah Data</h3>
                      
                    </div>
                    <div class="block-content">
                        <div class="row justify-content-center">
                            <div class="col-sm-10 col-md-8">
                                <div class="form-group">
                                  <label>Buku</label>
                                  <select name="buku" id="buku" class="form-control">
                                    <?php foreach($kat as $k): ?>
                                    <option value="<?= $kateg['id_buku'] ?>"><?= $k['judul'] ?></option>
                                    <?php endforeach; ?>
                                    <?php foreach($buku as $data): ?>
                                    <option value="<?= $data['id_buku'] ?>"><?= $data['judul'] ?></option>
                                    <?php endforeach; ?>
                                  </select>
                                </div>
                                <div class="form-group">
                                    <label>Kategori</label>
                                    <input type="text" name="kateg" class="form-control" value="<?= $kateg['kategori'] ?>">
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="simpan" class="btn btn-outline-primary btn-sm">Update</button>
                                    <button type="reset" name="simpan" class="btn btn-outline-danger btn-sm">Reset</button>
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