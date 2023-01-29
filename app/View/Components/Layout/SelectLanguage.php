<?php

namespace App\View\Components\Layout;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class SelectLanguage extends Component
{
    /**
     * Get the view / contents that represent the SelectLanguage component.
     *
     * @return View|Closure|string
     */
    public function render()
    {
        return view('layout.select-language');
    }
}
