<?php

namespace App\Models;

use Illuminate\Http\UploadedFile;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Attachment extends Model
{
    public static function boot()
    {
        parent::boot();
        self::deleted(function(Attachment $attachment){
            $attachment->deleteFile();
        });
    } 

    protected $guarded = [];
    public $appends = ['url'];

    public function attachable()
    {
        return $this->morphTo();
    }

    public function upLoadFile(UploadedFile $file)
    {
        $file =$file->storePublicly('uploads',['disk' => 'public']);
        $this->name = basename($file);
        return $this;
    }

    public function  deleteFile()
    {
        Storage::disk('public')->delete('uploads/'.$this->name);
    }

    public function getUrlAttribute()
    {
        return Storage::disk('public')->url('/uploads/'.$this->name);
    }
}
