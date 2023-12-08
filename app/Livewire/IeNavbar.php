<?php

namespace App\Livewire;

use Livewire\Component;

class IeNavbar extends Component
{
    public $routes;
    public $flags;

    public function __construct() {
        
        $this->routes =
        [
            ['início', ['home']],
            ['guia', ['guide']]
        ];

        $this->flags = ['fix' => true, 'show' => true];
    }

    public function render()
    {
        return view('livewire.ie-navbar');
    }
}
