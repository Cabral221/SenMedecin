<?php

namespace App\Models;

use App\Models\Patient;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\Antecedent
 *
 * @property int $id
 * @property string $father
 * @property string $mother
 * @property string $family
 * @property string $other_exam
 * @property string $treating
 * @property int $patient_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read Patient $patient
 * @method static \Illuminate\Database\Eloquent\Builder|Antecedent newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Antecedent newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Antecedent query()
 * @method static \Illuminate\Database\Eloquent\Builder|Antecedent whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Antecedent whereFamily($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Antecedent whereFather($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Antecedent whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Antecedent whereMother($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Antecedent whereOtherExam($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Antecedent wherePatientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Antecedent whereTreating($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Antecedent whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Antecedent extends Model
{
    public $guarded = [];

    public function patient() : BelongsTo
    {
        return $this->belongsTo(Patient::class);
    }
}
