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
 */
class Responsable extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'phone', 'email', 'password','gen_password', 'partener_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
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
