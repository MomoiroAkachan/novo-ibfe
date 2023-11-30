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
        $this->p_routes->push(['início', ['home']]);
        $this->p_routes->push(['guia', ['about']]);
    }

    public function render():View
    {
        return view('livewire.ie-navbar');
    }
}
