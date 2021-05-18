<?= $this->extend('user/layout/template'); ?>

<?= $this->section('content'); ?>

<section class="section">
    <h1 class="section-header">
        <div>DAFTAR TUGAS</div>
    </h1>
    <div class="container">
        <div class="row">
            <?php foreach ($ekspedisi as $data) : ?>
                <div class="col-lg-6">
                    <?php if ($data['status'] == 0) {
                        $indikator = '';
                        $status = "";
                    } elseif ($data['status'] == 1) {
                        $indikator = 'text-warning';
                        $status = "Dalam proses . . .";
                    } elseif ($data['status'] == 2) {
                        $indikator = 'text-warning';
                        $status = "Sedang dicek";
                    } elseif ($data['status'] == 3) {
                        $indikator = 'text-success';
                        $status = 'Selesai';
                    } elseif ($data['status'] == 4) {
                        $indikator = 'text-danger';
                        $status = 'Perlu revisi';
                    }
                    ?>
                    <div class="card bg-primary">
                        <!-- <img src="<?= base_url('assets/img/honda-logo.jpg'); ?>" class="card-img-top" alt="" style="width: 100%; height: 15em"> -->
                        <div class="card-body text-white">
                            <span style="float: right"><?= $data['tgl_ekspedisi']; ?></span>
                            <h5 class="card-title mt-3"><?= $data['ekspedisi']; ?></h5>
                            <p class="card-text"><?= $data['nopol']; ?></p>
                        </div>
                        <div class="card-footer bg-light p-2">
                            <span class="ms-2 <?= $indikator; ?>"><b><?= $status; ?></b></span>
                            <form action="/task/detail" method="POST">
                                <input type="text" hidden name="nopol" value="<?= $data['nopol']; ?>">
                                <input type="text" hidden name="tgl" value="<?= $data['tgl_ekspedisi']; ?>">
                                <div class="btn-group float-end" role="group" aria-label="Basic mixed styles example">
                                    <a href="<?= base_url('/' . 'task/' . $data['nopol'] . '/' . $data['tgl_ekspedisi'] . '/detail'); ?>" class="btn btn-primary">Lihat</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>