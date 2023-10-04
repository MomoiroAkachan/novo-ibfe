<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    public $v_roles = null;
    public $v_result = null;
    public $v_descriptions = null;

    function __construct()
    {
        $this->v_roles = new Collection(
            [
                'Disposição aos Negócios' => [3, 14, 31, 34, 39],
                'Disposição aos Riscos' => [5, 10, 15, 19, 25],
                'Acesso a Capital' => [11, 18, 21, 24, 25],
                'Senso de Inovação e Criatividade' => [2, 6, 17, 23, 36],
                'Senso de Oportunidade' => [12, 20, 26, 29, 37],
                'Capacidade de Gerenciamento e Liderança' => [4, 9, 13, 22, 28],
                'Rede de Relacionamentos' => [7, 16, 30, 33, 40],
                'Paixão Pelo Trabalho' => [1, 8, 27, 32, 38],
                'Resultado Geral' => '0'
            ]
        );
        $this->v_result = new Collection();

        $this->v_descriptions = [
            [
                'Indivíduo com forte disposição pessoal aos negócios',
                'Indivíduo com disposição pessoal moderada aos negócios',
                'Indivíduo sem disposições pessoais aos negócios'
            ],
            [
                'Indivíduo com alta disposição a riscos empresariais',
                'Indivíduo com moderada disposição a riscos empresariais',
                'Indivíduo com baixa disposição a riscos empresariais'
            ],
            [
                'Indivíduo capaz de conseguir/obter capital (dinheiro/recursos) com muita facilidade',
                'Indivíduo capaz de conseguir/obter capital (dinheiro/recursos) com pouca facilidade',
                'Indivíduo incapaz de conseguir/obter capital (dinheiro/recursos)'
            ],
            [
                'Indivíduo muito criativo, com alto senso de inovação.',
                'Indivíduo criativo, com interesses moderados em inovações.',
                'Indivíduo com pouca criatividade, sem interesse por inovações.'
            ],
            [
                'Indivíduo tem habilidade para identificar e valorar as oportunidades do mercado',
                'Indivíduo costuma reconhecer algumas oportunidades do mercado',
                'Indivíduo não tem habilidade para identificar e valorar oportunidades do mercado'
            ],
            [
                'Indivíduo com alta capacidade de Gerenciamento e Liderança.',
                'Indivíduo com capacidades medianas de gerenciamento e liderança.',
                'Indivíduo com baixa capacidade de gerenciamento e liderança.'
            ],
            [
                'Indivíduo apresenta facilidade com relacionamentos e possui uma boa rede de contatos',
                'Indivíduo apresenta alguma facilidade com relacionamentos e possui uma rede de contatos mediana',
                'Indivíduo não apresenta facilidade com relacionamentos e não possui uma boa rede de contatos'
            ],
            [
                'Indivíduo apaixonado/obstinado pelo trabalho que faz',
                'Indivíduo tende a gostar do trabalho que faz',
                'Indivíduo, provavelmente, não gosta do trabalho que faz'
            ],
            [
                'Indivíduo apresenta perfil intraempreendedor',
                'Indivíduo apresenta perfil intraempreendedor moderado (precisa ser estimulado)',
                'Indivíduo não apresenta perfil intraempreendedor'
            ],

        ];
    }

    public function store(Request $request)
    {
        $it = 0;
        foreach ($this->v_roles as $k => $i) {
            $buffer = 0;
            $calc = 0;
            $res = 0;
            $obj = [];

            if ($i == '0') {
                foreach ($request->all() as $v) {
                    $buffer += floatval($v);
                }
                $calc = floatval($buffer / 40);
            } else {
                foreach ($i as $v) {
                    $buffer += $request->input('q_' . $v);
                }
                $calc = floatval($buffer / 5);
            }

            if ($calc >= 4 && $calc <= 5) {
                $res = $this->v_descriptions[$it][0];
            } elseif ($calc >= 3 && $calc <= 3.9) {
                $res = $this->v_descriptions[$it][1];
            } else {
                $res = $this->v_descriptions[$it][2];
            }

            $obj = ['title' => $k, 'value' => $calc, 'means' => $res];

            $this->v_result->push($obj);

            $it++;
        }
        session()->put('user_result', $this->v_result);
        return redirect()->route('survey.show.result');
    }

    public function showResult()
    {
        if (session()->get('nome')) {
            return view('survey.result')->with('result', session()->get('user_result'));
        }
        else
        {
            return redirect()->route('test');
        }
    }

    public function index(Request $r)
    {
        if (!session()->get('nome')) {
            return redirect()->route('profile.index');
        } else {
            $questions = Question::all();
            return view('survey.index', [
                'quest' => $questions
            ]);
        }
    }
}
