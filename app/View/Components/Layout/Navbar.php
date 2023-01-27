<?php

namespace App\View\Components\Layout;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Navbar extends Component
{
    public array $navigationItems = [];
    /**
     * Create a new Navbar component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->navigationItems = [
            ['label' => 'home', 'href' => '#'],
            ['label' => 'about', 'href' => '#about'],
            ['label' => 'projects', 'href' => '#portfolio'],
            ['label' => 'contact', 'href' => '#contact'],
        ];
    }

    /**
     * Get the view / contents that represent the Navbar component.
     *
     * @return View|Closure|string
     */
    public function render()
    {
        return view('layout.navbar');
    }
}
