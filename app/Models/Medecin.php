<?php

namespace App\Models;

use App\Models\Patient;
use App\Models\Responsable;
use App\Models\Partener_service;
use Illuminate\Notifications\Notifiable;
use App\Services\Appointment\Appointment;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Medecin extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'phone', 'gen_password', 'email', 'password','service_id','responsable_id','is_active'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getFullNameAttribute()
    {
        return "{$this->first_name} {$this->last_name}";
    }

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }

    public function responsable()
    {
        return $this->belongsTo(Responsable::class);
    }

    public function patients()
    {
        return $this->hasMany(Patient::class);
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }

    public function partOfPatient(): int
    {
        // recuperer tout les patient du responsable
        $allPatient = 0;
        $allMedecin = $this->responsable->medecins;
        foreach ($allMedecin as $med) {
            $allPatient += $med->patients->count();
        }

        $myPatients = $this->patients->count();

        return $myPatients * 100 / $allPatient;
    }

    public function lastAppointment() : Appointment
    {
        return $this->appointments()->where('passed', false)->first();
    }
}
