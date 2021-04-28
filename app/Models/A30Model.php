<?php

namespace App\Models;

use CodeIgniter\Model;

class A30Model extends Model
{
	protected $table                = 'a30';

	// query

	public function getData($tgl_ekspedisi)
	{
		// $where = "tgl_ekspedisi='2021-04-01' AND status='3'";
		$data = $this->db->table('a30')
			->where('tgl_ekspedisi', $tgl_ekspedisi)
			->orderBy('status', '0')
			->get()->getResultArray();

		return $data;
	}
}
