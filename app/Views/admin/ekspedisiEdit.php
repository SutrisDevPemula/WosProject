<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>

<section class="section">
    <h1 class="section-header">
        <div>Update Data Ekspedisi</div>
    </h1>

    <div class="container">
        <!-- insert data -->
        <div class="row bg-white p-2 justify-content-center mb-3">
            <div class="col-lg-12">
                <form method="post" action="">
                    <div class="mb-3">
                        <input type="text" class="form-control" id="id_ekspedisi" name="id_ekspedisi" hidden value="<?= $ekspedisi['id_ekspedisi']; ?>">
                        <label for="no_polisi" class="form-label">No. Polisi</label>
                        <input type="text" class="form-control" id="no_polisi" name="no_polisi" value="<?= $ekspedisi['no_polisi']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="nama_ekspedisi" class="form-label">Nama Ekspedisi</label>
                        <input type="text" class="form-control" id="nama_ekspedisi" name="nama_ekspedisi" value="<?= $ekspedisi['nama_ekspedisi']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="no_do" class="form-label">No. Do</label>
                        <input type="text" class="form-control" id="no_do" name="no_do" value="<?= $ekspedisi['no_do']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="no_sp_list" class="form-label">No. Sp List</label>
                        <input type="text" class="form-control" id="no_sp_list" name="no_sp_list" value="<?= $ekspedisi['no_sp_list']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="tgl_sp_list" class="form-label">Tgl Sp List</label>
                        <input type="date" class="form-control" id="tgl_sp_list" name="tgl_sp_list" value="<?= $ekspedisi['tgl_sp_list']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="tgl_do" class="form-label">Tgl Do</label>
                        <input type="date" class="form-control" id="tgl_do" name="tgl_do" value="<?= $ekspedisi['tgl_do']; ?>">
                    </div>
                    <button type="submit" class="btn btn-primary" name="save">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>