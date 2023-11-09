<?php

namespace App\Livewire;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\View;
use Livewire\Component;

class IeNavbar extends Component
{
    public $p_routes = null;
    public  $ie_fix_navbar = null;
    public  $ie_show_navbar = null;

    public function __construct()
    {
        $this->p_routes = new Collection();
        $this->p_routes->push(['página inicial', ['home']]);
        $this->p_routes->push(['sobre', ['about']]);
        $this->p_routes->push(['o teste', ['test', 'profile.index', 'survey.index', 'survey.result.index']]);
    }

    public function render():View
    {
        return view('livewire.ie-navbar');
    }
}
