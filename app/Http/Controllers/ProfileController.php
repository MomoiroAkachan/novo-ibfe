<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        if (session()->get('nome')) {
            return redirect()->route('survey.index');
        } else {
            return view('profile.index');
        }
    }

    public function store(ProfileRequest $request)
    {
        if ($request->validated()) {
            $request->session()->put('nome', $request->input('nome'));
            $request->session()->put('cidade', $request->input('cidade'));
            $request->session()->put('email', $request->input('email'));
            $request->session()->put('telefone', $request->input('telefone'));
            $request->session()->put('sexo', $request->input('sexo'));
            $request->session()->put('bdata', $request->input('bdata'));
            $request->session()->put('religiao', $request->input('religiao'));
            $request->session()->put('escolaridade', $request->input('escolaridade'));
            $request->session()->put('trabalho', $request->input('trabalho'));
            $request->session()->put('classe', $request->input('classe'));
            return redirect(route('survey.index'));
        }
    }
}
