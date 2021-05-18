<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Task extends BaseController
{


	public function index()
	{
		// dd(date('Y-m-d'));
		$data = [
			'ekspedisi' => $this->A30Model->getData(date('Y-m-d'))
		];

		return view('user/dashboard', $data);
	}

	public function viewTask($nopol, $tgl)
	{
		$data = [
			'dataA' => $this->A31aModel->getData($tgl, $nopol),
			'dataB' => $this->A31bModel->getDataB($tgl, $nopol)
		];

		// dd($data);

		return view('user/detail_task', $data);
	}

	public function check($nopol, $tgl)
	{
		$status = $this->request->getPost('status');
		$tipe = $this->request->getPost('tipe');

		// dd($tgl);

		$data = [
			'data_check' => $this->A32aModel->searching($tgl, $nopol, $status, $tipe),
			'type' => $this->MotorModel->getTypeMotor(),
			'warna' => $this->MotorModel->getWarnaMotor(),
		];

		return view('user/checking', $data);
	}

	public function search_check($nopol)
	{
		$status = $this->request->getPost('status');
		$tipe = $this->request->getPost('tipe');

		$data = [
			'data_check' => $this->A32Model->searching('2021-04-01', $nopol, $status, $tipe),
			'type' => $this->MotorModel->getTypeMotor(),
			'warna' => $this->MotorModel->getWarnaMotor(),
		];

		return view('user/data_ekspedisi', $data);
	}

	public function defect_check($key)
	{

		$nf = $this->A33aModel->check_defect($key);

		foreach ($nf as $nf) {
			$key_kerusakan = $nf['noframe'];
		}

		if (isset($_POST['save_nf'])) {
			$data = [
				'no_frame' => $this->request->getPost('nf'),
				'no_mesin' => $this->request->getPost('ne'),
			];

			$this->DetailEkspedisiModel->updateData($data, $key);
		}

		if (isset($_POST['tambah'])) {
			$data = [
				'id_detail_ekspedisi' => $key,
				'id_kerusakan' => $this->request->getPost('id_kerusakan')
			];

			$this->DetailKerusakanModel->insertDtlKerusakan($data);
		}

		if (isset($_POST['delete'])) {
			$id_kerusakan = $this->request->getPost('delete');
			$this->DetailKerusakanModel->deleteKerusakan($id_kerusakan, $key);
		}
		$data = [
			'data_check' => $this->A33aModel->check_defect($key),
			'kerusakan' => $this->KerusakanModel->kerusakan(),
			'dtl_kerusakan' => $this->A33bModel->showData($key)
		];

		return view('user/defect_checking', $data);
	}

	public function def_kerusakan()
	{
		$data['kerusakan'] = $this->KerusakanModel->kerusakan();

		return view('user/defect_checking', $data);
	}

	public function previewKerusakan()
	{
		return view('user/preview');
	}

	// query untuk pencarian kerusaan
	// SELECT kerusakan.id_kerusakan, kerusakan.deskripsi from kerusakan WHERE kerusakan.id_motor in (SELECT motor.id_motor from motor WHERE motor.jenis_motor = 'mat' AND motor.merk_motor = 'scoopy' AND motor.tipe_motor = 'lna' AND motor.warna_motor = 'bl') 
}
