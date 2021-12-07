<?php

namespace App\Models;

use App\Models\Medecin;
use App\Models\Patient;
use App\Models\Partener;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Responsable Model class
 *
 * @property Medecin[] $medecins
 * @property Patient[] $patients
 * @property string $gen_password
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $phone
 * @property string $email
 * @property string $password
 * @property int $partener_id
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read int|null $medecins_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read Partener $partener
 * @method static \Illuminate\Database\Eloquent\Builder|Responsable newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Responsable newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Responsable query()
 * @method static \Illuminate\Database\Eloquent\Builder|Responsable whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Responsable whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Responsable whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Responsable whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Responsable whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Responsable wherePartenerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Responsable wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Responsable wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Responsable whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Responsable whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Responsable extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'first_name', 'last_name', 'phone', 'email', 'password','gen_password', 'partener_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array<string>
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array<string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function patientCount() : int
    {
        $nbPatient = 0;
        foreach ($this->medecins as $medecin) {
            $nbPatient += count($medecin->patients);
        }
        return $nbPatient;
    }

    public function partener() : BelongsTo
    {
        return $this->belongsTo(Partener::class);
    }

    public function medecins() : HasMany
    {
        return $this->hasMany(Medecin::class);
    }
}
