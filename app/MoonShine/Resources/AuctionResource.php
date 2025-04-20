<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Auction;
use App\Services\MoonshineImageProcessingService;
use App\Services\MoonShineReorderService;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Laravel\MoonShineRequest;
use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Support\Enums\SortDirection;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Fields\ID;
use MoonShine\UI\Fields\Image;
use MoonShine\UI\Fields\Number;
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

    protected SortDirection $sortDirection = SortDirection::ASC;

    protected bool $createInModal = true;

    protected bool $editInModal = false;

    protected bool $detailInModal = false;

    public const AUCTION_IMAGES_DIR = 'auction';

    protected function search(): array
    {
        return ['position', 'title', 'description', 'link'];
    }

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
                Number::make('Позиция', 'position')->sortable(),
                Text::make('Заголовок', 'title'),
                Image::make('Превью', 'image'),
                Url::make('Ссылка', 'link')->blank(),
            ])
            ->reorderable(
                $this->getAsyncMethodUrl('reorder'),
            );
    }

    public function reorder(MoonShineRequest $request): void
    {
        (new MoonShineReorderService)->run($request, $this);
    }

    /**
     * @return list<ComponentContract|FieldContract>
     */
    protected function formFields(): iterable
    {
        return [
            Box::make([
                ID::make(),
                Text::make('Заголовок', 'title'),
                Text::make('Описание', 'description'),
                Image::make('Изображение', 'image')
                    ->dir(self::AUCTION_IMAGES_DIR)
                    ->removable()
                    ->onApply(function (Model $model, $value) {
                        return (new MoonshineImageProcessingService)->run($model, $value, self::AUCTION_IMAGES_DIR);

                    }),
                Url::make('Ссылка', 'link'),
            ]),
        ];
    }

    /**
     * @return list<FieldContract>
     */
    protected function detailFields(): iterable
    {
        return [
            ID::make(),
            Number::make('Позиция', 'position'),
            Text::make('Заголовок', 'title'),
            Text::make('Описание', 'description'),
            Image::make('Изображение', 'image'),
            Text::make('Путь к изображению', 'image'),
            Url::make('Ссылка', 'link')->blank(),
        ];
    }

    /**
     * @param  Auction  $item
     * @return array<string, string[]|string>
     *
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:50000'],
            'image' => ['required', 'image', 'max:5120'],
            'link' => ['required', 'url', 'max:255'],
        ];
    }
}
