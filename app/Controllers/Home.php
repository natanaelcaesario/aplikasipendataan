<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function __construct()
	{
		helper('form');
	}
	public function index()
	{
		return view('kategori');
	}

	public function login()
	{
		return view('peserta/login');
	}
	public function daftar()
	{
		return view('peserta/daftar');
	}
	public function profil()
	{
		return view('profil');
	}

	public function dashboard()
	{
		return view('dashboard/pengguna');
	}
	public function pengguna()
	{
		return view('dashboard/pengguna');
	}
	//--------------------------------------------------------------------

}
