<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\matakuliah;

class matakuliahController extends Controller
{
    public function awal()
	{
		return "Link Matakuliah";
	}
	public function tambah()
	{
		return $this->simpan();
	}
	public function simpan()
	{
		$matakuliah = new matakuliah();
		$matakuliah->title = "Praktikum Framework";
		$matakuliah->keterangan = "Laravel";
		$matakuliah->save();
		return "Matakuliah {$matakuliah->title} Telah Disimpan";
	}
}
