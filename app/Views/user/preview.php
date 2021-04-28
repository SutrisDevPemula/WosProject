<?= $this->extend('user/layout/template'); ?>

<?= $this->section('content'); ?>

<section class="section" x-data x-init="$store.checking.getData()">
    <!-- x-data="checking()" x-init="getData()" -->
    <h1 class="section-header">
        <div>Preview Data Kerusakan</div>
    </h1>
    <div class="container">
        <div class="row bg-white p-3">
            <div class="col-12">
                <h3>Daftar Kerusakan Motor</h3>
                <div class="table-responsive mt-2">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Tipe</th>
                                <th scope="col">Warna</th>
                                <th scope="col">No. Frame</th>
                                <th scope="col">No. Engine</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">No. Part</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>lno</td>
                                <td>bl</td>
                                <td>111111111111</td>
                                <td>111111111111</td>
                                <td>MARK,SCOOPY TYPE 1</td>
                                <td>86836-K2F-N10ZB</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row bg-white p-3">
            <div class="col-12">
                <h3>Ringkasan</h3>
                <div class="table-responsive mt-2">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Baik</th>
                                <th scope="col">Rusak</th>
                                <th scope="col">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>3</td>
                                <td>2</td>
                                <td>5</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- <a href="" type="button" class="btn btn-secondary mt-5 float-end">Submit</a> -->
                <div class="float-end">
                    <button type="submit" value="Refresh Page" onClick="goBack()" class="btn btn-outline-secondary text-dark">Kembali</button>
                    <button type="submit" value="Refresh Page" onClick="goBack()" class="btn btn-success me-3">Submit</button>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    function reloadpage() {
        location.reload()
    }

    function goBack() {
        window.history.back();
    }
</script>

<?= $this->endSection(); ?>