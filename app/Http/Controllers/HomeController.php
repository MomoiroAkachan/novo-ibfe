<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home'); //, ['message_type' => 'warning', 'message' => 'Testando mensagens']);
    }

    public function services()
    {
        return view('services');
    }
    public function questionary()
    {
        return view('questionary');
    }
    public function about()
    {
        return view('about');
    }
    public function coming_soon()
    {
        return view('coming_soon');
    }
    public function page_error($id)
    {
        return view('page_error');
    }
    public function questionary_result()
    {
        return view('questionary_result');
    }
}
