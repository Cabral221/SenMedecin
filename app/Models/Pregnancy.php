<?php

namespace App\Models;

use App\Models\Patient;
use Illuminate\Database\Eloquent\Model;

class Pregnancy extends Model
{
    public $fillable = ['date', 'accouchement'];

    public $casts = [
        'date' => 'date',
        'accouchement' =>'date',
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
