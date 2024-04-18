<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutoFromRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'nome' => 'required|unique:produtos,nome|max:120|min:5',
            'ingredientes' => 'required|max:255|min:5',
            'preco' => 'required',
            'imagem' => 'required'

        ];
    }


    public function messages()
    {
        return [

            'nome.required' => 'O campo nome é obrigatorio',
            'nome.max' => 'O campo nome deve conter  no maximo 120 caracteres',
            'nome.min' => 'O campo nome deve conter no minimo 5 caracteres',
            'nome.unique' => 'Nome ja cadastrado, informe outro',

            'ingredientes.required' => 'O campo ingredientes é obrigatorio',
            'ingredientes.max' => 'O campo ingredientes deve conter  no maximo 120 caracteres',
            'ingredientes.min' => 'O campo ingredientes deve conter no minimo 5 caracteres',
            'imagem.required' => 'O campo imagem é obrigatório',
            'preco.required'=>'O campo preço é obrigatório'


        ];
    }
}
