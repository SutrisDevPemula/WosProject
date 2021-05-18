<?php

namespace App\Models;

use CodeIgniter\Model;

class MotorModel extends Model
{
	protected $table                = 'motor';
	protected $primaryKey           = 'id_motor';
	protected $useAutoIncrement     = true;
	protected $allowedFields        = [
		'jenis_motor',
		'merk_motor',
		'tipe_motor',
		'warna_motor'
	];

	// Dates
	protected $useTimestamps        = false;

	public function getTypeMotor()
	{
		$data = $this->db->table($this->table)
			->select('tipe_motor')
			->groupBy('tipe_motor')
			->get()
			->getResultArray();

		return $data;
	}
	public function getWarnaMotor()
	{
		$data = $this->db->table($this->table)
			->select('warna_motor')
			->groupBy('warna_motor')
			->get()
			->getResultArray();

		return $data;
	}

	public function getAllMotor()
	{
		$data = $this->db->table($this->table)
			->get()->getResultArray();

		return $data;
	}

	public function insertMotor($data)
	{
		return $this->db->table($this->table)->insert($data);
	}

	public function getMotor($id)
	{
		$data = $this->db->table($this->table)
			->where('id_motor', $id)
			->get()->getRowArray();

		return $data;
	}

	public function updateMotor($id, $data)
	{
		return $this->db->table($this->table)
			->update($data, ['id_motor' => $id]);
	}

	public function deleteMotor($id)
	{
		return $this->db->table($this->table)
			->where('id_motor', $id)
			->delete();
	}
}
