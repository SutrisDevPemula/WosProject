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
                    <div class="mb-3">
                        <label for="pengguna" class="form-label">Nama User</label>
                        <input type="text" class="form-control" id="pengguna" name="pengguna">
                    </div>
                    <div class="mb-3">
                        <label for="sandi" class="form-label">Sandi</label>
                        <input type="password" class="form-control" id="sandi" name="sandi">
                    </div>
                    <div class="mb-3">
                        <label for="sandi" class="form-label">Hak Akses</label>
                        <select class="form-select" aria-label="Default select example" name="hak">
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary" name="save"><i class="fas fa-save"></i> Save</button>
                </form>
            </div>
        </div>
        <!-- table data -->
        <div class="row bg-white p-2 justify-content-center mb-3">
            <div class="col-lg-12">
                <h5 class=" mb-4">Data User</h5>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama User</th>
                            <th scope="col">Hak Akses</th>
                            <th scope="col">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($pengguna as $user) : ?>
                            <tr>
                                <th scope="row">1</th>
                                <td><?= $user['pengguna']; ?></td>
                                <td><?= $user['hak']; ?></td>
                                <td>
                                    <a href="<?= base_url('admin/user/' . $user['id_pengguna'] . '/update'); ?>" class="btn btn-light"><i class="fas fa-edit"></i></a>
                                    <a href="<?= base_url('admin/user/' . $user['id_pengguna'] . '/delete'); ?>" class="btn btn-danger"><i class="fas fa-times"></i></a>
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