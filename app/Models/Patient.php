<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\Carnet;
use App\Models\Medecin;
use App\Models\Antecedent;
use App\Models\TypeAppointment;
use Illuminate\Notifications\Notifiable;
use App\Services\Appointment\Appointment;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Patient extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'birthday', 'phone', 'address', 'referential', 'medecin_id', 'carnet_id', 'is_active', 'is_pregnancy', 'email', 'password',
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
        'birthday' => 'date',
        'is_active' => 'boolean',
    ];

    protected static function booted()
    {
        $now = Carbon::now();
        static::created(function (Patient $patient) use($now) {
            $patient->referential = $now->year.$now->month.'-'.$patient->medecin->id.'-'.$patient->id;
            $patient->save();

            // Programmer le VAT
            $type = TypeAppointment::where(['libele' => 'Vaccinal'])->first();
            $vats = Vat::all();
            foreach($vats as $vat){
                $data = [];
                
                if($vat->period_month == 0){
                    $data['passed'] = true;
                }

                $data = array_merge([
                    'date' => $now->addMonth($vat->period_month),
                    'description' => $vat->vaccin,
                    'type_appointment_id' => $type->id,
                    'medecin_id' => $patient->medecin->id,
                ], $data);

                $patient->appointments()->create($data);
            }
        });
    }

    public function getFullNameAttribute()
    {
        return "{$this->first_name} {$this->last_name}";
    }

    public function childrens()
    {
        return $this->hasMany(Children::class);
    }

    public function medecin()
    {
        return $this->belongsTo(Medecin::class);
    }

    public function carnet()
    {
        return $this->hasOne(Carnet::class);
    }

    public function pregnancies()
    {
        return $this->hasMany(Pregnancy::class);
    }

    public function pregnancy()
    {
        return $this->pregnancies()->where('accouchement', '<', Carbon::now())->first();
    }

    public function antecedent()
    {
        return $this->hasOne(Antecedent::class);
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }

    public function come() : ?Appointment
    {
        return $this->appointments()->where('passed', false)->first();
    }
}
