<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>
<section class="section">
    <h1 class="section-header">
        <div>Detail Ekspedisi</div>
    </h1>
    <div class="row bg-white p-3">
        <div class="col-lg-12 mb-2">
            <table class="table text-center">
                <thead>
                    <tr>
                        <th scope="col">Baik</th>
                        <th scope="col">Rusak</th>
                        <th scope="col">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?= $a34b['baik']; ?></td>
                        <td><?= $a34b['rusak']; ?></td>
                        <td><?= $a34b['total']; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-lg-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Tipe</th>
                        <th scope="col">Warna</th>
                        <th scope="col">No. Frame</th>
                        <th scope="col">No. Mesin</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">No. Part</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($a34a as $dataA) : ?>
                        <tr>
                            <td><?= $dataA['tipe']; ?></td>
                            <td><?= $dataA['warna']; ?></td>
                            <td><?= $dataA['noframe']; ?></td>
                            <td><?= $dataA['nomesin']; ?></td>
                            <td><?= $dataA['deskripsi']; ?></td>
                            <td><?= $dataA['no_part']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <a href="<?= base_url('admin/print/' . $ekspedisi['key'] . '/data'); ?>" type="button" class="btn btn-primary mt-3">
        <li class="fas fa-file-pdf"></li> Unduh hasil pengecekan
    </a>
    <a href="<?= base_url('admin/print/' . $ekspedisi['key'] . '/data'); ?>" type="button" class="btn btn-danger mt-3">
        <li class="fas fa-times"></li> Tolak
    </a>
    <a href="<?= base_url('admin/print/' . $ekspedisi['key'] . '/data'); ?>" type="button" class="btn btn-primary mt-3">
        <li class="fas fa-check"></li> Terima
    </a>
</section>
<?= $this->endSection(); ?>