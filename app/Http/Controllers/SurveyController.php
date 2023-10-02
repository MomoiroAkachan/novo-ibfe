<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    public $v_numQuestions = null;
    public $v_maxQuestions = null;
    public $v_maxPages = null;
    
    function __construct()
    {
        $this->v_numQuestions = Question::all()->count();
        $this->v_maxQuestions = 5;
        $this->v_maxPages = ceil(Question::all()->count() / 5);
    }

    // Mostra o questionário como página
    public function profile_index(Request $request)
    {
        return view('survey.survey');
    }
    public function profile_store(){

    }

    public function survey_store(Request $request)
    {
        return redirect()->route('survey.survey_index');
    }

    public function survey_index(Request $r)
    {
        $questions = Question::all();
        return view('survey.questions', [
            'quest' => $questions
        ]);
    }
}
