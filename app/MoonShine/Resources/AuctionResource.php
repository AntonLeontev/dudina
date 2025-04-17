<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Auction;

use MoonShine\Laravel\MoonShineRequest;
use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Components\Layout\Flex;
use MoonShine\UI\Components\Link;
use MoonShine\UI\Fields\ID;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\UI\Fields\Image;
use MoonShine\UI\Fields\Number;
use MoonShine\UI\Fields\Preview;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Url;

/**
 * @extends ModelResource<Auction>
 */
class AuctionResource extends ModelResource
{
    protected string $model = Auction::class;

    protected string $title = 'Торги';
    protected string $sortColumn = 'position';
    protected bool $usePagination = false;

    protected bool $createInModal = true;
    protected bool $editInModal = false;
    protected bool $detailInModal = false;

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
        ];
    }

    public function modifyListComponent(ComponentContract $component): ComponentContract
    {
        return parent::modifyListComponent($component)
            ->fields([
                ID::make()->sortable(),
                Number::make('position')->sortable(),
                Text::make('title'),
                Image::make('image'),
                Url::make('link')->blank(),
            ])
            ->reorderable(
                $this->getAsyncMethodUrl('reorder'),
            );
    }

    public function reorder(MoonShineRequest $request): void
    {
        $ids = $request->str('data')->explode(',')
                ->each(
                    fn($id, $position) => $this->getModel()
                        ->where('id', $id)
                        ->update([
                            'position' => $position + 1,
                        ]),
                );
    }

    /**
     * @return list<ComponentContract|FieldContract>
     */
    protected function formFields(): iterable
    {
        return [
            Box::make([
                ID::make(),
                Text::make('title'),
                Text::make('description'),
                Image::make('image')
                    ->dir('auction')
                    ->removable(),
                Url::make('link'),
            ])
        ];
    }

    /**
     * @return list<FieldContract>
     */
    protected function detailFields(): iterable
    {
        return [
            ID::make(),
            Number::make('position'),
            Text::make('title'),
            Text::make('description'),
            Image::make('image'),
            Text::make('image'),
            Url::make('link')->blank(),
        ];
    }

    /**
     * @param Auction $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [];
    }
}
