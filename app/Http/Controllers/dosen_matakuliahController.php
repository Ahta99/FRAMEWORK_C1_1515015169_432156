<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\dosen_matakuliah;

class dosen_matakuliahController extends Controller
{
    protected $informasi = "Gagal Melakukan Aksi";
	
    public function awal()
	{
		$semuadosmat = dosen_matakuliah::all();
		return view('dosen_matakuliah.awal', compact('semuadosmat'));
	}
	public function tambah()
	{
		return view('dosen_matakuliah.tambah');
	}
	public function simpan(Request $input)
	{
		$dosen_matakuliah = new dosen_matakuliah();
		$dosen_matakuliah->dosen_id = $input->dosen_id;
		$dosen_matakuliah->matakuliah_id = $input->matakuliah_id;
		if($dosen_matakuliah->save()){
			$this->informasi = 'Berhasil simpan data';
		
		}
			
		return redirect('dosen_matakuliah')->with(['informasi' => $this->informasi]);
		}
	
	public function edit($id){
		$dosen_matakuliah=dosen_matakuliah::find($id);
		return view('dosen_matakuliah.edit')->with(array('dosen_matakuliah'=>$dosen_matakuliah));
	}
	public function lihat($id){
		$dosen_matakuliah = dosen_matakuliah::find($id);
		return view('dosen_matakuliah.lihat')->with(array('dosen_matakuliah'=>$dosen_matakuliah));
	}
	public function update($id, Request $input){
		$dosen_matakuliah = dosen_matakuliah::find($id);
		$dosen_matakuliah->dosen_id = $input->dosen_id;
		$dosen_matakuliah->matakuliah_id = $input->matakuliah_id;
		$dosen_matakuliah->save();
			
			if($dosen_matakuliah->save()){
				$this->informasi='Berhasil simpan data';
			}
			else{
				$this->informasi="Berhasil simpan data";
			}
		return redirect('dosen_matakuliah')->with(['informasi' => $this->informasi]);
		}
	
	public function hapus($id){
		$dosen_matakuliah = dosen_matakuliah::find($id);
			if($dosen_matakuliah->delete()){
				$this->informasi = 'Berhasil hapus data';
			}
		return redirect('dosen_matakuliah')->with(['informasi => $informasi']);
		
	}
}
