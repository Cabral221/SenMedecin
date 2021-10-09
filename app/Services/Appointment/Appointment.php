<?php

namespace App\Services\Appointment;

use App\Models\Medecin;
use App\Models\Patient;
use App\Models\Children;
use App\Models\TypeAppointment;
use Illuminate\Database\Eloquent\Model;

/**
 * Appointment Model
 * 
 * @property TypeAppointment $type_appointment
 * @property Medecin $medecin
 * @property Children $children
 * @property Patient $patient
 */
class Appointment extends Model
{
    public $fillable = ['type_appointment_id','description','medecin_id','date', 'passed', 'children_id'];
    
    public $casts = [
        'date' => 'datetime',
        'passed' => 'boolean',
    ];

    public function type_appointment()
    {
        return $this->belongsTo(TypeAppointment::class);
    }

    public function type()
    {
        return $this->type_appointment->libele;
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function medecin()
    {
        return $this->belongsTo(Medecin::class);
    }

    public function children()
    {
        return $this->belongsTo(Children::class);
    }

    /**
     * check if appointment is for children
     *
     * @return Children|null
     */
    public function isForChild() : ?Children
    {
        return $this->children ?? null;
    }
}