<?php

namespace PL\FilterComponents;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use PL\FilterComponents\Components\FilterDateRangeField;
use PL\FilterComponents\Components\FilterField;
use PL\FilterComponents\Components\FilterMultipleSelectField;
use PL\FilterComponents\Components\FilterSelectField;
use PL\FilterComponents\Components\FilterBooleanField;
use PL\FilterComponents\Components\SortLink;

class FilterServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadViewsFrom(
            __DIR__.'/../resources/components',
            'components'
        );

        Blade::component('filter-field', FilterField::class);
        Blade::component('filter-boolean-field', FilterBooleanField::class);
        Blade::component('filter-date-range-field', FilterDateRangeField::class);
        Blade::component('filter-select-field', FilterSelectField::class);
        Blade::component('filter-multiple-select-field', FilterMultipleSelectField::class);
        Blade::component('sort-link', SortLink::class);
    }
}
