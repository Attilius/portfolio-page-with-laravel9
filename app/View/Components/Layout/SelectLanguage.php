<?php

namespace App\View\Components\Layout;

use Illuminate\View\Component;

class SelectLanguage extends Component
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('layout.select-language');
    }
}
