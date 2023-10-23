<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule; 

class CandidatoRequest extends FormRequest
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

        $rules= [
            'nome' => 'required|min:4|max:120',
            'formacao' => 'required|min:4|max:500',
            'pretensao' => 'required',
            'email' => 'required|unique:candidatos',
            'senha' => 'required',
        ];

        if($this->method() === 'PUT'){
            $rules['email'] = [
                'required',
                
                Rule::unique('candidatos')->ignore($this->id),
            ];
        }

      
        return $rules;
    }
}
