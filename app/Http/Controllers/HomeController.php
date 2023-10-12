<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
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
        return view('about');
    }
}
