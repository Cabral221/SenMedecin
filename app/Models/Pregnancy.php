<?php

namespace App\Models;

use App\Models\Patient;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\Pregnancy
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon $date
 * @property \Illuminate\Support\Carbon $accouchement
 * @property int $patient_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read Patient $patient
 * @method static \Illuminate\Database\Eloquent\Builder|Pregnancy newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pregnancy newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pregnancy query()
 * @method static \Illuminate\Database\Eloquent\Builder|Pregnancy whereAccouchement($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pregnancy whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pregnancy whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pregnancy whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pregnancy wherePatientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pregnancy whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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
