<?php

namespace App\Models;

use CodeIgniter\Model;

class DetailekspedisiModel extends Model
{
	protected $table                = 'detail_ekspedisi';
	protected $primaryKey           = 'id_detail_ekspedisi';
	protected $useAutoIncrement     = true;
	protected $allowedFields        = [
		'id_motor',
		'no_frame',
		'no_mesin',
		'id_tugas',
		'status_cek',
		'status_rusak'
	];

	// Dates
	protected $useTimestamps        = false;

	public function insertDtlEkspedisi($data)
	{
		return $this->db->table($this->table)->insert($data);
	}

	public function updateData($data, $key)
	{
		return $this->db->table($this->table)->update($data, [$this->primaryKey => $key]);
	}
}
