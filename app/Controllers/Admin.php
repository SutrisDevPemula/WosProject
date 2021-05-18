<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Dompdf\Dompdf;
use Dompdf\Options;

// require_once 'dompdf/autoload.inc.pdf';

class Admin extends BaseController
{
	public function index()
	{
		$data = [
			// 'ekspedisi' => $this->A31aModel->where('tanggal', '2021-04-01')->findAll()
			'ekspedisi' => $this->A31aModel->findAll()

		];

		return view('admin/home', $data);
	}

	public function preview($key)
	{
		$dataName = $this->A31aModel->where('key', $key)->first();

		// dd($dataName);

		$tanggal = $dataName['tanggal'];
		$nopol = $dataName['nopol'];


		$data = [
			'ekspedisi' => $this->A31aModel->where('key', $key)->first(),
			'a34a' => $this->A34aModel->where(['tanggal' => $tanggal, 'nopol' => $nopol])->findAll(),
			'a34b' => $this->A34bModel->where(['tanggal' => $tanggal, 'nopol' => $nopol])->first()
		];
		// dd($data);

		return view('admin/preview', $data);
	}

	public function print($key)
	{

		$dataName = $this->A31aModel->where('key', $key)->first();

		// dd($dataName);

		$tanggal = $dataName['tanggal'];
		$nopol = $dataName['nopol'];
		$ekspedisi = $dataName['nama'];

		$data = [
			'a31' => $this->A31aModel->where('key', $key)->first(),
			'a34a' => $this->A34aModel->where(['tanggal' => $tanggal, 'nopol' => $nopol])->findAll()
		];

		$document = view('admin/print', $data);

		$dompdf = new Dompdf();

		$dompdf->loadHtml($document);

		// (Optional) Setup the paper size and orientation
		$dompdf->setPaper('A4', 'portrait');

		// Render the HTML as PDF
		$dompdf->render();

		// Output the generated PDF to Browser
		$dompdf->stream(str_replace('-', '', $tanggal) . "-" . $nopol . "-" . $ekspedisi);
	}

	// simpan data
	public function user()
	{
		if (isset($_POST['save'])) {
			$data = [
				'pengguna' => $this->request->getPost('pengguna'),
				'sandi' => $this->request->getPost('sandi'),
				'hak' => $this->request->getPost('hak')
			];

			$this->PenggunaModel->insertUser($data);
			return redirect()->to(base_url('admin/user'));
		} else {
			$showData['pengguna'] = $this->PenggunaModel->getDataUser();

			return view('admin/user', $showData);
		}
	}

	public function ekspedisi()
	{
		if (isset($_POST['save'])) {
			$data = [
				'no_polisi' => $this->request->getPost('no_polisi'),
				'nama_ekspedisi' => $this->request->getPost('nama_ekspedisi'),
				'no_do' => $this->request->getPost('no_do'),
				'no_sp_list' => $this->request->getPost('no_sp_list'),
				'tgl_sp_list' => $this->request->getPost('tgl_sp_list'),
				'tgl_do' => $this->request->getPost('tgl_do'),
			];

			$simpanEkspedisi = $this->EkspedisiModel->insertEkspedisi($data);
			if ($simpanEkspedisi) {
				session()->setFlashdata('success', 'Data ekspedisi berhasil ditambah');
				return redirect()->to(base_url('admin/ekspedisi'));
			}
		} else {
			$showData['ekspedisi'] = $this->EkspedisiModel->getDataEkspedisi();

			return view('admin/ekspedisi', $showData);
		}
	}

	public function motor()
	{
		if (isset($_POST['save'])) {
			$data = [
				'jenis_motor' => $this->request->getPost('jenis_motor'),
				'merk_motor' => $this->request->getPost('merk_motor'),
				'tipe_motor' => $this->request->getPost('tipe_motor'),
				'warna_motor' => $this->request->getPost('warna_motor'),
			];

			$this->MotorModel->insertMotor($data);
			return redirect()->to(base_url('admin/motor'));
		} else {
			$showData['motor'] = $this->MotorModel->getAllMotor();

			return view('admin/motor', $showData);
		}
	}

