<?php

namespace App\Models;

use App\Models\Pev;
use App\Models\Patient;
use Illuminate\Database\Eloquent\Model;
use App\Services\Appointment\Appointment;

class Children extends Model
{
    public $guarded = [];

    public $casts = [
        'birthday' => 'date',
    ];

    public static function booted()
    {
        $now = \Carbon\Carbon::now();
        static::created(function(Children $children) use ($now){
            $allPev = Pev::all();
            $type = TypeAppointment::where('libele', 'Vaccinal')->first();
            foreach ($allPev as $pev) {
                $date = $children->birthday->addMonth($pev->period_month);
                $children->mom->appointments()->create([
                    'children_id' => $children->id,
                    'date' => $date,
                    'description' => $pev->vaccin,
                    'type_appointment_id' => $type->id,
                    'medecin_id' => $children->mom->medecin->id,
                    'passed' => ($date > $now) ? false : true,
                ]);
            }
        });
    }

    public function getFullNameAttribute()
    {
        return "{$this->first_name} {$this->last_name}";
    }

    public function mom()
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }


}
