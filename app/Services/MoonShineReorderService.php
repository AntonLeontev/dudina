<?php

namespace App\Services;

use MoonShine\Laravel\MoonShineRequest;
use MoonShine\Laravel\Resources\ModelResource;

class MoonShineReorderService
{
    public function run(MoonShineRequest $request, ModelResource $resource): void
    {
        $ids = $request->str('data')->explode(',')
            ->each(
                fn ($id, $position) => $resource->getModel()
                    ->where('id', $id)
                    ->update([
                        'position' => $position + 1,
                    ]),
            );
    }
}
