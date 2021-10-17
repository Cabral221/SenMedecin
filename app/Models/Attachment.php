<?php

namespace App\Models;

use Illuminate\Http\UploadedFile;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Support\Facades\Storage;

class Attachment extends Model
{
    protected $guarded = [];
    
    public $appends = ['url'];
    
    public static function boot()
    {
        parent::boot();
        self::deleted(function(Attachment $attachment){
            $attachment->deleteFile();
        });
    } 

    public function attachable() : MorphTo
    {
        return $this->morphTo();
    }

    public function upLoadFile(UploadedFile $file) : Attachment
    {
        $file =$file->storePublicly('uploads',['disk' => 'public']);
        $this->name = basename($file);
        return $this;
    }

    public function  deleteFile() : void
    {
        Storage::disk('public')->delete('uploads/'.$this->name);
    }

    public function getUrlAttribute() : string
    {
        return Storage::disk('public')->url('/uploads/'.$this->name);
    }
}
