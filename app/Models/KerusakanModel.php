<?php

namespace App\Models;

use CodeIgniter\Model;

class KerusakanModel extends Model
{
	protected $table                = 'kerusakan';
	protected $primaryKey           = 'id_kerusakan';
	protected $useAutoIncrement     = true;
	protected $allowedFields        = [
		'id_motor',
		'deskripsi',
		'no_part'
	];

	// Dates
	protected $useTimestamps        = false;

	public function kerusakan()
	{
		$data = $this->db->table($this->table)
			->get()
			->getResultArray();

		return $data;
	}

	public function insertKerusakan($data)
	{
		return $this->db->table($this->table)->insert($data);
	}
	// SELECT kerusakan.id_kerusakan, kerusakan.deskripsi from kerusakan 
	// WHERE kerusakan.id_motor in 
	// (SELECT motor.id_motor from motor 
	// WHERE motor.jenis_motor = 'mat' AND motor.merk_motor = 'scoopy' AND motor.tipe_motor = 'lna' AND motor.warna_motor = 'bl') 

	public function cariKerusakan($id_motor)
	{
		// $id_motor = $this->db->table('motor')
		// 	->where([
		// 		'jenis_motor' => $jenis,
		// 		'merk_motor' => $merk,
		// 		'tipe_motor' => $tipe,
		// 		'warna_motor' => $warna
		// 	])
		// 	->get()
		// 	->getResultArray();

		// foreach ($id_motor as $id) {
		// 	$id_mtr = $id['id_motor'];
		// }

		// return $id_motor;
		$kerusakan = $this->db->table($this->table)
			->where('id_motor', $id_motor)
			->get()
			->getResultArray();

		return $kerusakan;
	}

	public function getKerusakan($id)
	{
		$data = $this->db->table($this->table)
			->where('id_kerusakan', $id)
			->get()->getRowArray();

		return $data;
	}

	public function updateKerusakan($id, $data)
	{
		return $this->db->table($this->table)
			->update($data, ['id_kerusakan' => $id]);
	}

	public function deleteKerusakan($id)
	{
		return $this->db->table($this->table)
			->where(['id_kerusakan' => $id,])
			->delete();
	}
}
