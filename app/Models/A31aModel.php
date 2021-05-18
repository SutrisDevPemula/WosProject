<?php

namespace App\Models;

use CodeIgniter\Model;

class A31aModel extends Model
{
	protected $table                = 'a31a';

	public function getData($tgl, $nopol)
	{
		$where = [
			'tanggal' => $tgl,
			'nopol' => $nopol
		];
		$data = $this->db->table($this->table)
			->where($where)
			->get()
			->getRowArray();

		return $data;
	}
}
