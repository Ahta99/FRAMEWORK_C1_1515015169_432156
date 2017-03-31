<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
    protected $table='dosen';
	protected $fillable=['nama','nip','alamat'];

	public function Pengguna()
	{
		return $this->belongsTo(Pengguna::class); //mengembalikan return this dimana nilai this didapat dari class pengguna 
	}
	
	public function dosen_matakuliah()
	{
		return $this->hasMany(dosen_matakuliah::class); //mengembalikan return this dimana nilai this didapat dari class dosenmatakuliah dengan relasi one to many
	}
}
