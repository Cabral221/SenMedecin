<?php

namespace App\Models;

use App\Models\Medecin;
use Illuminate\Database\Eloquent\Model;

class Partener_service extends Model
{
    
    public function medecins()
    {
        return $this->hasMany(Medecin::class);
    }
}
