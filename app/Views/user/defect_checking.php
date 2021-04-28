<?= $this->extend('user/layout/template'); ?>

<?= $this->section('content'); ?>

<section class="section" x-data>
    <h1 class="section-header">
        <?php foreach ($data_check as $data) : ?>
            <div>Keadaan Motor</div>
        <?php endforeach; ?>
    </h1>
    <div class="container">

        <div class="row bg-white p-1">
            <div class="col-lg-12">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Profil Motor
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ul class="list-group list-group-flush">
                                <!-- <input type="text" class="form-control" value="" id=""> -->
                                <form>
                                    <?php foreach ($data_check as $data) : ?>
                                        <li class="list-group-item">Jenis : <?= $data['jenis']; ?></li>
                                        <li class="list-group-item">Merek : <?= $data['merk']; ?></li>
                                        <li class="list-group-item">Tipe : <?= $data['tipe']; ?></li>
                                        <li class="list-group-item">Warna : <?= $data['warna']; ?></li>
                                        <li class="list-group-item">No. Frame :<input type="text" class="form-control mt-1" id="nf" value="<?= $data['noframe']; ?>"></li>
                                        <li class="list-group-item">No. Engine : <input type="text" class="form-control mt-1" id="ne" value="<?= $data['no_mesin']; ?>"></li>
                                    <?php endforeach; ?>
                                    <div class="float-end mt-2">
                                        <button type="submit" class="btn btn-primary "><i class="fas fa-edit"></i></button>
                                        <button type="submit" class="btn btn-primary "><i class="far fa-save"></i></button>
                                    </div>
                                </form>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row bg-white p-1 mt-3">
            <div class="col-lg-12">
                <form action="get" method="post">
                    <div class="mt-3">
                        <label for="sKerusakan" class="form-label">Kerusakan</label>
                        <select class="js-data-example-ajax form-select form-select-lg" id="kerusakan" name="kerusakan" style="width: 100%;" x-on:change="$store.defect.getKerusakan($event)">
                            <option>Pilih kerusakan</option>
                            <?php foreach ($kerusakan as $kerusakan) : ?>
                                <option value="<?= $kerusakan['id_motor']; ?>" x-on:click="$store.defect.getKerusaka($event)"><?= $kerusakan['deskripsi']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </form class="mt-4">
                <form>
                    <template x-for="(item, index) in $store.defect.dataChack" :key="index">
                        <div class="mt-3">
                            <label for="noPart" class="form-label">Part Number</label>
                            <!-- <span x-text='item.no_part'> -->
                            <input type="text" class="form-control" id="noPart" readonly x-bind:value="item.no_part">
                        </div>
                    </template>
                </form>
                <button type="button" class="btn btn-success mt-3 btn-sm" style="float: right;" x-on:click="$store.defect.getKerusakan()">Tambah</button>
            </div>
        </div>

        <div class="row bg-white p-1 mt-3 mb-5">
            <div class="col-lg-12 table-responsive">
                <table class="table" style="font-size: 12px;">
                    <thead>
                        <tr>
                            <th scope="col">Kerusakan</th>
                            <th scope="col">Part Number</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>MARK,SCOOPY TYPE 1</td>
                            <td>86836-K2F-N10ZB</td>
                            <td><button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-times"></i></button></td>
                        </tr>
                    </tbody>
                </table>
                <button type="submit" value="Refresh Page" onClick="goBack()" class="btn btn-outline-secondary text-dark float-end">Kembali</button>
            </div>
        </div>
    </div>
</section>

<script>
    Spruce.store('defect', {
        dataChack: [],
        kerusakan: '',
        jenis: '',
        merk: '',
        no_part: '',
        getKerusakan(event) {
            console.log('ddsddsds');
            this.kerusakan = event.target.options[event.target.options.selectedIndex].value;

            console.log(this.kerusakan);
            this.searchData()
        },
        searchData() {
            axios.post('/search_kerusakan', {
                kerusakan: this.kerusakan
            }).then((res) => {
                this.dataChack = res.data;
                this.no_part = res.data[0].no_part;
                console.log(res.data[0].no_part);
            })
        }
    })
    // console.log(Spruce.store('defect', {}));



    function reloadpage() {
        location.reload()
    }

    function goBack() {
        window.history.back();
    }
</script>

<?= $this->endSection(); ?>