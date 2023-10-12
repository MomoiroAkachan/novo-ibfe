<?php

namespace App\Livewire;

use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class IeNavbar extends Component
{
    public $p_routes = null;

    public function __construct()
    { 
        $this->p_routes = new Collection();
        $this->p_routes->push(['página inicial', ['home']]);
        $this->p_routes->push(['sobre', ['about']]);
        $this->p_routes->push(['serviços', ['services']]);
        $this->p_routes->push(['o teste', ['test', 'profile.index', 'survey.index', 'survey.result.index']]);
    }

    public function render()
    {
        return view('livewire.ie-navbar');
    }
}
