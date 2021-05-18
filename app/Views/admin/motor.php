<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>

<section class="section">
    <h1 class="section-header">
        <div>Daftar Motor</div>
    </h1>

    <div class="container">
        <!-- insert data -->
        <div class="row bg-white p-2 justify-content-center mb-3">
            <div class="col-lg-12">
                <form method="post" action="">
                    <div class="mb-3">
                        <label for="jenis_motor" class="form-label">Jenis Motor</label>
                        <input type="text" class="form-control" id="jenis_motor" name="jenis_motor">
                    </div>
                    <div class="mb-3">
                        <label for="merk_motor" class="form-label">Merk Motor</label>
                        <input type="text" class="form-control" id="merk_motor" name="merk_motor">
                    </div>
                    <div class="mb-3">
                        <label for="tipe_motor" class="form-label">Tipe Motor</label>
                        <input type="text" class="form-control" id="tipe_motor" name="tipe_motor">
                    </div>
                    <div class="mb-3">
                        <label for="warna_motor" class="form-label">Warna Motor</label>
                        <input type="text" class="form-control" id="warna_motor" name="warna_motor">
                    </div>
                    <button type="submit" class="btn btn-primary" name="save">Submit</button>
                </form>
            </div>
        </div>
        <!-- table data -->
        <div class="row bg-white p-2 justify-content-center mb-3">
            <div class="col-lg-12">
                <h5 class=" mb-4">Data Ekspedisi</h5>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Jenis Motor</th>
                            <th scope="col">Merk Motor</th>
                            <th scope="col">Tipe Motor</th>
                            <th scope="col">Warna Motor</th>
                            <th scope="col">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($motor as $motor) : ?>
                            <tr>
                                <th scope="row">1</th>
                                <td><?= $motor['jenis_motor']; ?></td>
                                <td><?= $motor['merk_motor']; ?></td>
                                <td><?= $motor['tipe_motor']; ?></td>
                                <td><?= $motor['warna_motor']; ?></td>
                                <td>
                                    <a href="<?= base_url('admin/motor/' . $motor['id_motor'] . '/update'); ?>" class="btn btn-light"><i class="fas fa-edit"></i></a>
                                    <a href="<?= base_url('admin/motor/' . $motor['id_motor'] . '/delete'); ?>" class="btn btn-danger"><i class="fas fa-times"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>