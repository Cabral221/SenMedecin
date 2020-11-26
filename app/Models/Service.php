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

    /**
     * Calcule et retourne le 
     *
     * @return float
     */
    public function partOfPartener() : float
    {
        $nbParteners = Partener::where('is_active', true)->get()->count();

        $result = $this->parteners->count() * 100 / $nbParteners;
        return $result;

    }
}
