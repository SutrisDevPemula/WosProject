<?php

namespace App\Models;

use CodeIgniter\Model;

class DetailekspedisiModel extends Model
{
	protected $table                = 'detailekspedisi';
	protected $primaryKey           = 'id_detail_ekspedisi';
	protected $useAutoIncrement     = true;
	protected $allowedFields        = [
		'id_ekspedisi',
		'id_motor',
		'id_kerusakan',
		'tanggal_ekspedisi',
		'no_frame',
		'no_mesin'
	];

	// Dates
	protected $useTimestamps        = false;
}
