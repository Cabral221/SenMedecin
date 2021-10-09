<?php

namespace App\Models;

use App\Models\Service;
use App\Models\Responsable;
use Illuminate\Http\UploadedFile;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

/**
 * Partener Model Classe
 * 
 * @property Service[] $services
 * @property Responsable $responsable
 */
class Partener extends Model
{
    protected $fillable = ['name', 'email', 'address', 'phone', 'image'];

    public function responsable()
    {
        return $this->hasOne(Responsable::class);
    }

    public function services()
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
        $file = $file->storePublicly('uploads/parteners',['disk' => 'public']);
        $this->image = basename($file);
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
