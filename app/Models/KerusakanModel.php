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
}
