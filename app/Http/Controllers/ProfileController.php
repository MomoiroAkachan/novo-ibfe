<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        return view('');
    }

    public function store(Request $request){
        return redirect()->route("");
    }

    public function delete(){
        return redirect()->route("");
    }
}
