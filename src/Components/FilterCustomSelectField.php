<?php

namespace PL\FilterComponents\Components;

use Illuminate\Http\Request;
use Illuminate\View\Component;

class FilterCustomSelectField extends Component
{
    public string $currentUrl;
    public string $name;
    public string $field;
    public ?string $currentSearchQuery;
    public array $options;

    public function __construct(string $field, string $name, string $options)
    {
        $request = app()->get(Request::class);
        $this->currentUrl = $request->url();
        $this->currentSearchQuery = $request->get('filter')[$field] ?? null;
        $this->name = $name;
        $this->field = $field;
        $this->options = explode(',', $options);
    }

    public function render()
    {
        return view('components::filter-select-field');
    }
}
