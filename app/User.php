<?php namespace SocioSanitario;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password','rol'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // User - Employee:
    public function employees()
    {
        // 1 user N Employees
        return $this->hasMany('SocioSanitario\Employee');
    }

    // User - Patient:
    public function patients()
    {
        // 1 user N Patients
        return $this->hasMany('SocioSanitario\Patient');
    }
}
