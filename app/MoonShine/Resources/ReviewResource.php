<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Review;
use App\Services\MoonshineImageProcessingService;
use App\Services\MoonShineReorderService;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Laravel\Enums\Action;
use MoonShine\Laravel\MoonShineRequest;
use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Support\Enums\PageType;
use MoonShine\Support\Enums\SortDirection;
use MoonShine\Support\ListOf;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Fields\ID;
use MoonShine\UI\Fields\Image;
use MoonShine\UI\Fields\Number;
use MoonShine\UI\Fields\Text;

/**
 * @extends ModelResource<Review>
 */
class ReviewResource extends ModelResource
{
    protected string $model = Review::class;

    protected string $title = 'Отзывы';

    protected string $sortColumn = 'position';

    protected bool $usePagination = false;

    protected SortDirection $sortDirection = SortDirection::ASC;

    protected bool $createInModal = true;

    protected ?PageType $redirectAfterSave = PageType::INDEX;

    public const REVIEW_IMAGES_DIR = 'review';

    protected function search(): array
    {
        return ['position'];
    }

    protected function activeActions(): ListOf
    {
        return parent::activeActions()
            ->except(Action::VIEW, Action::UPDATE);
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
                // Number::make('Позиция', 'position')->sortable(),
                Image::make('Превью', 'path'),
                Text::make('Путь к изображению', 'path')
                    ->link(fn ($item) => url('/storage/'.$item), 'Открыть во вкладке', blank: true),
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
                Image::make('Изображение', 'path')
                    ->dir(self::REVIEW_IMAGES_DIR)
                    ->removable()
                    ->onApply(function (Model $model, $value) {
                        return (new MoonshineImageProcessingService)->run($model, $value, self::REVIEW_IMAGES_DIR);
                    }),
            ]),
        ];
    }

    /**
     * @return list<FieldContract>
     */
    protected function detailFields(): iterable
    {
        return [
        ];
    }

    /**
     * @param  Review  $item
     * @return array<string, string[]|string>
     *
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [
            'path' => ['required', 'image', 'max:5120'],
        ];
    }
}
