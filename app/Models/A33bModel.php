<?php

namespace App\Models;

use CodeIgniter\Model;

class A33bModel extends Model
{
	protected $table                = 'a33b';

	public function showData($key)
	{
		$data = $this->db->table($this->table)
			->where('no_mesin', $key)
			->get()
			->getResultArray();

		return $data;
	}
}
