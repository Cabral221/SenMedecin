<?php

namespace App\Services\Appointment;

use App\Models\Medecin;
use App\Models\Patient;
use App\Models\TypeAppointment;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    public $fillable = ['type_appointment_id','description','medecin_id','date'];
    
    public $casts = [
        'date' => 'date',
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

}