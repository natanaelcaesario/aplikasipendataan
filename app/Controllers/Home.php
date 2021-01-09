<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function __construct()
	{
		helper('form');
		helper('filesystem');
	}
	public function index()
	{
		return view('kategori');
	}
	// pengguna
	public function login()
	{
		if ($this->request->getPost()) {
			$adminModel = new \App\Models\AdminModel();
			$Admin = new \App\Entities\Admin();
			$data = $this->request->getPost();
			$find = $adminModel->where('username', $data['username'])->first();
			if ($find) {
				if ($find->password == $data["password"]) {
					$ses_data = [
						'id_pengguna' => $find->id_mahasiswa,
						'nama' => $find->nama,
						'username' => $find->username,
						'role' => $find->role,
						'foto' => $find->foto,
						'logged' => TRUE,
						'admin' => TRUE,
					];
					$session = session();
					$session->set($ses_data);
					return redirect()->to(site_url('dashboard'));
				}
			}
			session()->setFlashdata('errors', 'Username atau password anda salah, coba perhatikan kembali');
			return redirect()->to(site_url('login'));
		}
		return view('peserta/login');
	}
	// public function daftar()
	// {
	// 	if ($this->request->getPost()) {
	// 		$penggunaModel = new \App\Models\PenggunaModel();
	// 		$pengguna = new \App\Entities\Pengguna();
	// 		$data = $this->request->getPost();
	// 		$find = $penggunaModel->where('username', $data['username'])->first();
	// 		if ($find) {
	// 			session()->setFlashdata('errors', 'Sepertinya anda sudah punya akun, login dengan akun yang ada atau hubungi admin');
	// 			return redirect()->to(site_url('login'));
	// 		}
	// 		$pengguna->fill($data);
	// 		$penggunaModel->save($pengguna);
	// 		session()->setFlashdata('success', 'Akun Anda Berhasil Dibuat');
	// 		return redirect()->to(site_url('login'));
	// 	}
	// 	return view('peserta/daftar');
	// }
	public function logout()
	{
		if (session()->has('logged')) {
			session_destroy();
			unset($ses_data);
			return redirect()->to(site_url('/'));
		}
		return redirect()->to(site_url('home'));
	}

	public function profil()
	{
		return view('profil');
	}


	// dashboard
	public function dashboard()
	{
		$admin = session()->get();
		$dataModel = new \App\Models\DataModel();
		$data = new \App\Entities\Data();
		$semua = $dataModel->findAll();
		if (!session()->has('admin')) {
			return redirect()->to(site_url('login'));
		}
		if ($this->request->getPost()) {
			$post = $this->request->getPost();
			$sertifikat = $this->request->getFile('sertifikat');
			$buktidaftar = $this->request->getFile('bukti_daftar');
			$cari = $dataModel->where('npm', $post["npm"])->find();
			if ($cari) {
				session()->setFlashdata('errors', 'Data dengan npm tersebut sudah ada!');
				return redirect()->to(site_url('dashboard'));
			}
			$bukti = './uploads/buktidaftar';
			$serti = './uploads/sertifikat';

			$data->fill($post);

			$randombukti = $buktidaftar->getRandomName();
			$randomserti = $sertifikat->getRandomName();

			$sertifikat->move($serti, $randomserti);
			$buktidaftar->move($bukti, $randombukti);
			$data->bukti_daftar = $randombukti;
			$data->sertifikat = $randomserti;

			$dataModel->save($data);
			session()->setFlashdata('success', 'Data berhasil diinput.');
			return redirect()->to(site_url('dashboard'));
		}

		return view('dashboard/pengguna', ['user' => $admin, 'semua' => $semua]);
	}
	public function kompetisi()
	{
		$user = session()->get();
		$kompetisiModel = new \App\Models\KompetisiModel();
		$listkomp = $kompetisiModel->findAll();
		if (!session()->has('admin')) {
			return redirect()->to(site_url('login'));
		}

		return view('dashboard/kompetisi', ['user' => $user, 'kompetisi' => $listkomp]);
	}


	// data
	public function editdata()
	{
		$user = session()->get();
		if (!session()->has('admin')) {
			return redirect()->to(site_url('login'));
		}
		if ($this->request->getPost()) {
			$data = $this->request->getPost();
			$id = $this->request->getPost('id');
			$dataModel = new \App\Models\DataModel();
			$update = $dataModel->update($id, $data);
			if ($update) {
				session()->setFlashdata('success', 'Data berhasil diupdate.');
				return redirect()->to(site_url('dashboard'));
			} else {
				session()->setFlashdata('error', 'Data tidak berhasil diupdate');
				return redirect()->to(site_url('dashboard'));
			}
		}
	}
	public function ambil()
	{
		$user = session()->get();
		if (!session()->has('admin')) {
			return redirect()->to(site_url('login'));
		}
		if ($this->request->getPost()) {
			$data = $this->request->getPost();
			$dataModel = new \App\Models\DataModel();
			$find = $dataModel->where('id_data', $data['id_data'])->find();
			if ($find) {
				return view('dashboard/edit/editdata', ['user' => $user, 'find' => $find]);
			}
		}
	}
	public function hapusdata()
	{
		if (!session()->has('admin')) {
			return redirect()->to(site_url('login'));
		}
		$id = $this->request->uri->getSegment(2);
		$dataModel = new \App\Models\DataModel();
		$cari = $dataModel->where('id_data', $id)->find($id);
		$path2 = './uploads/sertifikat' . '/' . $cari->sertifikat;
		$path = './uploads/buktidaftar' . '/' . $cari->bukti_daftar;
		unlink($path);
		unlink($path2);
		$dataModel->delete($id);
		return redirect()->to(site_url('dashboard'));
	}
	public function hapussertifikat()
	{
		if (!session()->has('admin')) {
			return redirect()->to(site_url('login'));
		}
		if ($this->request->getPost()) {
			$id = $this->request->getPost("id_data");
			$dataModel = new \App\Models\DataModel();
			$cari = $dataModel->where('id_data', $id)->find($id);
			$path2 = './uploads/sertifikat' . '/' . $cari->sertifikat;
			$hapusfoto = unlink($path2);
			if ($hapusfoto) {
				$update = [
					'sertifikat' => ""
				];
				$update = $dataModel->update($id, $update);
			}
		}
		return redirect()->to(site_url('dashboard'));
	}
	public function hapusbuktidaftar()
	{
		if (!session()->has('admin')) {
			return redirect()->to(site_url('login'));
		}
		if ($this->request->getPost()) {
			$id = $this->request->getPost("id_data");
			$dataModel = new \App\Models\DataModel();
			$cari = $dataModel->where('id_data', $id)->find($id);
			$path2 = './uploads/buktidaftar' . '/' . $cari->bukti_daftar;
			$hapusfoto = unlink($path2);
			if ($hapusfoto) {
				$update = [
					'bukti_daftar' => ""
				];
				$update = $dataModel->update($id, $update);
			}
		}
		return redirect()->to(site_url('dashboard'));
	}

	// ganti
	public function gantisertifikat()
	{
		if (!session()->has('admin')) {
			return redirect()->to(site_url('login'));
		}
		if ($this->request->getPost()) {
			$data = $this->request->getPost();
			$id = $data["id_data"];
			$dataModel = new \App\Models\DataModel();
			$sertifikat = $this->request->getFile('sertifikat');
			$randomserti = $sertifikat->getRandomName();
			$serti = './uploads/sertifikat';
			$sertifikat->move($serti, $randomserti);
			$update = [
				'sertifikat' => $randomserti
			];
			$dataModel->update($id, $update);
			return redirect()->to(site_url('dashboard'));
		}
	}
	public function gantibuktidaftar()
	{
		if (!session()->has('admin')) {
			return redirect()->to(site_url('login'));
		}
		if ($this->request->getPost()) {
			$data = $this->request->getPost();
			$id = $data["id_data"];
			$dataModel = new \App\Models\DataModel();
			$buktidaftar = $this->request->getFile('bukti_daftar');
			$randombukti = $buktidaftar->getRandomName();
			$bukti = './uploads/buktidaftar';
			$buktidaftar->move($bukti, $randombukti);
			$update = [
				'bukti_daftar' => $randombukti
			];
			$dataModel->update($id, $update);
			return redirect()->to(site_url('dashboard'));
		}
	}

	// kompetisi
	public function tambahkompetisi()
	{
		if (!session()->has('admin')) {
			return redirect()->to(site_url('login'));
		}
		if ($this->request->getPost()) {
			$data = $this->request->getPost();
			$gambar = $this->request->getFile('gambar');
			$gambarrandom = $gambar->getRandomName();
			$kompetisiModel = new \App\Models\KompetisiModel();
			$kompetisi = new \App\Entities\Kompetisi();
			$kompetisi->fill($data);
			$lokasi = './uploads/kompetisi';
			$gambar->move($lokasi, $gambarrandom);
			$kompetisi->gambar = $gambarrandom;
			$kompetisiModel->save($kompetisi);
			session()->setFlashdata('success', 'Data berhasil diinput.');
			return redirect()->to(site_url('kompetisi'));
		}
	}
	public function editkompetisi()
	{
		$user = session()->get();
		if (!session()->has('admin')) {
			return redirect()->to(site_url('login'));
		}
		if ($this->request->getPost()) {
			$data = $this->request->getPost();
			$kompetisiModel = new \App\Models\KompetisiModel();
			$find = $kompetisiModel->where('id_kompetisi', $data['id_kompetisi'])->find();
			if ($find) {
				return view('dashboard/edit/editkompetisi', ['user' => $user, 'find' => $find]);
			}
		}
		return redirect()->to(site_url('kompetisi'));
	}
	public function hapuskompetisi()
	{
		$id = $this->request->uri->getSegment(2);
		$kompetisiModel = new \App\Models\KompetisiModel();
		$cari = $kompetisiModel->where('id_kompetisi', $id)->find($id);
		$path = './uploads/kompetisi' . '/' . $cari->gambar;
		unlink($path);
		$kompetisiModel->delete($id);
		return redirect()->to(site_url('kompetisi'));
	}
	public function updatekompetisi()
	{
		if ($this->request->getPost()) {
			$data = $this->request->getPost();
			$id = $this->request->getPost('id_kompetisi');
			$kompetisiModel = new \App\Models\KompetisiModel();
			$update = $kompetisiModel->update($id, $data);
			if ($update) {
				session()->setFlashdata('success', 'Data berhasil diupdate.');
				return redirect()->to(site_url('kompetisi'));
			} else {
				session()->setFlashdata('error', 'Data tidak berhasil diupdate');
				return redirect()->to(site_url('kompetisi'));
			}
		}
	}
	public function olimpiade()
	{
		$kompetisiModel = new \App\Models\KompetisiModel();
		$kompetisi = $kompetisiModel->findAll();
		return view('olimpiade', ['kompetisi' => $kompetisi]);
	}
	//--------------------------------------------------------------------

}
