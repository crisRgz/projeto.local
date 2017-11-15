<?php namespace SocioSanitario;
//---------------- 1 ------------------------

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
	// Nome da taboa en MySQL.
	protected $table="services";

	// Atributos que se poden asignar de xeito masivo.
	protected $fillable = array('name','description','idType');

	/*
	id -> autoincrement
	name -> name of the service
	description -> desciption of the service.
	idTipo -> type id
	*/

	protected $hidden = ['created_at','updated_at'];

	// Service - treatment:
	public function treatments()
	{
		// 1 Service N treatments
		return $this->hasMany('SocioSanitario\Treatment');
	}

	// Service - Type
	public function types()
	{
		// 1 service 1 type.
		return $this->belongsTo('SocioSanitario\Type');
	}
}