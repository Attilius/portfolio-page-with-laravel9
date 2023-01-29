<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Button extends Component
{
    /**
     * Create a new component Button instance.
     *
     * @param string
     * @return void
     */
    public function __construct(public string $variant = 'golden')
    {
        //
    }

    /**
     * Get the view / contents that represent the Button component.
     *
     * @return View|Closure|string
     */
    public function render(): View|Closure|string
    {
        return view('components.button');
    }
}
