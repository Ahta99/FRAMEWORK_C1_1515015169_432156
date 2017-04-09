<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\jadwal_matakuliah;

class jadwal_matakuliahController extends Controller
{
    protected $informasi = "Gagal Melakukan Aksi";
	
    public function awal()
	{
		$semuajadwal = jadwal_matakuliah::all();
		return view('jadwal_matakuliah.awal', compact('semuajadwal'));
	}
	public function tambah()
	{
		return view('jadwal_matakuliah.tambah');
	}
	public function simpan(Request $input)
	{
		$jadwal_matakuliah = new jadwal_matakuliah();
		$jadwal_matakuliah->mahasiswa_id = $input->mahasiswa_id;
		$jadwal_matakuliah->ruangan_id = $input->ruangan_id;
		$jadwal_matakuliah->dosen_matakuliah_id=$input->dosen_matakuliah_id;
		if($jadwal_matakuliah->save()){
			$this->informasi = 'Berhasil simpan data';
		
		}
			
		return redirect('jadwal_matakuliah')->with(['informasi' => $this->informasi]);
		}
	
	public function edit($id){
		$jadwal_matakuliah=jadwal_matakuliah::find($id);
		return view('jadwal_matakuliah.edit')->with(array('jadwal_matakuliah'=>$jadwal_matakuliah));
	}
	public function lihat($id){
		$jadwal_matakuliah = jadwal_matakuliah::find($id);
		return view('jadwal_matakuliah.lihat')->with(array('jadwal_matakuliah'=>$jadwal_matakuliah));
	}
	public function update($id, Request $input){
		$jadwal_matakuliah = jadwal_matakuliah::find($id);
		$jadwal_matakuliah->mahasiswa_id = $input->mahasiswa_id;
		$jadwal_matakuliah->ruangan_id = $input->ruangan_id;
		$jadwal_matakuliah->dosen_matakuliah_id = $input->dosen_matakuliah_id;
		$jadwal_matakuliah->save();
			
			
			if($jadwal_matakuliah->save()){
				$this->informasi='Berhasil simpan data';
			}
			else{
				$this->informasi="Berhasil simpan data";
			}
		return redirect('jadwal_matakuliah')->with(['informasi' => $this->informasi]);
		}
	
	public function hapus($id){
		$jadwal_matakuliah = jadwal_matakuliah::find($id);
			if($jadwal_matakuliah->delete()){
				$this->informasi = 'Berhasil hapus data';
			}
		return redirect('jadwal_matakuliah/awal')->with(['informasi => $informasi']);
		
	}
}
