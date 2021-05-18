<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>

<section class="section">
    <h1 class="section-header">
        <div>Tambah Data DTl Ekspedisi</div>
    </h1>

    <div class="container">
        <div class="row bg-white p-2">
            <div class="col-lg-12">
                <form class="row g-4" action="" method="post">
                    <div class="col-md-2">
                        <label for="jenis" class="form-label">jenis Motor</label>
                        <input class="form-control" list="datalistOptions" id="jenis" name="jenis_motor" placeholder="Jenis Motor">
                        <datalist id="datalistOptions">
                            <?php foreach ($jenis as $jenis) : ?>
                                <option value="<?= $jenis; ?>"></option>
                            <?php endforeach; ?>
                        </datalist>
                    </div>
                    <div class="col-md-2">
                        <label for="merk" class="form-label">Merk Motor</label>
                        <input class="form-control" list="merkMotor" id="merk" name="merk_motor" placeholder="Merk Motor">
                        <datalist id="merkMotor">
                            <?php foreach ($merk as $merk) : ?>
                                <option value="<?= $merk; ?>"></option>
                            <?php endforeach; ?>
                        </datalist>
                    </div>
                    <div class="col-md-2">
                        <label for="jumlah" class="form-label">Jumlah</label>
                        <input type="number" class="form-control" name="jumlah" id="jumlah">
                    </div>
                    <div class="col">
                        <label for="submit" class="form-label"></label>
                        <button type="submit" class="btn btn-primary form-control mt-2" name="save">
                            <li class="fas fa-save"></li>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <a href="admin" type="submit" class="btn btn-outline-secondary mt-2 float-end" name="save">
            Kembali
        </a>
    </div>
</section>
<?= $this->endSection(); ?>