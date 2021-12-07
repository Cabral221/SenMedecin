<?php

namespace App\Services\Appointment;

use App\Models\Medecin;
use App\Models\Patient;
use App\Models\Children;
use App\Models\TypeAppointment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Appointment Model
 *
 * @property TypeAppointment $type_appointment
 * @property Medecin $medecin
 * @property Children $children
 * @property Patient $patient
 * @property int $id
 * @property \Illuminate\Support\Carbon $date
 * @property string $description
 * @property int $type_appointment_id
 * @property int|null $children_id
 * @property int $patient_id
 * @property int $medecin_id
 * @property bool $passed
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment query()
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment whereChildrenId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment whereMedecinId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment wherePassed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment wherePatientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment whereTypeAppointmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Appointment extends Model
{
    /**
     * @var array<string>
     */
    public $fillable = ['type_appointment_id','description','medecin_id','date', 'passed', 'children_id'];
    
    /**
     * @var array<string>
     */
    public $casts = [
        'date' => 'datetime',
        'passed' => 'boolean',
    ];

    public function type_appointment() : BelongsTo
    {
        return $this->belongsTo(TypeAppointment::class);
    }

    public function type() : string
    {
        return $this->type_appointment->libele;
    }

    public function patient() : BelongsTo
    {
        return $this->belongsTo(Patient::class);
    }

    public function medecin() : BelongsTo
    {
        return $this->belongsTo(Medecin::class);
    }

    public function children() : BelongsTo
    {
        return $this->belongsTo(Children::class);
    }

    /**
     * check if appointment is for children
     *
     * @return Children|null
     */
    public function isForChild() : ?Children
    {
        return $this->children ?? null;
    }
}