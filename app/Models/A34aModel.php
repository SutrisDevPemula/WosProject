<?php

namespace App\Models;

use CodeIgniter\Model;

class A34aModel extends Model
{
	protected $table                = 'a34a';

	public function showData($tgl, $nopol)
	{
		$data = $this->db->table($this->table)
			->where(['tanggal' => $tgl, 'nopol' => $nopol])
			->get()
			->getResultArray();

		dd($data);
		return $data;
	}
}
