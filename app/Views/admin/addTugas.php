<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>

<section class="section">
    <h1 class="section-header">
        <div>Tambah Data Tugas</div>
    </h1>

    <div class="container">
        <div class="row bg-white p-3 mb-5">
            <div class="col-lg-12">
                <form action="" method="POST">
                    <div class="row g-3 mb-3">
                        <div class="col-6">
                            <label for="tanggal" class="form-label">Tanggal</label>
                            <input type="date" class="form-control" id="tanggal" name="tgl_ekspedisi">
                        </div>
                    </div>
                    <h6>Informasi Truk Ekspedisi</h6>
                    <div class="row g-3 mb-3">
                        <div class="col-md-4">
                            <label for="nama" class="form-label">Nama Ekspedisi</label>
                            <input class="form-control" list="nama_ekspedisi" id="nama" name="nama" placeholder="Cari...">
                            <datalist id="nama_ekspedisi">
                                <?php foreach ($ekspedisi as $ekspedisi) : ?>
                                    <option value="<?= $ekspedisi['nama_ekspedisi']; ?>"></option>
                                <?php endforeach; ?>
                            </datalist>
                        </div>
                        <div class="col-md-4">
                            <label for="tanggal" class="form-label">No. Do</label>
                            <input type="text" class="form-control" id="tanggal" name="tanggal">
                        </div>
                        <div class="col-md-4">
                            <label for="no_sp_list" class="form-label">No. SP List</label>
                            <input type="text" class="form-control" id="no_sp_list" name="no_sp_list">
                        </div>
                        <div class="col-md-4">
                            <label for="nopol" class="form-label">No. Pol</label>
                            <input class="form-control" list="datalistOptions" id="nopol" name="nopol" placeholder="Cari...">
                            <datalist id="datalistOptions">
                                <?php foreach ($nopol as $nopol) : ?>
                                    <option value="<?= $nopol['no_polisi']; ?>"></option>
                                <?php endforeach; ?>
                            </datalist>
                        </div>
                        <div class="col-md-4">
                            <label for="tgl_do" class="form-label">Tgl. Do</label>
                            <input type="date" class="form-control" id="tgl_do" name="tgl_do">
                        </div>
                        <div class="col-md-4">
                            <label for="tgl_sp_list" class="form-label">Tgl. Sp List</label>
                            <input type="date" class="form-control" id="tgl_sp_list" name="tgl_sp_list">
                        </div>
                    </div>
                    <h6>Informasi Petugas</h6>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="sopir" class="form-label">Sopir</label>
                            <input type="text" class="form-control" id="sopir" name="sopir">
                        </div>
                        <div class="col-md-6">
                            <label for="ptgs_lapangan" class="form-label">Petugas</label>
                            <input class="form-control" list="ptgs_lapangan" id="ptgs_lapangan" name="petugas" placeholder="Cari...">
                            <datalist id="ptgs_lapangan">
                                <option value="San Francisco">
                                <option value="New York">
                                <option value="Seattle">
                                <option value="Los Angeles">
                                <option value="Chicago">
                            </datalist>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12 justify-content-end text-end">
                            <button type="submit" class="btn btn-outline-secondary text-dark">Kembali</button>
                            <button type="submit" class="btn btn-primary" name="save">Selanjutnya</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>