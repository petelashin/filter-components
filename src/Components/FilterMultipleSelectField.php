<?php

namespace PL\FilterComponents\Components;

use Illuminate\Http\Request;
use Illuminate\View\Component;

class FilterMultipleSelectField extends Component
{
    public string $currentUrl;
    public string $name;
    public string $field;
    public $currentSearchQuery;
    public array $options;

    public function __construct(string $field, string $name, string $class, string $value)
    {
        $request = app()->get(Request::class);
        $this->currentUrl = $request->url();
        $this->currentSearchQuery = $request->get('filter')[$field] ?? null;
        $this->name = $name;
        $this->field = $field;

        $this->options = $class::orderBy($value, 'ASC')
            ->pluck($value, 'id')
            ->toArray();
    }

    public function render()
    {
        return view('components::filter-multiple-select-field');
    }
}
