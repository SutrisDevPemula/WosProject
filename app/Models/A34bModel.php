<?php

namespace App\Models;

use CodeIgniter\Model;

class A34bModel extends Model
{
	protected $table                = 'a34b';

	public function getAllData()
	{
		return $this->db->table($this->table)->get()->getResultArray();
	}
}
