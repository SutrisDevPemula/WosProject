<?= $this->extend('user/layout/template'); ?>

<?= $this->section('content'); ?>

<section class="section" x-data x-init="$store.checking.getData()">
    <!-- x-data="checking()" x-init="getData()" -->
    <h1 class="section-header">
        <div>Pengecekan Ekspedisi </div>
    </h1>
    <div class="container">
        <div class="row bg-white p-1">
            <div class="col-9 mt-1">
                <select class="js-example-basic-single form-select form-select-lg" name="state" id="state" x-on:change="$store.checking.getState($event)" style="font: size 12px;">
                    <option value="">Semua</option>
                    <option value="1">Sudah</option>
                    <option value="0">Belum</option>
                </select>
            </div>
            <div class="col-3 mt-1 d-flex justify-content-end">
                <button type="submit" value="Refresh Page" onClick="document.location.reload(true)" class="btn btn-outline-secondary text-dark">Reset</button>
            </div>
        </div>
        <div class="row bg-white p-1">
            <div class="col-lg-12 mt-1">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Filter Lanjut
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <div class="row bg-white">
                                <div class="col-6 mt-1">
                                    <select id="tipe" class="type js-example-basic-single form-select form-select-lg" name="type" x-on:change="$store.checking.getTipe($event)">
                                        <option value="">Tipe</option>
                                        <?php foreach ($type as $type) : ?>
                                            <option value="<?= $type['tipe_motor']; ?>"><?= $type['tipe_motor']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="col-6 mt-1">
                                    <select class="js-example-basic-single form-select form-select-lg" name="state" id="color">
                                        <option value="">Warna</option>
                                        <?php foreach ($warna as $warna) : ?>
                                            <option value="<?= $warna['warna_motor']; ?>"><?= $warna['warna_motor']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row bg-white p-2">
            <div class="col-lg-3 mt-1">
                <button type="submit" value="Refresh Page" onClick="goBack()" class="btn btn-outline-secondary text-dark">Kembali</button>
                <a href="<?= base_url('preview'); ?>" type="button" class="btn btn-primary float-end">Preview</a>
            </div>
        </div>
        <div class="row mt-4 bg-white rounded-3 ps-3 pl-3 pt-1 pb-1">
            <div id="data" class="col-12 table-responsive mt-5">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <template x-for="(item, index) in $store.checking.dataChack" :key="index">
                            <tr>
                                <td>
                                    <p>Type : <span x-text='item.tipe'></span></p>
                                    <p>Warna : <span x-text='item.warna'></span></p>
                                    <p>NF : <span x-text='item.noframe'></span></p>
                                    <p>NE : <span x-text='item.nomesin'></span></p>
                                    <p>Kerusakan : <span x-text='item.kerusakan'></p>
                                </td>
                                <td>
                                    <template x-if="item.status == 1">
                                        <p class="text-success fw-bold"><span>Sudah di check</span></p>
                                    </template>
                                    <a x-bind:href="'/defect/'+item.key+'/check'" class="mt-3 text-decoration-none btn btn-outline-info">Detail Cek</a>
                                </td>
                            </tr>
                        </template>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<script>
    // function checking() {
    //     return {
    //         dataChack: [],
    //         test: 'sasasasa',
    //         getData() {
    //             let data = axios.get('/task/DR2458EA/check').then(function(res) {
    //                 // return res.data;
    //                 // data = res.data
    //                 // this.dataChack = ['sds', 'dsdsda'];
    //                 console.log(test);
    //             });
    //             console.log(data.data);
    //             // this.dataChack = data;
    //         }
    //     }
    // }
    Spruce.store('checking', {
        dataChack: [],
        state: '',
        warna: '',
        tipe: '',
        getData() {
            let url = window.location.pathname
            let params1 = url.split("/")[2];
            let params2 = url.split("/")[3];
            axios.get(`/task/${params1}/${params2}/check`).then((res) => {
                this.dataChack = res.data;
            });
            // this.dataChack = data;
        },
        getState(event) {
            this.state = event.target.options[event.target.options.selectedIndex].value;
            this.searcData()
        },
        getTipe(event) {
            this.tipe = event.target.options[event.target.options.selectedIndex].value;
            this.searcData()
        },
        searcData() {
            let url = window.location.pathname
            let params1 = url.split("/")[2];
            let params2 = url.split("/")[3];
            axios.post(`/task/${params1}/${params2}/search`, {
                tipe: this.tipe,
                status: this.state
            }).then((res) => {
                this.dataChack = res.data;
                console.log(res.params);
            })
        }

    })

    function test() {
        let url = window.location.pathname
        console.log(url.split("/")[3]);
        console.log(url.split("/")[2]);
    }
    test()
    // console.log('logggg', checking());
    const state = document.getElementById('state');
    const color = document.getElementById('color');
    const tipe = document.getElementById('tipe');
    // const data = document.getElementById('#data');

    state.addEventListener('change', (event) => {
        console.log('state ', event.target.options[event.target.options.selectedIndex].value)
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