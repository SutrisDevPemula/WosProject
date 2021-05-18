<?php

namespace App\Models;

use CodeIgniter\Model;

class DetailKerusakanModel extends Model
{
	protected $table                = 'detail_kerusakan';
	protected $primaryKey           = 'id_detail_kerusakan';
	protected $useAutoIncrement     = true;
	protected $allowedFields        = [
		'id_detail_ekspedisi',
		'id_kerusakan'
	];

	// Dates
	protected $useTimestamps        = false;

	public function insertDtlKerusakan($data)
	{
		return $this->db->table($this->table)->insert($data);
	}
}
