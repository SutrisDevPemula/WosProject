<?php

namespace App\Models;

use CodeIgniter\Model;

class EkspedisiModel extends Model
{
	protected $table                = 'ekspedisi';
	protected $primaryKey           = 'id_ekspedisi';
	protected $useAutoIncrement     = true;
	protected $allowedFields        = [
		'no_polisi',
		'nama_ekspedisi',
		'no_do',
		'no_sp_list',
		'tgl_sp_list',
		'tgl_do'
	];

	// Dates
	protected $useTimestamps        = false;

	public function insertEkspedisi($data)
	{
		return $this->db->table($this->table)->insert($data);
	}

	public function getDataEkspedisi()
	{
		$data = $this->db->table($this->table)->get()->getResultArray();

		return $data;
	}

	public function getEkspedisi($id)
	{
		$data = $this->db->table($this->table)
			->where('id_ekspedisi', $id)
			->get()->getRowArray();

		return $data;
	}

	public function updateEkspedisi($id, $data)
	{
		return $this->db->table($this->table)
			->update($data, ['id_ekspedisi' => $id]);
	}

	public function deleteEkspedisi($id)
	{
		return $this->db->table($this->table)
			->where('id_ekspedisi', $id)
			->delete();
	}
}
