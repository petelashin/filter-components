<?php

namespace PL\FilterComponents\Components;

use Illuminate\Http\Request;
use Illuminate\View\Component;

class FilterDateRangeField extends Component
{
    public string $currentUrl;
    public string $name;
    public string $field;
    public $currentSearchQuery;

    public function __construct(string $field, string $name)
    {
         $request = app()->get(Request::class);
         $this->currentUrl = $request->url();
         $this->currentSearchQuery = $request->get('filter')[$field] ?? [now()->format('m-d-Y'), now()->format('m-d-Y')];
         $this->name = $name;
         $this->field = $field;
    }

    public function render()
    {
        return view('components::filter-date-range-field');
    }
}
