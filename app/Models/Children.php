<?php

namespace App\Models;

use App\Models\Patient;
use Illuminate\Database\Eloquent\Model;

class Children extends Model
{
    public $guarded = [];

    public $casts = [
        'birthday' => 'date',
    ];

    public function getFullNameAttribute()
    {
        return "{$this->first_name} {$this->last_name}";
    }

    public function mom()
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }


}
