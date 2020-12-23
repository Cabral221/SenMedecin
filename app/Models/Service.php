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

    public function medecins()
    {
        return $this->belongsToMany(Medecin::class);
    }

    /**
     * Calcule et retourne le pourcentage des partenaires utilisant ce service
     *
     * @return int
     */
    public function partOfParteners() : int
    {
        $nbParteners = Partener::where('is_active', true)->get()->count();
        
        return $this->parteners->count() * 100 / $nbParteners;
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
            if($medecin->service->id === $this->id) $allMedUsing += 1;
        }

        $result = $allMedUsing * 100 / $allMedecins->count();
        return $result;
    }

    public function partOfMedFor(): int
    {
        $meds = auth('responsable')->user()->medecins;
        $nbmed = 0;
        foreach ($meds as $med) {
            if($med->service->id == $this->id) $nbmed += 1;
        }

        return $nbmed * 100 / $meds->count();

    }
}
