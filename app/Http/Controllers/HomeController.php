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
        $cSession = session();

        if(!$cSession->get('name'))
        {
            return redirect()->to(route('profile.index'));
        }
        else{
            return redirect()->to(route('survey.index'));
        }
    }
    
    public function about()
    {
        return view('about');
    }
}
