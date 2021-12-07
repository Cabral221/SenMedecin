<?php

namespace App\Models;

use Illuminate\Http\UploadedFile;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Support\Facades\Storage;

/**
 * Attachment Model Class
 *
 * @method bool delete()
 * @property int $id
 * @property string $name
 * @property string $attachable_type
 * @property int $attachable_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read Model|\Eloquent $attachable
 * @property-read string $url
 * @method static \Illuminate\Database\Eloquent\Builder|Attachment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Attachment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Attachment query()
 * @method static \Illuminate\Database\Eloquent\Builder|Attachment whereAttachableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attachment whereAttachableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attachment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attachment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attachment whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attachment whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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
        /** @var string $fileName */
        $fileName =$file->storePublicly('uploads',['disk' => 'public']);
        $this->name = basename($fileName);
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
