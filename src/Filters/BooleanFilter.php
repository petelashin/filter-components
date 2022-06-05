<?php

namespace PL\FilterComponents\Filters;

use Spatie\QueryBuilder\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;

class BooleanFilter implements Filter
{
    public function __invoke(Builder $query, $value, string $property)
    {
        if (is_array($value)) {
            $value = array_filter($value);
        }
        
        if (!empty($value) && is_array($value)) {
            $query->whereIn($property, $value);
        }
    }
}