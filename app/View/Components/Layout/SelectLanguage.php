<?php

namespace App\View\Components\Layout;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class SelectLanguage extends Component
{
    /**
     * Create a new Footer component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the SelectLanguage component.
     *
     * @return View|Closure|string
     */
    public function render(): View|Closure|string
    {
        return view('layout.select-language');
    }
}
