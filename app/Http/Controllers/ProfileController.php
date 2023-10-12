<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        if(isset(session()->get('sessionExtraInfo')['sessionActived']))
        {
            return redirect()->route('survey.index');
        }
        else
        {
            return view('profile.index');
        }
    }

    public function store(ProfileRequest $request)
    {
        if (!$request->validated()) {
            throw('data.validation.error');
        }

        $sessionData = [
            'sessionExtraInfo' => ['sessionActived' => true],
            'userInfo' => $request->all(),
            'surveyInfo' => [],
        ];
        session()->put($sessionData);
        return redirect(route('survey.index'));
    }
}
