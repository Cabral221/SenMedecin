<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Services\Appointment\Appointment;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TypeAppointment extends Model
{
    public $guarded = [];

    public function appointment() : HasMany
    {
        return $this->hasMany(Appointment::class);
    }
}
