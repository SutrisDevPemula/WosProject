<?php

namespace App\Controllers;

// use App\Controllers\BaseController;

use App\Models\A32aModel;
use App\Models\DetailekspedisiModel;
use App\Models\EkspedisiModel;
use App\Models\KerusakanModel;
use App\Models\MotorModel;
use App\Models\PenggunaModel;
use App\Models\TugasModel;
use CodeIgniter\RESTful\ResourceController;

class Ekspedisi extends ResourceController
{
	protected $EkspedisiModel;
	protected $DetailEkspedisiModel;
	protected $KerusakanModel;
	protected $MotorModel;
	protected $PenggunaModel;
	protected $TugasModel;
	protected $format    = 'json';

	public function __construct()
	{
		$this->EkspedisiModel = new EkspedisiModel();
		$this->DetailEkspedisiModel = new DetailekspedisiModel();
		$this->KerusakanModel = new KerusakanModel();
		$this->MotorModel = new MotorModel();
		$this->PenggunaModel = new PenggunaModel();
		$this->TugasModel = new TugasModel();
		$this->validation = \Config\Services::validation();
	}


	public function index()
	{
		//
	}

	public function showEkspedisi()
	{
		$ekspedisi = $this->respond($this->EkspedisiModel->findAll());

		return $ekspedisi;
		// dd($ekspedisi);
	}

	public function addEkspedisi()
	{
		$data = [
			'no_polisi' => $this->request->getPost("no_polisi"),
			'nama_ekspedisi' => $this->request->getPost("nama_ekspedisi"),
			'no_do' => $this->request->getPost('no_do'),
			'no_do' => $this->request->getPost('no_do'),
			'no_sp_list' => $this->request->getPost('no_sp_list'),
			'tgl_sp_list' => $this->request->getPost('tgl_sp_list'),
			'tgl_do' => $this->request->getPost('tgl_do'),
		];
		// [{"key":"no_polisi","value":"DR2458EA","equals":true,"description":"","enabled":true}]

		var_dump($this->request->getPost("no_polisi"));
		$simpan = $this->EkspedisiModel->insertEkspedisi($data);

		if ($simpan) {
			$msg = ['message' => 'Created category successfully'];
			$response = [
				'status' => 200,
				'error' => false,
				'data' => $msg,
			];
			return $this->respond($response, 200);
		}
	}

	public function showDetails()
	{
		$dtlEkspedisi = $this->DetailEkspedisiModel->asObject()->findAll();
		dd($dtlEkspedisi);
	}


	public function checking($nopol, $tgl)
	{
		// dd($nopol);
		$A32Model = new A32aModel();

		$status = $this->request->getPost('status');
		$tipe = $this->request->getPost('tipe');

		$data = $this->respond($A32Model->searching($tgl, $nopol, $status, $tipe));

		return ($data);
	}

	public function search_ekspedisi($nopol)
	{
		$A32Model = new A32aModel();

		$status = $this->request->getJSON()->status;
		$tipe = $this->request->getJSON()->tipe;

		// var_dump($status);
		// var_dump($tipe);
		// var_dump();

		$data = $this->respond($A32Model->searching('2021-04-01', $nopol, $status, $tipe));

		return ($data);
	}

	public function def_kerusakan()
	{
		$kerusakan = new KerusakanModel();

		$data = $this->respond($kerusakan->kerusakan());

		return ($data);
	}

	public function search_kerusakan()
	{
		$kerusakan = new KerusakanModel();

		// $jenis = $this->request->getJSON()->jenis;
		// $merk = $this->request->getJSON()->merk;
		// $tipe = $this->request->getJSON()->tipe;
		// $warna = $this->request->getJSON()->warna;
		$id_motor = $this->request->getJSON()->kerusakan;

		$data = $this->respond($kerusakan->cariKerusakan($id_motor));

		return ($data);
	}
}
