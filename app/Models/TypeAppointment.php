<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Services\Appointment\Appointment;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Models\TypeAppointment
 *
 * @property int $id
 * @property string $libele
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|Appointment[] $appointment
 * @property-read int|null $appointment_count
 * @method static \Illuminate\Database\Eloquent\Builder|TypeAppointment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TypeAppointment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TypeAppointment query()
 * @method static \Illuminate\Database\Eloquent\Builder|TypeAppointment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TypeAppointment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TypeAppointment whereLibele($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TypeAppointment whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class TypeAppointment extends Model
{
    public $guarded = [];

    public function appointment() : HasMany
    {
        return $this->hasMany(Appointment::class);
    }
}
