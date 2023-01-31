<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class ButtonLink extends Component
{
    /**
     * Create a new ButtonLink component instance.
     *
     * @return void
     */
    public function __construct(public string $href, public string $target ='_self', public string $variant = 'primary')
    {
        //
    }

    /**
     * Get the view / contents that represent the ButtonLink component.
     *
     * @return View
     */
    public function render(): View
    {
        return view('components.button-link');
    }
}
