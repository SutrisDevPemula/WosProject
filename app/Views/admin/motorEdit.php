<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>

<section class="section">
    <h1 class="section-header">
        <div>Daftar User</div>
    </h1>

    <div class="container">
        <!-- insert data -->
        <div class="row bg-white p-2 justify-content-center mb-3">
            <div class="col-lg-12">
                <form method="post" action="">
                    <div class="mb-3">
                        <label for="jenis_motor" class="form-label">Jenis Motor</label>
                        <input type="text" class="form-control" id="id_motor" name="id_motor" hidden value="<?= $motor['id_motor']; ?>">
                        <input type="text" class="form-control" id="jenis_motor" name="jenis_motor" value="<?= $motor['jenis_motor']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="merk_motor" class="form-label">Merk Motor</label>
                        <input type="text" class="form-control" id="merk_motor" name="merk_motor" value="<?= $motor['merk_motor']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="tipe_motor" class="form-label">Tipe Motor</label>
                        <input type="text" class="form-control" id="tipe_motor" name="tipe_motor" value="<?= $motor['tipe_motor']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="warna_motor" class="form-label">Warna Motor</label>
                        <input type="text" class="form-control" id="warna_motor" name="warna_motor" value="<?= $motor['warna_motor']; ?>">
                    </div>
                    <button type="submit" class="btn btn-primary" name="save">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>