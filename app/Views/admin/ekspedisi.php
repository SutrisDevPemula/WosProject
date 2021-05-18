<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>

<section class="section">
    <h1 class="section-header">
        <div>Daftar Ekspedisi</div>
    </h1>

    <div class="container">
        <!-- insert data -->
        <div class="row bg-white p-2 justify-content-center mb-3">
            <div class="col-lg-12">
                <form method="post" action="">
                    <div class="mb-3">
                        <label for="no_polisi" class="form-label">No. Polisi</label>
                        <input type="text" class="form-control" id="no_polisi" name="no_polisi">
                    </div>
                    <div class="mb-3">
                        <label for="nama_ekspedisi" class="form-label">Nama Ekspedisi</label>
                        <input type="text" class="form-control" id="nama_ekspedisi" name="nama_ekspedisi">
                    </div>
                    <div class="mb-3">
                        <label for="no_do" class="form-label">No. Do</label>
                        <input type="text" class="form-control" id="no_do" name="no_do">
                    </div>
                    <div class="mb-3">
                        <label for="no_sp_list" class="form-label">No. Sp List</label>
                        <input type="text" class="form-control" id="no_sp_list" name="no_sp_list">
                    </div>
                    <div class="mb-3">
                        <label for="tgl_sp_list" class="form-label">Tgl Sp List</label>
                        <input type="date" class="form-control" id="tgl_sp_list" name="tgl_sp_list">
                    </div>
                    <div class="mb-3">
                        <label for="tgl_do" class="form-label">Tgl Do</label>
                        <input type="date" class="form-control" id="tgl_do" name="tgl_do">
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
                            <th scope="col">No. Polisi</th>
                            <th scope="col">Nama Ekspedisi</th>
                            <th scope="col">No. Do</th>
                            <th scope="col">No. Sp List</th>
                            <th scope="col">Tgl. Sp List</th>
                            <th scope="col">Tgl. Do</th>
                            <th scope="col">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($ekspedisi as $ekspedisi) : ?>
                            <tr>
                                <th scope="row">1</th>
                                <td><?= $ekspedisi['no_polisi']; ?></td>
                                <td><?= $ekspedisi['nama_ekspedisi']; ?></td>
                                <td><?= $ekspedisi['no_do']; ?></td>
                                <td><?= $ekspedisi['no_sp_list']; ?></td>
                                <td><?= $ekspedisi['tgl_sp_list']; ?></td>
                                <td><?= $ekspedisi['tgl_do']; ?></td>
                                <td>
                                    <a href="<?= base_url('admin/ekspedisi/' . $ekspedisi['id_ekspedisi'] . '/update'); ?>" class="btn btn-light"><i class="fas fa-edit"></i></a>
                                    <a href="<?= base_url('admin/ekspedisi/' . $ekspedisi['id_ekspedisi'] . '/delete'); ?>" class="btn btn-danger"><i class="fas fa-times"></i></a>
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