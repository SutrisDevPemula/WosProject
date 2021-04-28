<?php

namespace App\Models;

use CodeIgniter\Model;

class A33aModel extends Model
{
	protected $table                = 'a33a';

	public function check_defect($key)
	{
		$where = [
			// 'tanggal' => $tgl,
			// 'nopol' => $nopol,
			'key' => $key
		];

		$data =  $this->db->table($this->table)
			->where($where)
			->get()
			->getResultArray();
		// 'a33b' => $this->db->table('a33b')
		// 	->where($where)
		// 	->get()->getResultArray(),
		return $data;
	}
}
