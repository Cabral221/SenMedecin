<?php

namespace App\Models;

use App\Models\Service;
use App\Models\Responsable;
use Illuminate\Http\UploadedFile;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Facades\Storage;

/**
 * Partener Model Classe
 * 
 * @property Service[] $services
 * @property Responsable $responsable
 */
class Partener extends Model
{
    /**
     * @var array<string>
     */
    protected $fillable = ['name', 'email', 'address', 'phone', 'image'];

    public function responsable() : HasOne
    {
        return $this->hasOne(Responsable::class);
    }

    public function services() : BelongsToMany
    {
        return $this->belongsToMany(Service::class, 'partener_services')
                    ->withTimestamps();
    }

    /**
     * Upload image of partener
     *
     * @param UploadedFile $file
     * @return Partener
     */
    public function upLoadFile(UploadedFile $file) : Partener
    {
        /** @var string $fileName */
        $fileName = $file->storePublicly('uploads/parteners',['disk' => 'public']);
        $this->image = basename($fileName);
        return $this;
    }

    /**
     * delete image of partener
     *
     * @return void
     */
    public function  deleteFile() : void
    {
        Storage::disk('public')->delete('uploads/parteners/'.$this->image);
    }
}
