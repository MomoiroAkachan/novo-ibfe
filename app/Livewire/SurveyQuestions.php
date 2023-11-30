<?php

namespace App\Livewire;

use App\Models\Question;
use Illuminate\Http\Client\Request;
use Livewire\Component;
use Livewire\WithPagination;

class SurveyQuestions extends Component
{
    use WithPagination;
    
    public $selects = [];

    public function __construct() {
        $selects = session()->get('surveyInfo');
    }

    public function save(){
        $buffer = [];
        foreach(session()->get('surveyInfo') as $key => $val)
        {
            $b2 = $val;
            if(isset($this->selects[$key]))
            {
                $b2 = $this->selects[$key];
            }
            $buffer += [$key => $b2];
        }
        session()->put(['surveyInfo' => $buffer]);
        session()->save();
    }

    public function render(){
        return view('livewire.survey-questions', ['questions' => Question::paginate(5), 'answers' => session()->get('surveyInfo')]);
    }
}
