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
}
