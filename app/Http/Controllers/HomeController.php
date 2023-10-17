<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function services()
    {
        return view('services');
    }

    public function test()
    {
        return redirect()->to(route('profile.index'));
    }
    
    public function about()
    {
        $ibfe_team = new Collection();
        $ibfe_team->push([
            'name' => 'Gustavo Henrique Silva de Souza',
            'img' => asset('assets/img/gustavo.png'),
            'id' => 0,
            'origin' => [0,0]
        ]);
        $ibfe_team->push([
            'name' => 'Ana Cláudia Gonçalves de Sá Jardim',
            'img' => asset('assets/img/ana-claudia.jpg'),
            'id' => 1,
            'origin' => [0,0]

        ]);
        $ibfe_team->push([
            'name' => 'Lara dos Santos Prates',
            'img' => asset('assets/img/lara.jpg'),
            'id' => 2,
            'origin' => [0,-20]
        ]);
        $ibfe_team->push([
            'name' => 'Filipe Lemes Ramalho',
            'img' => asset('assets/img/filipe.jpg'),
            'id' => 3,
            'origin' => [0,-18]
        ]);

        return view('about')->with('team', $ibfe_team);
    }
}
