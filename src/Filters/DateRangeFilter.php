<?php

namespace PL\FilterComponents\Filters;

use Spatie\QueryBuilder\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;

class DateRangeFilter implements Filter
{
    public function __invoke(Builder $query, $value, string $property)
    { 
        if (isset($value[0]) && !isset($value[1])) {
            $value[1] = '2099-12-31';
        } else if (isset($value[1]) && !isset($value[0])) {
            $value[0] = '1970-01-01';
        }
        
        if (isset($value[0]) && isset($value[1])) {
            $query->whereBetween($property, [$value[0], $value[1]]);
        }
    }
}