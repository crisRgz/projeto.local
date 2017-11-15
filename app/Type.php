<?php namespace SocioSanitario;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
   // Nome da taboa en MySQL.
	protected $table="types";

	// Atributos que se poden asignar de xeito masivo.
	protected $fillable = array('type');
	/*
	// Eloquent asume que cada tabla ten unha chave primaria con unha columna llamada id.
	id -> autoincrement
	type -> External/Day-care/Home
	*/
	
	protected $hidden = ['created_at','updated_at']; 
 
	// types - services:
	public function services()
	{	
		// 1 type N services
		return $this->hasMany('SocioSanitario\Service');
	}
}