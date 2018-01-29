<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Wali;
use App\Guru;
use App\Kelas;
class Siswa extends Model
{
	protected $table = 'siswa';
	protected $fillable = array('nama' , 'nim' , 'id_guru' , 'id_kelas');

	public function wali() {
		return $this->hasOne('App\Wali', 'id_siswa');
	}
	public function Guru(){
		return $this->belongsTo('App\Guru', 'id_guru');
	}
	public function Kelas(){
		return $this->belongsTo('App\Kelas', 'id_kelas');
	}

}
?>
