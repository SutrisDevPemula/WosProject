<?php

namespace App\Models;

use CodeIgniter\Model;

class PenggunaModel extends Model
{
	protected $table                = 'pengguna';
	protected $primaryKey           = 'id_pengguna';
	protected $useAutoIncrement     = true;
	protected $allowedFields        = [
		'pengguna',
		'sandi',
		'hak'
	];

	// Dates
	protected $useTimestamps        = false;

	public function insertUser($data)
	{
		return $this->db->table($this->table)->insert($data);
	}

	public function getDataUser()
	{
		$data = $this->db->table($this->table)
			->get()->getResultArray();

		return $data;
	}

	public function getUser($id)
	{
		$data = $this->db->table($this->table)
			->where('id_pengguna', $id)
			->get()->getRowArray();

		return $data;
	}

	public function updateUser($id, $data)
	{
		return $this->db->table($this->table)
			->update($data, ['id_pengguna' => $id]);
	}

	public function deleteUser($id)
	{
		return $this->db->table($this->table)
			->where('id_pengguna', $id)
			->delete();
	}
}
