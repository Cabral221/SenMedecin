<?php

namespace App\Models;

use App\Models\Partener;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public $guarded = [];

    public function parteners(){
        return $this->belongsToMany(Partener::class, 'partener_services')
                    ->withTimestamps();
    }
}
