<?php

namespace PL\FilterComponents\Components;

use Illuminate\View\Component;

class SortLink extends Component
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function render()
    {
        return view('components::sort-link');
    }
}
