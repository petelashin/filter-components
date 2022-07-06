<?php

namespace PL\FilterComponents\Filters;

use Spatie\QueryBuilder\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;

class IsNotNullFilter implements Filter
{
    public function __invoke(Builder $query, $value, string $property)
    {
        if ($value == 0) {
            $query->whereNull($property);
        } else if ($value == 1) {
            $query->whereNotNull($property);
        }
    }
}
