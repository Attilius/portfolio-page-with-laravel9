<?php

namespace App\View\Components\Layout;

use Closure;
use Illuminate\View\Component;

class NavbarHamburger extends Component
{
    /**
     * Create a new NavbarHamburger component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the NavbarHamburger component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('layout.navbar-hamburger');
    }
}
