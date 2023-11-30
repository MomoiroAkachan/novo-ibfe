<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use PHPUnit\TestRunner\TestResult\Collector;

class hSurveyData
{
    private $m_roles = null;
    private $m_set = null;
    private $m_desc = null;

    function __construct()
    {
        $this->m_roles = [
            'Disposição aos Negócios',
            'Disposição aos Riscos',
            'Acesso a Capital',
            'Senso de Inovação e Criatividade',
            'Senso de Oportunidade',
            'Capacidade de Gerenciamento e Liderança',
            'Rede de Relacionamentos',
            'Paixão Pelo Trabalho',
            'Resultado Geral'
        ];
        $this->m_set = [
            [3, 14, 31, 34, 39],
            [5, 10, 15, 19, 25],
            [11, 18, 21, 24, 25],
            [2, 6, 17, 23, 36],
            [12, 20, 26, 29, 37],
            [4, 9, 13, 22, 28],
            [7, 16, 30, 33, 40],
            [1, 8, 27, 32, 38],
            40
        ];
        $this->m_desc = [
            ['Forte Disposição', 'Moderada Disposição', 'Sem Disposição'],
            ['Alta Disposição', 'Moderada Disposição', 'Baixa Disposição'],
            ['Fácil Acesso', 'Acesso Moderado', 'Difícil Acesso'],
            ['Alta Criatividade', 'Criatividade Moderada', 'Baixa Criatividade'],
            ['Alta Habilidade', 'Habilidade Moderada', 'Baixa Habilidade'],
            ['Alta Capacidade', 'Capacidade Moderada', 'Baixa Capacidade'],
            ['Boa Rede de Contatos', 'Rede de Contatos Mediana', 'Rede de Contatos Fraca'],
            ['Apaixonado Pelo Trabalho', 'Gosta do Trabalho', 'Não Gosta do Trabalho'],
            ['Intraempreendedor', 'Intraempreendedor Moderado', 'Não Intraempreendedor']
        ];
    }

    public function getMedia(array $data)
    {
        $result = new Collection();

        foreach ($this->m_set as $key => $set) {
            $buffer = 0;
            $info = '';
            $b1 = new Collection($set);

            if ($set == 40) {
                foreach ($data as $item) {
                    $buffer += $data[$item];
                }
                $buffer /= 40;
            } else {
                foreach ($set as $item) {
                    $buffer += $data[$item];
                }
                $buffer /= $b1->count();
            }

            if ($buffer >= 4 && $buffer <= 5) {
                $info = $this->m_desc[$key][0];
            } elseif ($buffer >= 3 && $buffer <= 3.9) {
                $info = $this->m_desc[$key][1];
            } else {
                $info = $this->m_desc[$key][2];
            }

            $result->push([$this->m_roles[$key], $buffer, $info]);
        }
        return $result;
    }
}


class SurveyController extends Controller
{
    public function store(Request $request)
    {
        session()->put('surveyInfo', $request->input());
        return $this->showResult();
    }

    public function showResult()
    {
        $p = new hSurveyData();
        $buffer = $p->getMedia(session()->get('surveyInfo'));
        return view('survey.result')->with('result', $buffer);
    }

    public function index(Request $r)
    {
        $questions = Question::paginate(5);

        $answers = $r->input();

        return view('survey.index', compact('questions'));
    }

    public function test(){
        return view('test');
    }
}