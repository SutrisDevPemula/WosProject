<?php

namespace App\Models;

use CodeIgniter\Model;

class A32Model extends Model
{
	protected $table                = 'a32';

	public function checking($tgl, $nopol, $status)
	{
		$where = [
			'tanggal' => $tgl,
			'nopol' => $nopol,
			// 'status' => $status,
		];

		$data = $this->db->table($this->table)
			->where($where)
			->get()->getResultArray();

		return $data;
	}

	public function searching($tgl, $nopol, $status, $type)
	{

		if ($status != '' and $type != '') {
			$where = [
				'tanggal' => $tgl,
				'nopol' => $nopol,
				'status' => $status,
				'tipe' => $type,
			];
		} elseif ($status != '' and $type == '') {
			$where = [
				'tanggal' => $tgl,
				'nopol' => $nopol,
				'status' => $status,
			];
		} elseif ($type != '' and $status == '') {
			$where = [
				'tanggal' => $tgl,
				'nopol' => $nopol,
				'tipe' => $type,
			];
		} else {
			$where = [
				'tanggal' => $tgl,
				'nopol' => $nopol,
				// 'status' => $status,
			];
		}

		$data = $this->db->table($this->table)
			->where($where)
			// ->limit(1)
			->get()
			->getResultArray();

		return $data;
	}
}
