<?= $this->extend('user/layout/template'); ?>

<?= $this->section('content'); ?>

<section class="section" x-data x-init="$store.checking.getData()">
    <!-- x-data="checking()" x-init="getData()" -->
    <h1 class="section-header">
        <div>Pengecekan Ekspedisi </div>
    </h1>
    <div class="container">
        <div class="row bg-white p-3">
            <div class="col-lg-3 mt-3">
                <select class="js-example-basic-single form-select form-select-lg" name="state" id="state">
                    <option value=" ">Semua</option>
                    <option value="1">Sudah</option>
                    <option value="0">Belum</option>
                </select>
            </div>
            <div class="col-lg-3 mt-3">
                <select id="tipe" class="type js-example-basic-single form-select form-select-lg" name="type">
                    <option value="">Tipe</option>
                    <?php foreach ($type as $type) : ?>
                        <option value="<?= $type['tipe_motor']; ?>"><?= $type['tipe_motor']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col-lg-3 mt-3">
                <select class="js-example-basic-single form-select form-select-lg" name="state" id="color">
                    <option value="">Warna</option>
                    <?php foreach ($warna as $warna) : ?>
                        <option value="<?= $warna['warna_motor']; ?>"><?= $warna['warna_motor']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col-lg-3 mt-3">
                <button type="submit" value="Refresh Page" onClick="document.location.reload(true)" class="btn btn-light">Reload</button>
                <button type="submit" value="Refresh Page" onClick="goBack()" class="btn btn-outline-secondary text-dark">Kembali</button>
            </div>
        </div>
        <div class="row mt-4 bg-white rounded-3 p-3">
            <div id="dataTable" class="col-12 table-responsive mt-5">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data_check as $data) : ?>
                            <tr>
                                <td>
                                    <p>Type : <?= $data['tipe']; ?></p>
                                    <p>Warna : <?= $data['warna']; ?></p>
                                    <p>NF : <?= $data['noframe']; ?></p>
                                    <p>NE : <?= $data['nomesin']; ?></p>
                                    <p>Kerusakan : <?= $data['kerusakan']; ?></p>
                                </td>
                                <td>
                                    <?php if ($data['status'] == 1) :  ?>
                                        <span class="bg-success p-1 radius-3 text-white">Check</span>
                                    <?php endif ?>
                                    <p class="mt-3">Edit</p>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<script>
    const state = document.getElementById('state');
    const color = document.getElementById('color');
    const tipe = document.getElementById('tipe');
    const dataTable = document.getElementById('#dataTable');

    state.addEventListener('change', (event) => {
        var xhr = new XMLHttpRequest();

        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                dataTable.innerHTML = xhr.responseText;
            }
        }

        xhr.open('POST', 'ajax/search_cek', true);
        // console.log('state ', event.target.options[event.target.options.selectedIndex].value)
    })
    color.addEventListener('change', (event) => {
        console.log('color ', event.target.options[event.target.options.selectedIndex].value)
    })
    tipe.addEventListener('change', (event) => {
        console.log('tipe ', event.target.options[event.target.options.selectedIndex].value)
    })



    // // function getState(data) {
    // //     console.log(data);
    // // }

    function reloadpage() {
        location.reload()
    }

    function goBack() {
        window.history.back();
    }
</script>

<script>

</script>

<?= $this->endSection(); ?>