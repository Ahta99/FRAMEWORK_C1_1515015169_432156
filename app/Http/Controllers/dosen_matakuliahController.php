<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\dosen_matakuliah;

class dosen_matakuliahController extends Controller
{
    public function awal()
	{
		return "Link Cek Dosen";
	}
	public function tambah()
	{
		return $this->simpan();
	}
	public function simpan()
	{
		$dosen_matakuliah = new dosen_matakuliah();
		$dosen_matakuliah->dosen_id = "1";
		$dosen_matakuliah->matakuliah_id = "1";
		$dosen_matakuliah->save();
		return "Data Matakuliah Dosen Dengan ID {$dosen_matakuliah->dosen_id} Telah Disimpan";
	}
}
