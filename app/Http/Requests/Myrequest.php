<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Myrequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules()
    {
        return [
            'nome' => 'required|string|min:3|max:50',
            'email' => 'required|email',
            'idade' => 'required|integer|min:18|max:100',
            'data_nascimento' => 'required|date',
            'cpf' => 'required|digits:11',
            'numero_celular' => 'required|numeric|min:0.01',
            'aceita_termos' => 'required|boolean',
        ];
    }
    public function messages()
    {
        return [
            'nome.required' => 'Preencha o nome corretamente.',
            'nome.string' => 'Compo "nome" incorreto.',
            'nome.min' => 'O nome deve ter no mínimo 3 caracteres.',
            'nome.max' => 'O nome não deve passar de 50 caracteres.',
            
            'email.required' => 'O campo "email" é obrigatório.',
            'email.email' => 'Endereço de email deve ser válido.',
            
            'idade.required' => 'O campo "idade" é obrigatório.',
            'idade.integer' => 'O campo "idade" deve ser um número inteiro.',
            'idade.min' => 'A idade mínima permitida é 18 anos.',
            'idade.max' => 'A idade máxima permitida é 1000 anos.',
            
            'data_nascimento.required' => 'O campo "data de nascimento" é obrigatório.',
            'data_nascimento.date' => 'O campo "data de nascimento" deve ser uma data válida.',
            
            'cpf.required' => 'O campo "CPF" é obrigatório.',
            'cpf.digits' => 'O campo "CPF" deve ter exatamente 11 caracteres, sendo apenas numeros.',
            
            'numero_celular.required' => 'O campo preço é obrigatório.',
            'numero_celular.numeric' => 'O campo preço deve ser um número.',
            'numero_celular.min' => 'O preço deve ser maior que zero.',
            
            'aceita_termos.required' => 'Você deve aceitar os termos.',
            'aceita_termos.boolean' => 'O campo aceita termos deve ser verdadeiro ou falso.',
        ];
    }
}
