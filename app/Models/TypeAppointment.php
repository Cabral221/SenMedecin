<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Services\Appointment\Appointment;

class TypeAppointment extends Model
{
    public $guarded = [];

    public function appointment()
    {
        return $this->hasMany(Appointment::class);
    }
}
