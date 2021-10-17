<?php

namespace App\Models;

use App\Models\Patient;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pregnancy extends Model
{
    public $fillable = ['date', 'accouchement'];

    public $casts = [
        'date' => 'date',
        'accouchement' =>'date',
    ];

    public function patient() : BelongsTo
    {
        return $this->belongsTo(Patient::class);
    }
}
