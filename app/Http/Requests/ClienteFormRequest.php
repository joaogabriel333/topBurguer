<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteFormRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
            'nome' => 'required|max:120|min:5',
            'telefone' => 'required|max:11|min:11',
            'email' => 'required|unique:clientes,email|max:120',
            'cpf' => 'required|unique:clientes,cpf|max:11|min:11',
            'endereco' => 'required|max:120',
             'password' => 'required',
             'imagem'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'nome.required' => 'O campo nome é obrigatorio',
            'nome.max' => 'O campo nome deve conter  no maximo 120 caracteres',
            'nome.min' => 'O campo nome deve conter no minimo 5 caracteres',

            'endereco.required' => 'O campo endereco é obrigatorio',
            'endereco.max' => 'O campo endereco deve conter  no maximo 120 caracteres',
            'endereco.required' => 'O campo endereco é obrigatório',
            'imagem.required' => 'O campo endereco é obrigatório',
            //CELULAR
            'telefone.required' => 'O campo telefone é obrigatorio',
            'telefone.min' => 'O campo telefone deve conter no minimo 11caracteres',
            'telefone.max' => 'O campo telefone deve conter no maximo 11 caracteres',
            

            //EMAIL
            'email.required' => 'O email celular é obrigatorio',
            'email.unique' => 'Email já cadastrado informe outro email',
            'email.max' => 'O email celular de conter 120 caracteres',

            //CPF
            'cpf.required' => 'O campo cpf é obrigatorio',
            'cpf.max' => 'O campo cpf deve ter no maximo 11 caracteres',
            'cpf.min' => 'O campo cpf deve ter no mainimo 11 caracteres',
            'cpf.unique' => 'Cpf já cadastrado, informe outro cpf',

        ];
    }
}