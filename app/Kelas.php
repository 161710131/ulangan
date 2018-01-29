<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    
	protected $table = 'kelas';
	protected $fillable = array('nama_kelas');

	public function siswa() {
		return $this->belongsTo('App\Siswa', 'id_kelas');
	}

}
?>