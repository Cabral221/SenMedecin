<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Pev
 *
 * @property int $id
 * @property string $vaccin
 * @property int $period_month
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Pev newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pev newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pev query()
 * @method static \Illuminate\Database\Eloquent\Builder|Pev whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pev whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pev wherePeriodMonth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pev whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pev whereVaccin($value)
 * @mixin \Eloquent
 */
class Pev extends Model
{
    public $guarded = [];
}
