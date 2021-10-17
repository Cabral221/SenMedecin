<?php

namespace App\Models;

use App\Models\Patient;
use App\Models\Responsable;
use Illuminate\Notifications\Notifiable;
use App\Services\Appointment\Appointment;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Medecin Model class
 * 
 * @property Responsable $responsable
 * @property Service $service
 * @property Patient[] $patients
 * @property Appointment[] $appointments
 */
class Medecin extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'first_name', 'last_name', 'phone', 'gen_password', 'email', 'password','service_id','responsable_id','is_active'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array<string>
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array<string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getFullNameAttribute() : string
    {
        return "{$this->first_name} {$this->last_name}";
    }

    public function service() : BelongsTo
    {
        return $this->belongsTo(Service::class, 'service_id');
    }

    public function responsable() : BelongsTo
    {
        return $this->belongsTo(Responsable::class);
    }

    public function patients() : HasMany
    {
        return $this->hasMany(Patient::class);
    }

    public function appointments() : HasMany
    {
        return $this->hasMany(Appointment::class);
    }

    public function appointmentWherePassed(bool $bool = true) : Collection
    {
        return $this->appointments()->where('passed', $bool)->orderBy('date','ASC')->get();
    }

    public function partOfPatient() : float
    {
        // recuperer tout les patient du responsable
        $allPatient = 0;
        $allMedecin = $this->responsable->medecins;
        foreach ($allMedecin as $med) {
            $allPatient += count($med->patients);
        }

        $myPatients = count($this->patients);

        return $myPatients * 100 / $allPatient;
    }

    public function lastAppointment() : ?Appointment
    {
        return $this->appointments()->where('passed', false)->first();
    }
}
