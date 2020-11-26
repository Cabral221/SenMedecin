<?php

namespace App\Models;

use App\Models\Patient;
use App\Models\Responsable;
use App\Models\Partener_service;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Medecin extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'phone', 'gen_password', 'email', 'password','partener_service_id','responsable_id','is_active'
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

    public function partener_service()
    {
        return $this->belongsTo(Partener_service::class);
    }

    public function responsable()
    {
        return $this->belongsTo(Responsable::class);
    }

    public function patients()
    {
        return $this->hasMany(Patient::class);
    }
}
