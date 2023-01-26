<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Textarea extends Component
{
    /**
     * Create a new Textarea component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the Textarea component.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function render()
    {
        return view('components.form.textarea');
    }
}
