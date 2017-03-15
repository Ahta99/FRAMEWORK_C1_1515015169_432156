<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\mahasiswa;

class mahasiswaController extends Controller
{
    public function awal()
	{
		return "Link Mahasiswa";
	}
	public function tambah()
	{
		return $this->simpan();
	}
	public function simpan()
	{
		$mahasiswa = new mahasiswa();
		$mahasiswa->nama = "Taufik";
		$mahasiswa->nim = "Ahmad";
		$mahasiswa->alamat="Jalan Jurang No 2";
		$mahasiswa->save();
		return "Data Atas Nama {$mahasiswa->nama} Telah Disimpan";
	}
}
