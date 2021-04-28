<?php

namespace App\Models;

use CodeIgniter\Model;

class A31bModel extends Model
{
	protected $table                = 'a31b';

	public function getDataB($tgl, $nopol)
	{
		$where = [
			'tanggal' => $tgl,
			'nopol' => $nopol
		];
		$data = $this->db->table($this->table)
			->where($where)
			->get()->getResultArray();

		return $data;
	}
}
