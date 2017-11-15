<?php namespace SocioSanitario;
//---------------- N 1 ------------------------

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
	// Nome da taboa en MySQL.
	protected $table='patients';

	// Atributos que se poden asignar de xeito masivo.
	protected $fillable = array('NIF','name','lastName1','lastName2','address','phone','contactPerson','contactPhone','lat','long','idUser');
	/*
	id -> autoincrement
	name -> Name of the patient
	lastName1 -> 1st last Name
	lastName2 -> 2nd last Name
	address -> Patient's address.
	phone -> Patient's phone number
	contactPerson -> Person to contact in case of emergencies
	ContactPhone -> contact's phone number
	lat -> Latitude.
	long -> longitude.
	idUser -> User id.
	*/

	// hidden data
	protected $hidden = ['created_at','updated_at'];

	// Relationship patient - USER:
	public function users()
	{
		// 1 Emloyee is 1 user
		// $this references to the actual Employee.
		return $this->belongsTo('SocioSanitario\User');
	}

	// Relationship User - Treatment:
	public function treatments()
	{
		// 1 usuario recibe un/varios tratamentos
		// $this fai referencia ao obxecto que tenhamos nese momento de Usuario.
		return $this->hasMany('SocioSanitario\Treatment');
	}
}