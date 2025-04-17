<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [

        'position',
        'path',
    ];
    protected static function booted(): void
    {
        static::creating(function (User $user): void {

            $lastPosition = self::max('position');
            $user->position = $lastPosition ? $lastPosition + 1 : 1;
        });
    }
}
