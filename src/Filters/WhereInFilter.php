<?php

namespace PL\FilterComponents\Filters;

use Spatie\QueryBuilder\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;

class WhereInFilter implements Filter
{
    public function __invoke(Builder $query, $value, $property)
    {
        if (is_array($value)) {
            $value = array_filter($value);
        } else {
            $value = [$value];
        }

        if (!empty($value) && is_array($value)) {
            $query->whereIn($property, $value);
        }
    }
}