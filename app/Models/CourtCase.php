<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourtCase extends Model
{
    use HasFactory;
    protected $fillable = [

        'position',
        'path',
    ];
    protected static function booted(): void
    {
        static::creating(function (CourtCase $courtCase): void {

            $lastPosition = self::max('position');
            $courtCase->position = $lastPosition ? $lastPosition + 1 : 1;
        });
    }
}
