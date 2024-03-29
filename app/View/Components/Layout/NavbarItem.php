<?php

namespace App\View\Components\Layout;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class NavbarItem extends Component
{
    /**
     * Create a new NavbarItem component instance.
     *
     * @return void
     */
    public function __construct(public string $href)
    {
        //
    }

    /**
     * Get the view / contents that represent the NavbarItem component.
     *
     * @return View|Closure|string
     */
    public function render(): View|Closure|string
    {
        return view('layout.navbar-item');
    }
}
