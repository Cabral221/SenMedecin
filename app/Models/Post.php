<?php

namespace App\Models;

use App\Concerns\AttachableConcern;
use Illuminate\Database\Query\Builder;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use AttachableConcern;

    protected $fillable = ['title','content','subTitle','slug','publish'];

    public static function draft() : Post
    {
        return self::firstOrCreate(['title' => null,'content'=>'']);
    }

    public function scopeNotDraft(Builder $query) : Builder
    {
        return $query->whereNotNull('title');
    }

    public function getRouteKeyName() : string
    {
        return 'slug';
    }
}
