<?php

namespace App\Models;

use App\Models\Patient;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Antecedent extends Model
{
    public $guarded = [];

    public function patient() : BelongsTo
    {
        return $this->belongsTo(Patient::class);
    }
}
