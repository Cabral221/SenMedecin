<?php

namespace App\Models;

use App\Models\Medecin;
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
     * Calcule et retourne le pourcentage des partenaires utilisant ce service
     *
     * @return int
     */
    public function partOfParteners() : int
    {
        $nbParteners = Partener::where('is_active', true)->get()->count();

        $result = $this->parteners->count() * 100 / $nbParteners;
        return $result;

    }

    /**
     * Calcule et return le pourcentage des medecins utilisant ce service
     *
     * @return int
     */
    public function partOfMedecins() : int
    {
        $allMedUsing = 0; 
        $allMedecins = Medecin::where('is_active', true)->get();

        foreach($allMedecins as $medecin){
            if($medecin->partener_service->service_id === $this->id) $allMedUsing += 1;
        }

        $result = $allMedUsing * 100 / $allMedecins->count();
        return $result;
    }
}
