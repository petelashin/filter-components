<?php

namespace PL\FilterComponents\Components;

use Illuminate\Http\Request;
use Illuminate\View\Component;

class FilterSelectField extends Component
{
    public string $currentUrl;
    public string $name;
    public string $field;
    public ?string $currentSearchQuery;
    public array $options;

    public function __construct(string $field, string $name, string $class, string $value)
    {
        $request = app()->get(Request::class);
        $this->currentUrl = $request->url();
        
        $this->currentSearchQuery = $request->get('filter')[$field] ?? null;
        $this->name = $name;
        $this->field = $field;

        $explodeValue = explode(',', $value);
        if (count($explodeValue) > 1 && isset($explodeValue[1])) {

            $value1 = $explodeValue[0];
            $value2 = $explodeValue[1];

            $options = $class::orderBy($value1, 'ASC')
                ->get();

            foreach ($options as $option) {
                $this->options[$option->id] = $option->$value1 . ' ' . $option->$value2;
            }

        } else {
            $this->options = $class::orderBy($value, 'ASC')
                ->pluck($value, 'id')
                ->toArray();
        }
    }

    public function render()
    {
        return view('components::filter-select-field');
    }
}
