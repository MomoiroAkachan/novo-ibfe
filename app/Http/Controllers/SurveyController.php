<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    public $v_numQuestions = null;
    public $v_maxQuestions = null;
    
    function __construct()
    {
        $this->v_numQuestions = Question::all()->count();
        $this->v_maxQuestions = 5;
    }

    // Mostra o questionário como página
    public function index()
    {
        return view('questionary');
    }

    public function next(Request $r)
    {
        $page_index = $r->input('pg_index') % $this->v_maxQuestions;
        $questions = Question::all()->skip(5 * $page_index)->take(5)->toArray();
        return view('questionary_questions')->with('p_index', $page_index)->with('quest', $questions)->with('qmax', $this->v_maxQuestions);
        
        // return view('survey_sheet')->with('questions', $questions)->with('iIndex', $idx);
    }

    public function prev(Request $r){
        return view('survey_sheet');
    }
}
