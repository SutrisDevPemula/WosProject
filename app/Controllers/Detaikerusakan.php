<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Detaikerusakan extends BaseController
{
	public function insertDtlKerusakan()
	{
		$dtl_ekspedisi = $this->request->getPost('id_dtl_ekspedisi');
		$id_kerusakan = $this->request->getPost('id_kerusakan');
		$data = array();

		$i = 0;
		foreach ($id_kerusakan as $id_kerusakan) {
			array_push($data, array(
				'id_detail_kerusakan' => $dtl_ekspedisi[$i],
				'id_kerusakan' => $id_kerusakan[$i]
			));

			$i++;
		}

		$sql = $this->DetailKerusakanModel->insertDtlKerusakan($data);

		if ($sql) { // Jika sukses
			echo "<script>alert('Data berhasil disimpan');window.location = '" . base_url('index.php/siswa') . "';</script>";
		} else { // Jika gagal
			echo "<script>alert('Data gagal disimpan');window.location = '" . base_url('index.php/siswa/form') . "';</script>";
		}
	}
}
