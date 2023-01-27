<?php

namespace App\View\Components\Layout;

use Closure;
use Illuminate\View\Component;

class Footer extends Component
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
     * Get the view / contents that represent the Footer component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('layout.footer');
    }
}
