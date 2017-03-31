<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    protected $table='mahasiswa';
	protected $fillable=['nama','nim','alamat'];
	protected $guarded=['id'];
	
	public function Pengguna()
	{
		return $this->belongsTo(Pengguna::class); //mengembalikan return this dimana nilai this didapat dari class pengguna 
	}
	
	public function jadwalmatakuliah()
	{
		return $this->hasMany(jadwalmatakuliah::class,'mahasiswa_id'); //mengembalikan return this dimana nilai this didapat dari class jadwalmatakuliah dengan relasi one to many
	}
}
