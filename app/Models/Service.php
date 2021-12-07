<?php

namespace App\Models;

use App\Models\Medecin;
use App\Models\Partener;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * Service Model Class
 *
 * @property Partener[] $parteners
 * @property int $id
 * @property string $libele
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|Medecin[] $medecins
 * @property-read int|null $medecins_count
 * @property-read int|null $parteners_count
 * @method static \Illuminate\Database\Eloquent\Builder|Service newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Service newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Service query()
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereLibele($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Service extends Model
{
    public $guarded = [];

    public function parteners() : BelongsToMany
    {
        return $this->belongsToMany(Partener::class, 'partener_services')
                    ->withTimestamps();
    }

    public function medecins() : BelongsToMany
    {
        return $this->belongsToMany(Medecin::class);
    }

    /**
     * Calcule et retourne le pourcentage des partenaires utilisant ce service
     *
     * @return float
     */
    public function partOfParteners() : float
    {
        /** @var Partener[] $parteners */
        $parteners = Partener::where('is_active', true)->get();
        
        return count($this->parteners) * 100 / count($parteners);;
    }

    /**
     * Calcule et return le pourcentage des medecins utilisant ce service
     *
     * @return float
     */
    public function partOfMedecins() : float
    {
        $allMedUsing = 0; 
        $allMedecins = Medecin::where('is_active', true)->get();

        foreach($allMedecins as $medecin){
            if($medecin->service->id === $this->id) $allMedUsing += 1;
        }

        $result = $allMedUsing * 100 / $allMedecins->count();
        return $result;
    }

    public function partOfMedFor() : float 
    {
        $meds = auth('responsable')->user()->medecins;
        $nbmed = 0;
        foreach ($meds as $med) {
            if($med->service->id == $this->id) $nbmed += 1;
        }

        return $nbmed * 100 / count($meds);

    }
}
