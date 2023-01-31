<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Button extends Component
{
    /**
     * Create a new Button component instance.
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
     * @return View
     */
    public function render(): View
    {
        return view('components.button');
    }
}
