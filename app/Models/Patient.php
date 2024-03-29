<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\Carnet;
use App\Models\Medecin;
use App\Models\Antecedent;
use App\Concerns\AvatarConcern;
use App\Models\TypeAppointment;
use App\Notifications\ResetPassword;
use App\Notifications\PhoneVerification;
use Illuminate\Notifications\Notifiable;
use App\Services\Appointment\Appointment;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Patient Model Classe
 *
 * @property Medecin $medecin
 * @property Antecedent $antecedent
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property \Illuminate\Support\Carbon $birthday
 * @property string $address
 * @property string $phone
 * @property int|null $phone_verification_token
 * @property string|null $email
 * @property string $password
 * @property string|null $referential
 * @property int $medecin_id
 * @property int|null $carnet_id
 * @property bool $is_active
 * @property bool $is_pregnancy
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read Collection|Appointment[] $appointments
 * @property-read int|null $appointments_count
 * @property-read Carnet|null $carnet
 * @property-read Collection|\App\Models\Children[] $childrens
 * @property-read int|null $childrens_count
 * @property-read string $full_name
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read Collection|\App\Models\Pregnancy[] $pregnancies
 * @property-read int|null $pregnancies_count
 * @method static \Illuminate\Database\Eloquent\Builder|Patient newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Patient newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Patient query()
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereBirthday($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereCarnetId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereIsPregnancy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereMedecinId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient wherePhoneVerificationToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereReferential($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read string $avatar
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereAvatar($value)
 */
class Patient extends Authenticatable
{
    use Notifiable, AvatarConcern;
    
    /**
    * The attributes that are mass assignable.
    *
    * @var array<string>
    */
    protected $guarded = [];
    
    /**
    * The attributes that should be hidden for arrays.
    *
    * @var array<string>
    */
    protected $hidden = [
        'password', 'remember_token', 'phone_verification_token'
    ];
    
    /**
    * The attributes that should be cast to native types.
    *
    * @var array<string>
    */
    protected $casts = [
        'phone' => 'string',
        'email_verified_at' => 'datetime',
        'birthday' => 'date',
        'is_active' => 'boolean',
        'is_pregnancy' => 'boolean',
    ];
    
    protected static function booted()
    {
        static::creating(function($patient){
            $patient->first_name = ucfirst($patient->first_name);
            $patient->last_name = ucfirst($patient->last_name);
        });
        
        static::created(function (Patient $patient) {
            $now = Carbon::now();
            $patient->referential = $now->year.$now->month.'-'.$patient->medecin->id.'-'.$patient->id;
            $patient->phone_verification_token = mt_rand(100000, 999999);
            $patient->save();

            // Attacher un carnet
            $patient->carnet()->create();
            
            // Verify phone notification
            $patient->notify(new PhoneVerification($patient->fresh()->phone_verification_token));
            
            // Programmer le VAT
            $patient->preparePregnancyAppointment();
        });

        static::deleted(function($patient) {
            if($patient->getRawOriginal('avatar') != null) {
                $patient->deleteAvatarFile();
            }
        });
    }
    
    public static function active() : Collection
    {
        return static::where('is_active', true)->get();
    }
    
    public static function notActive() : Collection
    {
        return static::where('is_active', false)->get();
    }
    
    public function getFullNameAttribute() : string
    {
        return ucfirst($this->first_name) . " " . ucfirst($this->last_name);
    }

    public function getPhoneAttribute(string $phone) : string
    {
        return '+221 ' . $phone;
    }
    
    /**
    * Get if patient has validate phone number
    *
    * @return boolean
    */
    public function hasValidPhone() : bool
    {
        return $this->phone_verification_token == null;
    }
    
    public function phoneHidden() : string
    {
        return str_repeat('*', strlen($this->phone) - 4) . substr($this->phone, -4);
        
    }
    
    public function childrens() : HasMany
    {
        return $this->hasMany(Children::class);
    }
    
    public function medecin() : BelongsTo
    {
        return $this->belongsTo(Medecin::class);
    }
    
    public function carnet() : HasOne
    {
        return $this->hasOne(Carnet::class);
    }
    
    public function pregnancies() : HasMany
    {
        return $this->hasMany(Pregnancy::class);
    }
    
    public function preparePregnancyAppointment() : bool
    {
        if ($this->is_pregnancy == true) {
            
            $type = TypeAppointment::where(['libele' => 'CPN'])->first();
            $vats = Vat::all();
            foreach($vats as $vat){
                $data = [];
                
                if($vat->period_month == 0){
                    $data['passed'] = true;
                }
                
                $data = array_merge([
                    'date' => Carbon::now()->addMonths($vat->period_month),
                    'description' => $vat->vaccin,
                    'type_appointment_id' => $type->id,
                    'medecin_id' => $this->medecin->id,
                ], $data);
                
                $this->appointments()->create($data);
            }
            return true;
        }
        
        return false;
    }
    
    /**
    * Get current pregnancy
    * 
    * @return Pregnancy
    */
    public function pregnancy() : Pregnancy
    {
        return $this->pregnancies()->where('accouchement', '<', Carbon::now())->first();
    }
    
    public function antecedent() : HasOne
    {
        return $this->hasOne(Antecedent::class);
    }
    
    public function appointments() : HasMany
    {
        return $this->hasMany(Appointment::class);
    }
    
    public function come() : ?Appointment
    {
        return $this->appointments()->where('passed', false)->first();
    }
    
    /**
    * Route notifications for the Nexmo channel.
    *
    * @param  \Illuminate\Notifications\Notification  $notification
    * @return string
    */
    public function routeNotificationForNexmo($notification) : string
    {
        return (string) $this->getRawOriginal('phone');
    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPassword($token));
    }
    
}