	public function kerusakan()
	{
		if (isset($_POST['save'])) {
			$data = [
				'id_motor' => $this->request->getPost('id_motor'),
				'deskripsi' => $this->request->getPost('deskripsi'),
				'no_part' => $this->request->getPost('no_part')
			];

			// dd($data);
			$this->KerusakanModel->insertKerusakan($data);
			return redirect()->to(base_url('admin/kerusakan'));
		} else {
			$showData = [
				'kerusakan' => $this->KerusakanModel->kerusakan(),
				'motor' => $this->MotorModel->getAllMotor()
			];

			return view('admin/kerusakan', $showData);
		}
	}

	public function dtlEkspedisi()
	{

		$id_tugas = $this->TugasModel->getId();

		if (isset($_POST['save'])) {
			$jenis = $this->request->getPost('jenis_motor');
			$merk = $this->request->getPost('merk_motor');
			// $tipe = $this->request->getPost('tipe_motor');
			// $warna = $this->request->getPost('warna_motor');

			$motor = $this->MotorModel->where([
				'jenis_motor' => $jenis,
				'merk_motor' => $merk,
				// 'tipe_motor' => $tipe,
				// 'warna_motor' => $warna
			])->first();

			$id_motor = $motor['id_motor'];

			$data = [
				'id_motor' => $id_motor,
				'no_frame' => $this->request->getPost('no_frame'),
				'no_mesin' => $this->request->getPost('no_mesin'),
				'id_tugas' => $id_tugas['id_tugas'],
				'status_cek' => '0',
				'status_rusak' => '0'
			];

			$value = $this->request->getPost('jumlah');
			$i = 1;
			while ($i <= $value) {
				$simpan = $this->DetailEkspedisiModel->insertDtlEkspedisi($data);
				$i++;
			}

			if ($simpan) {
				session()->setFlashdata('success', 'Data berhasil ditambah');
				return redirect()->to(base_url('admin/addDtlEkspedisi'));
			}
		} else {
			$dataMotor = [
				'jenis' => $this->MotorModel->findColumn('jenis_motor'),
				'merk' => $this->MotorModel->findColumn('merk_motor'),
				'tipeMotor' => $this->MotorModel->groupBy('tipe_motor')->findColumn('tipe_motor'),
				'warna' => $this->MotorModel->findColumn('warna_motor'),
			];

			// dd($dataMotor);
			return view('admin/add_dtl_ekspedisi', $dataMotor);
		}
	}

	public function tugas()
	{
		if (isset($_POST['save'])) {

			$ekspedisi = $this->request->getPost('nama');
			$nopol = $this->request->getPost('nopol');

			$id_ekspedisi = $this->EkspedisiModel->where(['nama_ekspedisi' => $ekspedisi, 'no_polisi' => $nopol])->first();

			$data = [
				'id_ekspedisi' => $id_ekspedisi['id_ekspedisi'],
				'id_pengguna' => '1',
				'tgl_ekspedisi' => $this->request->getPost('tgl_ekspedisi'),
				'nama_supir' => $this->request->getPost('sopir'),
				'status' => '0'
			];

			$simpan = $this->TugasModel->insertTugas($data);

			if ($simpan) {
				session()->setFlashdata('success', 'Data tugas berhasil ditambah');
				return redirect()->to(base_url('admin/addDtlEkspedisi'));
			}
		} else {
			$data = [
				'ekspedisi' => $this->EkspedisiModel->getDataEkspedisi(),
				'nopol' => $this->EkspedisiModel->getDataEkspedisi(),
				// 'petugas' => $thi
			];

			return view('admin/addTugas', $data);
		}
	}

	// delete data
	public function deleteUser($id)
	{
		$this->PenggunaModel->deleteUser($id);
		return redirect()->to(base_url('admin/user'));
	}

