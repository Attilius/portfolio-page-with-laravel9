<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Input extends Component
{
    /**
     * Create a new Input component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the input component.
     *
     * @return View
     */
    public function render(): View
    {
        return view('components.form.input');
    }
}
