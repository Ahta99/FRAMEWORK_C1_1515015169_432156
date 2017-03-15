<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\dosen;

class dosenController extends Controller
{
    public function awal()
	{
		return "Link Dosen";
	}
	public function tambah()
	{
		return $this->simpan();
	}
	public function simpan()
	{
		$dosen = new dosen();
		$dosen->nama = "Ahmad";
		$dosen->nip = "Taufik";
		$dosen->alamat="Jalan Buntu No 1";
		$dosen->save();
		return "Data Atas Nama {$dosen->nama} Telah Disimpan";
	}
}
