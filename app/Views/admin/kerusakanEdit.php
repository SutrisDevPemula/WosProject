<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>

<section class="section">
    <h1 class="section-header">
        <div>Daftar Data Kerusakan Motor</div>
    </h1>

    <div class="container">
        <!-- insert data -->
        <div class="row bg-white p-2 justify-content-center mb-3">
            <div class="col-lg-12">
                <form method="post" action="">
                    <div class="mb-3">
                        <label for="id_motor" class="form-label">Pilih Motor</label>
                        <input class="form-control" list="datalistOptions" id="id_motor" placeholder="<?= $kerusakan['id_motor']; ?>" name="id_motor">
                        <datalist id="datalistOptions">
                            <?php foreach ($motor as $motor) : ?>
                                <option value="<?= $motor['id_motor']; ?>"><?= $motor['merk_motor']; ?>, <?= $motor['tipe_motor']; ?>, <?= $motor['warna_motor']; ?></option>
                            <?php endforeach; ?>
                        </datalist>
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <input type="text" class="form-control" id="id_kerusakan" name="id_kerusakan" hidden value="<?= $kerusakan['id_kerusakan']; ?>">
                        <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="<?= $kerusakan['deskripsi']; ?>">
                    </div>
                    <div class=" mb-3">
                        <label for="no_part" class="form-label">No. Part</label>
                        <input type="text" class="form-control" id="no_part" name="no_part" value="<?= $kerusakan['no_part']; ?>">
                    </div>
                    <button type=" submit" class="btn btn-primary" name="save">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>