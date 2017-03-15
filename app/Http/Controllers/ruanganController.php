<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\ruangan;

class ruanganController extends Controller
{
    public function awal()
	{
		return "Link ruangan";
	}
	public function tambah()
	{
		return $this->simpan();
	}
	public function simpan()
	{
		$ruangan = new ruangan();
		$ruangan->title = "R401";
		$ruangan->save();
		return "Data Ruangan Dengan Title {$ruangan->title} Telah Disimpan";
	}
}
