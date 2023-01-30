<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PageNotFound extends Component
{
    /**
     * Create a new PageNotFound component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the PageNotFound component.
     *
     * @return View
     */
    public function render(): View
    {
        return view('components.page-not-found');
    }
}
