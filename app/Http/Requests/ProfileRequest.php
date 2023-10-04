<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'nome' => 'required|max:255',
            'cidade' => 'required|max:255',
            'email' => 'required|email',
            'telefone' => 'required|numeric|min:11',
            'sexo' => 'required',
            'bdata' => 'required',
            'religiao' => 'required',
            'escolaridade' => 'required',
            'trabalho' => 'required',
            'classe' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'nome.required' => 'O nome não pode estar em branco',
            'cidade.required' => 'A cidade não pode estar em branco',
            'email' => 'Precisa ser um e-mail válido',
            'telefone' => 'Número inválido',
            'sexo.required' => 'Selecione uma das opções listadas',
            'bdata.required' => 'Data inválida',
            'religiao.required' => 'Selecione uma das opções listadas',
            'escolaridade.required' => 'Selecione uma das opções listadas',
            'trabalho.required' => 'Selecione uma das opções listadas',
            'classe.required' => 'Selecione uma das opções listadas'
        ];
    }
}
