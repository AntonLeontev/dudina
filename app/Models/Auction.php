<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auction extends Model
{
    use HasFactory;
    protected $fillable = [

        'position',
        'title',
        'description',
        'image',
        'link',
    ];
    protected static function booted(): void
    {
        static::creating(function (Auction $auction): void {

            $lastPosition = self::max('position');
            $auction->position = $lastPosition ? $lastPosition + 1 : 1;
        });
    }
}
