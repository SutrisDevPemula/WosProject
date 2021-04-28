<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>

<section class="section">
    <h1 class="section-header">
        <div>DAFTAR TUGAS</div>
    </h1>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="card bg-warning">
                    <div class="card-body text-white">
                        <span style="float: right">2021-04-01</span>
                        <span style="float: left">Putu Eka</span>
                        <h5 class="card-title mt-5">PT. Sinar Jaya</h5>
                        <p class="card-text">DR2458EA</p>
                    </div>
                    <div class="card-footer bg-light p-2">
                        <span class="ms-2 text-warning"><b>Pending</b></span>
                        <div class="btn-group float-end" role="group" aria-label="Basic mixed styles example">
                            <button type="button" class="btn btn-light btn-outline-secondary">Preview</button>
                            <button type="button" class="btn btn-light btn-outline-secondary">Tolak</button>
                            <button type="button" class="btn btn-success btn-outline-secondary">Terima</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<?= $this->endSection(); ?>