<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matapel extends Model
{
   
	protected $table = 'matapelajaran';
	protected $fillable = array('nama_mapel', 'kkm');

	
	public function siswa() {
		return $this->belongsToMany('App\siswa', 'siswa_mapel', 'id_siswa', 'id_mapel');
	}
}
?>