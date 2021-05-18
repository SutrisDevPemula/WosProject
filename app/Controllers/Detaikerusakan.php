<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Detaikerusakan extends BaseController
{
	public function insertDtlKerusakan()
	{
		$uri = $this->request->getPost('id_detail_ekspedisi');
		// $key_kerusakan = $this->request->getPost('tambah');

		$data = [
			'id_detail_ekspedisi' => $this->request->getPost('id_detail_ekspedisi'),
			'id_kerusakan' => $this->request->getPost('id_kerusakan')
		];
		// $data = array();

		// dd($data);
		$this->DetailKerusakanModel->insertDtlKerusakan($data);
		return redirect()->to(base_url('defect/' . $uri . '/check'));
	}
}
