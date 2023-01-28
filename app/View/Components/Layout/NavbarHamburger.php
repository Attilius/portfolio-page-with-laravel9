<?php

namespace App\View\Components\Layout;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

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
     * @return View|Closure|string
     */
    public function render(): View|Closure|string
    {
        return view('layout.navbar-hamburger');
    }
}
