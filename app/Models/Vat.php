<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Vat
 *
 * @property int $id
 * @property string $vaccin
 * @property int $period_month
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Vat newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Vat newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Vat query()
 * @method static \Illuminate\Database\Eloquent\Builder|Vat whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vat whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vat wherePeriodMonth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vat whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vat whereVaccin($value)
 * @mixin \Eloquent
 */
class Vat extends Model
{
    public $guarded = [];
}
