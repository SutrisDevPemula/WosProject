<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>

<section class="section">
    <div class="section-header">
        <h2 class="float-start">DAFTAR TUGAS</h2>
        <a href="<?= base_url('admin/addTugas'); ?>" class="btn btn-primary float-end">Tambah tugas</a>
    </div>
    <div class="container">
        <div class="row mb-3">
            <label for="filter" class="form-label">Filter</label>
            <div class="col-md-6"><input type="date" class="form-control" id="filter"></div>
        </div>
        <div class="row">
            <?php foreach ($ekspedisi as $ekspedisi) : ?>
                <div class="col-lg-6">
                    <div class="card bg-warning">
                        <div class="card-body text-white">
                            <span style="float: right"><?= $ekspedisi['tanggal']; ?></span>
                            <span style="float: left"><?= $ekspedisi['nama_petugas']; ?></span>
                            <h5 class="card-title mt-5"><?= $ekspedisi['nama']; ?></h5>
                            <p class="card-text"><?= $ekspedisi['nopol']; ?></p>
                        </div>
                        <div class="card-footer bg-light p-2">
                            <span class="ms-2 text-warning"><b>Pending</b></span>
                            <div class="btn-group float-end" role="group" aria-label="Basic mixed styles example">
                                <a href="<?= base_url('admin/preview/' . $ekspedisi['key'] . '/ekspedisi'); ?>" type="button" class="btn btn-light btn-outline-secondary">Preview</a>
                                <button type="button" class="btn btn-light btn-outline-secondary">Tolak</button>
                                <button type="button" class="btn btn-success btn-outline-secondary text-white">Terima</button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    </div>
</section>
<?= $this->endSection(); ?>