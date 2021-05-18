<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        @page {
            size: A4;
            margin: 0;
        }

        @media print {

            html,
            body {
                width: 210mm;
                height: 297mm;
                padding-left: 15px;
                padding-right: 20px;
                padding-top: 10px;
            }

            * {
                font-size: 10px;
            }
        }
    </style>
</head>

<body>
    <div style="width:100%; padding:15px" class=" content ">
        <div>
            <table style="width:100%; border-collapse:collapse;" border="1">
                <tr>
                    <td>No. Doc</td>
                    <td>Tgl. Dibuat</td>
                    <td>Reg. No</td>
                </tr>
                <tr>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                </tr>
            </table>
            <table width="100%">
                <tr>
                    <td width="25% " style="text-align: center; ">
                        <!-- <img src="<?= base_url('assets/img/honda-logo.jpg'); ?>" alt=" " style="width:5rem; "> -->
                    </td>
                    <td width="50% " style="text-align: center; ">
                        <div style="font-weight:bold; margin-top:20px; "><u>LAPORAN KONDISI UNIT AKIBAT TRANSPORTASI SMH</u></div>
                        <div style="margin-bottom:20px; ">Pada saat serah terima dari Ekspedisi unit SMH</div>
                    </td>
                    <td width="25% "></td>
                </tr>

            </table>

            <div style="margin-bottom:5px; text-align: center; "><b>Profil Ekspedisi</b></div>
            <table style="width:100%; border-collapse:collapse;" border="1">
                <tr>
                    <td>Nama Ekspedisi</td>
                    <td><?= $a31['nama']; ?></td>
                    <td>No. Polisi</td>
                    <td><?= $a31['nopol']; ?></td>

                </tr>
                <tr>
                    <td>No. SP List</td>
                    <td>0</td>
                    <td>Tanggal SP List</td>
                    <td>0</td>

                </tr>
                <tr>
                    <td>No. D.O.</td>
                    <td>0</td>
                    <td>Tanggal D.O.</td>
                    <td>0</td>
                </tr>
            </table>

            <div style="margin-top:20px; margin-bottom:5px; text-align: center;"><b>Jumlah Unit yang diangkut</b></div>
            <table style="width:100%; border-collapse:collapse;" border="1">
                <tr style="text-align: center;">
                    <td colspan="4 "><b>Tipe</b></td>
                    <td><b>Total</b></td>
                </tr>
                <tr style="text-align: center;">
                    <td>MAT</td>
                    <td>SPORT</td>
                    <td>CUB</td>
                    <td>BIGBIKE</td>
                    <td rowspan="2 ">0 Motor</td>
                </tr>
                <tr style="text-align: center;">
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                </tr>
            </table>

            <div style="margin-top:20px; margin-bottom:5px; text-align: center; "><b>Kerusakan dan Penanganan Unit</b></div>
            <table style="width:100%; border-collapse:collapse;" border="1">
                <tr>
                    <th>No</th>
                    <th width="5% ">
                        <p style="writing-mode:vertical-lr; transform: rotate(-180deg) ">Type</p>
                    </th>
                    <th width="5% ">
                        <p style="writing-mode:vertical-rl; transform: rotate(-180deg) ">Warna</p>
                    </th>
                    <th>No. Frame</th>
                    <th>No. Rangka</th>
                    <th width="20% ">Kerusakan</th>
                    <th>No. Part</th>
                    <th rowspan="17 " width="30px "></th>
                    <th width="70px ">Penanganan</th>
                </tr>
                <?php foreach ($a34a as $data) : ?>
                    <tr>
                        <td>1</td>
                        <td><?= $data['tipe']; ?></td>
                        <td><?= $data['warna']; ?></td>
                        <td><?= $data['noframe']; ?></td>
                        <td><?= $data['nomesin']; ?></td>
                        <td><?= $data['deskripsi']; ?></td>
                        <td><?= $data['no_part']; ?></td>
                        <td></td>
                    </tr>
                <?php endforeach; ?>
            </table>

            <table style="width:100%; border-collapse:collapse;" border="1">
                <tr>
                    <td style="text-align: center;"><b>MENYETUJUI</b></td>
                    <td style="text-align: center;" colspan="2 "><b>KESIMPULAN</b></td>
                    <td style="text-align: center;"><b>DIBUAT OLEH</b></td>
                    <td rowspan="4 " width="30px " style="border-bottom:none; border-top:none; "></td>
                    <td rowspan="4 " width="70px ">
                        <div style="word-wrap:break-word; ">Kolom ini diisi oleh H.S.O. Pusat Jakarta</div>
                    </td>
                </tr>
                <tr>
                    <td rowspan="3 "></td>
                    <td>Kurang/Rusak</td>
                    <td>0</td>
                    <td rowspan="3 "></td>
                </tr>
                <tr>
                    <td>Kondisi Baik</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>TOTAL SMH</td>
                    <td>0</td>
                </tr>
            </table>
        </div>
        <table style="width:100%; border-collapse:collapse;" border="1">
            <tr>
                <td>Catatan:
                    <ul>
                        <li>Sopir diwajibkan berseragam</li>
                        <li>Menggunakan sepatu</li>
                        <li>Menjaga kebersihan area gudang</li>
                    </ul>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>