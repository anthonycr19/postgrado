<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class UsuariosProfile extends Model {

	protected $table = 'profile';

	public function getApellidosAttribute()
	{
		return $this->apellidop.' '.$this->apellidom;
	}

}
