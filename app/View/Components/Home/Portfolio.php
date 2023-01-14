<?php

namespace App\View\Components\Home;

use Closure;
use Illuminate\Support\Arr;
use Illuminate\View\Component;

class Portfolio extends Component
{

    public array $items = [];

    public array $tabs = [];

    /**
     * Create a new component instance.
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
                'category' => ['Bootstrap', 'Symfony'],
                'title' => 'Contact form with Symfony6',
                'image' => url('/img/contact.jpg'),
                'github' => 'https://github.com/Attilius/contact-form-symfony6'
            ],
            [
                'category' => ['Bootstrap', 'React'],
                'title' => 'Music player app with React',
                'image' => url('/img/music_player.jpg'),
                'github' => 'https://github.com/Attilius/Music-player'
            ],
            [
                'category' => ['SCSS'],
                'title' => 'Page design with SCSS',
                'image' => url('/img/value_research.jpg'),
                'github' => 'https://github.com/Attilius/Value_Research_-_Media_Freelancer.com_Project'
            ],
            [
                'category' => ['Node.js'],
                'title' => 'Travel guide API with Node.js',
                'image' => url('/img/travel-guide-api.jpg'),
                'github' =>  'https://github.com/Attilius/travel-guide-api'
            ],
        ];

        $this->tabs = array_unique(Arr::flatten(Arr::pluck($this->items, 'category')));
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|Closure|string
     */
    public function render()
    {
        return view('components.home.portfolio');
    }
}
