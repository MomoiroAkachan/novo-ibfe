<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Models\Question;
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

    public function store(Request $request)
    {        
        $request->validate(['nome' => 'required|max:50|alpha']);

        session_reset();

        $buffer = Question::pluck('number')->toArray();
        $buffer2 = [];

        foreach ($buffer as $key => $value) {
            $buffer2 += ['q_' . $value => ''];
        }

        $sessionData = [
            'sessionExtraInfo' => ['sessionActived' => true],
            'userInfo' => $request->all(),
            'surveyInfo' => $buffer2,
        ];
        
        session()->put($sessionData);

        return redirect(route('survey.index'));
    }
}
