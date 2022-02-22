<?php

namespace App\Models;

use App\Models\Patient;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\Carnet
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read Patient $patient
 * @method static \Illuminate\Database\Eloquent\Builder|Carnet newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Carnet newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Carnet query()
 * @method static \Illuminate\Database\Eloquent\Builder|Carnet whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Carnet whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Carnet whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Carnet extends Model
{
    protected $fillable = [];

    public function patient() : BelongsTo
    {
        return $this->belongsTo(Patient::class);
    }
}
