<?php namespace SocioSanitario;
//---------------- 1 ------------------------

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
	// Nome da taboa en MySQL.
	protected $table="employees";

	// Atributos que se poden asignar de xeito masivo.
	protected $fillable = array('NIF','name','lastName1','lastName2','address','phone','idUser');
	/*
	// Eloquent asumes every table has a column named id as PK 
	id -> autoincremental
	name -> Nome do Empregado que se rexistra na aplicación
	lastName1 -> 1º last Name
	lastName2 -> 2º last Name
	address -> Employee's contact phone number 
	*/

	// Hidden data.
	protected $hidden = ['created_at','updated_at'];

	// Relationships.
	// Examples:
	// 1 usuario ten 1 teléfono        -> hasOne() Relación 1:1
	// 1 teléfono pertence a 1 usuario -> belongsTo() Relación 1:1 inversa a hasOne()
	// 1 post ten moitos comentarios   -> hasMany() Relación 1:N
	// 1 comentario pertence a 1 post  -> belongsTo() Relación 1:N inversa a hasMany()
	// 1 usuario pode ter moitos rols  -> belongsToMany()
	// 1 rol pode ter moitos usuarios  -> belongsToMany() Relación N:M precisa de táboa pivot

	// Relationship Emplyee - USER:
	public function users()
	{
		// 1 Emloyee is 1 user
		// $this references to the actual Employee.
		return $this->belongsTo('SocioSanitario\User');
	}

	// Relationship Employee - patient:
	public function treatments()
	{
		// 1 Employee N treatments
		return $this->hasMany('SocioSanitario\Treatment',  'idEmp');
	}

	public function patients()
	{
	    return $this->belongsToMany(Patient::class, 'treatments', 'idPat');
	}

	// Relación de Empregado con Empresa:
	/*public function empresa()
	{
		// 1 Empregado pode estar en 1 ou varias empresas
		// $this fai referencia ao obxecto que tenhamos nese momento de Empregado.
		return $this->belongsToMany('SocioSanitario\Empregado')->withTimestamps()->withPivot('idEmpa');
	}*/
}