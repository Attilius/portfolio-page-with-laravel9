<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class ButtonLink extends Component
{
    /**
     * Create a new component ButtonLink instance.
     *
     * @return void
     */
    public function __construct(public string $href, public string $target ='_self', public string $variant = 'primary')
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|Closure|string
     */
    public function render(): View|Closure|string
    {
        return view('components.button-link');
    }
}
