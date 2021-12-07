<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Message
 *
 * @property int $id
 * @property string $fullname
 * @property string $email
 * @property string $object
 * @property string $message
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Message newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Message newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Message query()
 * @method static \Illuminate\Database\Eloquent\Builder|Message whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Message whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Message whereFullname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Message whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Message whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Message whereObject($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Message whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Message extends Model
{
    //
}
