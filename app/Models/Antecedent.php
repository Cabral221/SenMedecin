<?php

namespace App\Models;

use App\Models\Patient;
use Illuminate\Database\Eloquent\Model;

class Antecedent extends Model
{
    public $guarded = [];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
