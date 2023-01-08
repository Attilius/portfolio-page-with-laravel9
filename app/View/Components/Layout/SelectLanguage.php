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
            ['value' => 'en', 'language_name' => 'English', 'selected' => true],
            ['value' => 'hu', 'language_name' => 'Magyar', 'selected' => false]
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

    public function setSelected(string $value, bool $selected): void
    {
        foreach ($this->selectOptions as $option) {
            if ($option['value'] == $value) {
                $option['selected'] = $selected;
            } else $option['selected'] = false;
        }
    }
}
