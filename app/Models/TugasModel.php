<?php

namespace App\Models;

use CodeIgniter\Model;

class TugasModel extends Model
{
	protected $table                = 'tugas';
	protected $primaryKey           = 'id_tugas';
	protected $useAutoIncrement     = true;
	protected $allowedFields        = [
		'id_ekspedisi',
		'id_pengguna',
		'tgl_ekspedisi',
		'nama_sopir',
		'status'
	];

	// Dates
	protected $useTimestamps        = false;

	public function insertTugas($data)
	{
		// return $this->db->table($this->table)->insert($data);
		return $this->db->table($this->table)->insert($data);
	}

	public function getId()
	{
		$data = $this->db->table($this->table)
			->orderBy('id_tugas', 'desc')
			->get()
			->getRowArray();

		return $data;
	}
}
