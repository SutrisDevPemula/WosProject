<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>

<section class="section">
    <h1 class="section-header">
        <div>Daftar User</div>
    </h1>

    <div class="container">
        <!-- insert data -->
        <div class="row bg-white p-2 justify-content-center mb-3">
            <div class="col-lg-12">
                <form method="post" action="">
                    <input type="text" class="form-control" id="id_user" name="id_user" hidden value="<?= $pengguna['id_pengguna']; ?>">
                    <div class="mb-3">
                        <label for="pengguna" class="form-label">Nama User</label>
                        <input type="text" class="form-control" id="pengguna" name="pengguna" value="<?= $pengguna['pengguna']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="sandi" class="form-label">Sandi</label>
                        <input type="password" class="form-control" id="sandi" name="sandi" value="<?= $pengguna['sandi']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="sandi" class="form-label">Hak Akses</label>
                        <select class="form-select" aria-label="Default select example" name="hak">
                            <option value="<?= $pengguna['hak']; ?>"><?= $pengguna['hak']; ?></option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary" name="simpan"><i class="fas fa-save"></i> Save</button>
                </form>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>