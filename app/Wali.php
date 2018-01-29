<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wali extends Model
{
    
	protected $table = 'wali';
	protected $fillable = array('nama', 'id_siswa');

	public function siswa() {
		return $this->belongsTo('App\Siswa', 'id_siswa');
	}

}
?>
