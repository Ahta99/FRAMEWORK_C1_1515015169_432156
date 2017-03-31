<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class matakuliah extends Model
{
    protected $table='matakuliah';
	protected $fillable=['title','keterangan'];
	
	public function dosen_matakuliah()
	{
		return $this->hasMany(dosen_matakuliah::class); //mengembalikan return this dimana nilai this didapat dari class dosenmatakuliah dengan relasi one to many
	}
}
