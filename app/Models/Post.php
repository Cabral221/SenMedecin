<?php

namespace App\Models;

use App\Concerns\AttachableConcern;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use AttachableConcern;

    protected $fillable = ['title','content','subtitle'];

    public static function draft()
    {
        return self::firstOrCreate(['title' => null,'content'=>'']);
    }

    public function scopeNotDraft($query)
    {
        return $query->whereNotNull('title');
    }  
}
