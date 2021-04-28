<?= $this->extend('user/layout/template'); ?>

<?= $this->section('content'); ?>

<section class="section">
    <h1 class="section-header">
        <div>DETAIL TUGAS</div>
    </h1>
    <div class="container">
        <div class="row bg-white rounded-3 p-3">
            <div class="col-12">
                <?php foreach ($dataA as $dataA) : ?>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Nama Ekspedisi : <strong class="float-right me-3"><?= $dataA['nama']; ?></strong></li>
                        <li class="list-group-item">No Polisi : <strong class="float-right me-3"><?= $dataA['nopol']; ?></strong></li>
                        <li class="list-group-item">No DO : <strong class="float-right me-3"><?= $dataA['nodo']; ?></strong></li>
                        <li class="list-group-item">No SP List : <strong class="float-right me-3"><?= $dataA['nosp']; ?></strong></li>
                        <li class="list-group-item">Tanggal SP List : <strong class="float-right me-3"><?= $dataA['tglsp']; ?></strong></li>
                        <li class="list-group-item">Tanggal DO : <strong class="float-right me-3"><?= $dataA['tgldo']; ?></strong></li>
                    </ul>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="row mt-4 bg-white rounded-3 p-3">
            <div class="col-12">
                <h4>Unit Data Ekspedisi</h4>
                <table class="table bg-white mt-4">
                    <thead>
                        <tr>
                            <th>Type</th>
                            <th>Qty</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($dataB as $dataB) : ?>
                            <tr>
                                <td><?= $dataB['jenis_motor']; ?></td>
                                <td><?= $dataB['jumlah']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <div class="mt-5">
                    <a href="<?= base_url('task'); ?>" class="btn btn-outline-secondary text-dark">Kembali</a>
                    <a href="<?= base_url('task/' . $dataA['nopol'] . '/checking'); ?>" class="btn btn-success float-right">Terima</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>