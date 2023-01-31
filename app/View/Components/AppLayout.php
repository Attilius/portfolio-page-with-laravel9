<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AppLayout extends Component
{
    /**
     * Create a new AppLayout component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the AppLayout component.
     *
     * @return View
     */
    public function render(): View
    {
        return view('layout.app', ['page_not_found' => false]);
    }
}
