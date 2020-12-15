<?php

namespace App\Models;

use App\Models\Patient;
use Illuminate\Database\Eloquent\Model;

class Carnet extends Model
{
    protected $fillable = ['type'];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