	public function deleteEkspedisi($id)
	{
		$this->EkspedisiModel->deleteEkspedisi($id);
		return redirect()->to(base_url('admin/ekspedisi'));
	}

	public function deleteMotor($id)
	{
		$this->MotorModel->deleteMotor($id);
		return redirect()->to(base_url('admin/motor'));
	}

	public function deleteKerusakan($id)
	{
		$this->KerusakanModel->deleteKerusakan($id);
		return redirect()->to(base_url('admin/kerusakan'));
	}

	// update data
	public function updateUser($id)
	{
		if (isset($_POST['simpan'])) {
			$id_pengguna = $this->request->getPost('id_user');

			$data = [
				'pengguna' => $this->request->getPost('pengguna'),
				'sandi' => $this->request->getPost('sandi'),
				'hak' => $this->request->getPost('hak')
			];

			$updateUser = $this->PenggunaModel->updateUser($id_pengguna, $data);
			if ($updateUser) {
				session()->setFlashdata('success', 'Data user atau pengguna berhasil diupdate');
				return redirect()->to(base_url('admin/user'));
			}
		} else {
			$showData['pengguna'] = $this->PenggunaModel->getUser($id);
			return view('admin/userEdit', $showData);
		}
	}

	public function updateEkspedisi($id)
	{
		if (isset($_POST['save'])) {
			$id_ekspedisi = $this->request->getPost('id_ekspedisi');

			$data = [
				'no_polisi' => $this->request->getPost('no_polisi'),
				'nama_ekspedisi' => $this->request->getPost('nama_ekspedisi'),
				'no_do' => $this->request->getPost('no_do'),
				'no_sp_list' => $this->request->getPost('no_sp_list'),
				'tgl_sp_list' => $this->request->getPost('tgl_sp_list'),
				'tgl_do' => $this->request->getPost('tgl_do'),
			];

			$updateEkspedisi = $this->EkspedisiModel->updateEkspedisi($id_ekspedisi, $data);

			if ($updateEkspedisi) {
				session()->setFlashdata('success', 'Data ekspedisi berhasil diupdate');
				return redirect()->to(base_url('admin/ekspedisi'));
			}
		} else {
			$showData['ekspedisi'] = $this->EkspedisiModel->getEkspedisi($id);
			return view('admin/ekspedisiEdit', $showData);
		}
	}

	public function updateMotor($id)
	{
		if (isset($_POST['save'])) {

			$id_motor = $this->request->getPost('id_motor');
			$data = [
				'jenis_motor' => $this->request->getPost('jenis_motor'),
				'merk_motor' => $this->request->getPost('merk_motor'),
				'tipe_motor' => $this->request->getPost('tipe_motor'),
				'warna_motor' => $this->request->getPost('warna_motor'),
			];

			$updateMotor = $this->MotorModel->updateMotor($id_motor, $data);

			if ($updateMotor) {
				session()->setFlashdata('success', 'Data motor berhasil diupdate');
				return redirect()->to(base_url('admin/motor'));
			}
		} else {
			$showData['motor'] = $this->MotorModel->getMotor($id);

			return view('admin/motorEdit', $showData);
		}
	}

	public function updateKerusakan($id)
	{
		if (isset($_POST['save'])) {
			$id_kerusakan = $this->request->getPost('id_kerusakan');
			$data = [
				'id_motor' => $this->request->getPost('id_motor'),
				'deskripsi' => $this->request->getPost('deskripsi'),
				'no_part' => $this->request->getPost('no_part')
			];

			// dd($data);
			$this->KerusakanModel->updateKerusakan($id_kerusakan, $data);
			return redirect()->to(base_url('admin/kerusakan'));
		} else {
			$showData = [
				'kerusakan' => $this->KerusakanModel->getKerusakan($id),
				'motor' => $this->MotorModel->getAllMotor()
			];
			return view('admin/kerusakanEdit', $showData);
		}
	}
}
