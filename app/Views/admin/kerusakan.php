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
                        <input class="form-control" list="datalistOptions" id="id_motor" placeholder="Pilih Motor . . " name="id_motor">
                        <datalist id="datalistOptions">
                            <?php foreach ($motor as $motor) : ?>
                                <option value="<?= $motor['id_motor']; ?>"><?= $motor['merk_motor']; ?>, <?= $motor['tipe_motor']; ?>, <?= $motor['warna_motor']; ?></option>
                            <?php endforeach; ?>
                        </datalist>
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <input type="text" class="form-control" id="deskripsi" name="deskripsi">
                    </div>
                    <div class="mb-3">
                        <label for="no_part" class="form-label">No. Part</label>
                        <input type="text" class="form-control" id="no_part" name="no_part">
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
                            <th scope="col">Merk Motor</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">No. Part</th>
                            <th scope="col">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($kerusakan as $kerusakan) : ?>
                            <tr>
                                <th scope="row">1</th>
                                <td><?= $kerusakan['id_motor']; ?></td>
                                <td><?= $kerusakan['deskripsi']; ?></td>
                                <td><?= $kerusakan['no_part']; ?></td>
                                <td>
                                    <a href="<?= base_url('admin/kerusakan/' . $kerusakan['id_kerusakan'] . '/update'); ?>" class="btn btn-light"><i class="fas fa-edit"></i></a>
                                    <a href="<?= base_url('admin/kerusakan/' . $kerusakan['id_kerusakan'] . '/delete'); ?>" class="btn btn-danger"><i class="fas fa-times"></i></a>
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