<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'position',
        'path',
    ];

    protected $appends = [
        'image',
    ];

    public function getImageAttribute(): string
    {
        return url('storage/'.$this->path);
    }

    protected static function booted(): void
    {
        static::creating(function (Review $review): void {
            $lastPosition = self::max('position');
            $review->position = $lastPosition ? $lastPosition + 1 : 1;
        });
    }
}
