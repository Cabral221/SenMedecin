<?php

namespace App\Services\Appointment;

use App\Models\Medecin;
use App\Models\Patient;
use App\Models\Children;
use App\Models\TypeAppointment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
    /**
     * @var array<string>
     */
    public $fillable = ['type_appointment_id','description','medecin_id','date', 'passed', 'children_id'];
    
    /**
     * @var array<string>
     */
    public $casts = [
        'date' => 'datetime',
        'passed' => 'boolean',
    ];

    public function type_appointment() : BelongsTo
    {
        return $this->belongsTo(TypeAppointment::class);
    }

    public function type() : string
    {
        return $this->type_appointment->libele;
    }

    public function patient() : BelongsTo
    {
        return $this->belongsTo(Patient::class);
    }

    public function medecin() : BelongsTo
    {
        return $this->belongsTo(Medecin::class);
    }

    public function children() : BelongsTo
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