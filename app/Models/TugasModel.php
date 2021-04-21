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
		'status'
	];

	// Dates
	protected $useTimestamps        = false;
}
