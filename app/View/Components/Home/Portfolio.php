<?php

namespace App\View\Components\Home;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Arr;
use Illuminate\View\Component;

class Portfolio extends Component
{

    public array $items = [];

    public array $tabs = [];

    /**
     * Create a new Portfolio component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->items = [
            [
                'category' => ['Vue2', 'Laravel', 'MDB'],
                'title' => 'App with Laravel, Vue2 and MDB',
                'image' => url('/img/aviation.jpg'),
                'github' => 'https://github.com/Attilius/Aviation_Project_with_Laravel'
            ],
            [
                'category' => ['PHP'],
                'title' => 'My first Portfolio Page',
                'image' => url('/img/portfolio.jpg'),
                'github' => 'https://github.com/Attilius/Portfolio-Page'
            ],
            [
                'category' => ['Bootstrap', 'React'],
                'title' => 'Music player app with React',
                'image' => url('/img/music_player.jpg'),
                'github' => 'https://github.com/Attilius/Music-player'
            ],
        ];

        $this->tabs = array_unique(Arr::flatten(Arr::pluck($this->items, 'category')));
    }

    /**
     * Get the view / contents that represent the Portfolio component.
     *
     * @return View
     */
    public function render(): View
    {
        return view('components.home.portfolio');
    }
}
