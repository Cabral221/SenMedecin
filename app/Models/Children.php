<?php

namespace App\Models;

use App\Models\Pev;
use App\Models\Patient;
use Illuminate\Database\Eloquent\Model;
use App\Services\Appointment\Appointment;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Children Model Class
 *
 * @property Patient $mom
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property \Illuminate\Support\Carbon $birthday
 * @property string $genre
 * @property int $patient_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|Appointment[] $appointments
 * @property-read int|null $appointments_count
 * @property-read string $full_name
 * @method static \Illuminate\Database\Eloquent\Builder|Children newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Children newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Children query()
 * @method static \Illuminate\Database\Eloquent\Builder|Children whereBirthday($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Children whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Children whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Children whereGenre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Children whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Children whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Children wherePatientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Children whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Children extends Model
{
    public $guarded = [];

    public $casts = [
        'birthday' => 'date',
    ];

    public static function booted()
    {
        $now = \Carbon\Carbon::now();
        static::created(function(Children $children) use ($now){
            $allPev = Pev::all();
            $type = TypeAppointment::where('libele', 'Vaccinal')->first();
            foreach ($allPev as $pev) {
                $date = $children->birthday->addMonths($pev->period_month);
                $children->mom->appointments()->create([
                    'children_id' => $children->id,
                    'date' => $date,
                    'description' => $pev->vaccin,
                    'type_appointment_id' => $type->id,
                    'medecin_id' => $children->mom->medecin->id,
                    'passed' => ($date > $now) ? false : true,
                ]);
            }
        });
    }

    public function getFullNameAttribute() : string
    {
        return "{$this->first_name} {$this->last_name}";
    }

    public function mom() : BelongsTo
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }

    public function appointments() : HasMany
    {
        return $this->hasMany(Appointment::class);
    }


}
