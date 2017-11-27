<?php namespace SocioSanitario;
//---------------- N N N ------------------------

use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
	// Nome da taboa en MySQL.
	protected $table='treatments';

	// Atributos que se poden asignar de xeito masivo.
	protected $fillable = array('dateStart','dateEnd','monthlyHours','timeStart','timeEnd','done','reason','idPat','idServ','idEmp');
	/*
	id       -> autoincrement
	dateStart  -> Beginning date of the service
	dateEnd  -> Finishing date of the service
	monthlyHours -> Assigned monthly hours
	timeStart -> Time to start treatment
	timeEnd -> Time to end treatment.
	done -> boolean => was it done?
	reason -> vacations/not at home/emergencie/etc.
	idPat  -> FK id Patient
	idServ -> FK id Service
	idEmp -> FK id Employee
	*/

	protected $hidden = ['created_at','updated_at'];

	// RTreatments - patients
	public function patient()
	{
		// 1 Treatmnet 1 Patient.
		return $this->belongsTo('SocioSanitario\Patient', 'idPat');
	}

	// Treatments - Employees
	public function employee()
	{
		// 1 Treatment 1 Employee
		return $this->belongsTo('SocioSanitario\Employee','idEmp');
	}

	// Relación de Tratamento con Servizos:
	public function service()
	{
		// 1 Treatment 1 service.
		return $this->belongsTo('SocioSanitario\Service','idServ');
	}
}