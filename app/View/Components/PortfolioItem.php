<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class PortfolioItem extends Component
{
    /**
     * Create a new PortfolioItem component instance.
     *
     * @return void
     */
    public function __construct(public string $title, public array $categories, public string $image, public string $github)
    {
        //
    }

    /**
     * Get the view / contents that represent the PortfolioItem component.
     *
     * @return View
     */
    public function render(): View
    {
        return view('components.portfolio-item');
    }
}
