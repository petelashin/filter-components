<?php

namespace PL\FilterComponents\Components;

use Illuminate\Http\Request;
use Illuminate\View\Component;

class FilterField extends Component
{
    public string $currentUrl;
    public string $name;
    public string $field;
    public ?string $currentSearchQuery;

    public function __construct(string $field, string $name)
    {
        $request = app()->get(Request::class);
        $this->currentUrl = $request->url();
        $this->currentSearchQuery = $request->get('filter')[$field] ?? null;
        $this->name = $name;
        $this->field = $field;
    }

    public function render()
    {
        return view('components::filter-field');
    }
}
