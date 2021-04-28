<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Task extends BaseController
{


	public function index()
	{
		$data = [
			'ekspedisi' => $this->A30Model->getData('2021-04-01')
		];

		return view('user/dashboard', $data);
	}

	public function viewTask($nopol)
	{
		$data = [
			'dataA' => $this->A31aModel->getData('2021-04-01', $nopol),
			'dataB' => $this->A31bModel->getDataB('2021-04-01', $nopol)
		];

		return view('user/detail_task', $data);
	}

	public function check($nopol)
	{
		$status = $this->request->getPost('status');
		$tipe = $this->request->getPost('tipe');

		$data = [
			'data_check' => $this->A32Model->searching('2021-04-01', $nopol, $status, $tipe),
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
		$data = [
			'data_check' => $this->A33aModel->check_defect($key),
			'kerusakan' => $this->KerusakanModel->kerusakan()
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
