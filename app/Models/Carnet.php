<?php

namespace App\Models;

use App\Models\Patient;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Carnet extends Model
{
    protected $fillable = ['type'];

    public function patient() : BelongsTo
    {
        return $this->belongsTo(Patient::class);
    }
}
