<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ruangan extends Model
{
    protected $table='ruangan';
	protected $fillable=['title'];

	public function dosen_matakuliah()
	{
		return $this->hasMany(jadwal_matakuliah::class,'jadwal_matakuliah_id');  //mengembalikan return this dimana nilai this didapat dari class jadwalmatakuliah dengan relasi one to many
	}
}
