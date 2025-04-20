<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Intervention\Image\Encoders\WebpEncoder;
use Intervention\Image\ImageManager;

class MoonshineImageProcessingService
{
    public function run(Model $model, $value, $mainDir): Model
    {
        $image = ImageManager::imagick()->read($value->getRealPath());
        $image->encode(new WebpEncoder(quality: 100));

        /** $mainDir = 'review'; / 'court_case' / 'auction' */
        $filesPictureDir = storage_path('app/public/'.$mainDir);
        $filename = Str::uuid().'.'.'webp';

        $finalPath = $filesPictureDir.'/'.$filename;

        if (! file_exists($filesPictureDir)) {
            mkdir($filesPictureDir, 0755, true);
        }

        $image->save($finalPath);

        if ($mainDir === 'auction') {
            $model->image = $mainDir.'/'.$filename;
        } else {
            $model->path = $mainDir.'/'.$filename;
        }

        return $model;
    }
}
