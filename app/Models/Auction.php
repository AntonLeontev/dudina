<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Auction extends Model
{
    protected $fillable = [

        'position',
        'title',
        'description',
        'image',
        'link',
    ];
    protected static function booted(): void
    {
        static::creating(function (User $user): void {

            $lastPosition = self::max('position');
            $user->position = $lastPosition ? $lastPosition + 1 : 1;
        });
    }
}
