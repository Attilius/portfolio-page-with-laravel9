<?php

namespace App\View\Components\Layout;

use Illuminate\View\Component;

class SelectLanguage extends Component
{
    public array $selectOptions = [];
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->selectOptions = [
            ['value' => 'en', 'language_name' => 'English'],
            ['value' => 'hu', 'language_name' => 'Magyar']
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('layout.select-language');
    }
}
