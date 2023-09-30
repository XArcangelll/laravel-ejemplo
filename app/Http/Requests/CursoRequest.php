<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CursoRequest extends FormRequest
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
            "name" => "required|unique:cursos,name,".$this->validateId(),
            "descripcion" => "required",
            "categoria"=> "required",
            "slug" => "required|unique:cursos,slug,".$this->validateId()

        ];
    }

    public function validateId(){
        return $this->curso->id ?? null;
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages()
    {
         return [
            'name.required' => 'El nombre es obligatorio',
           'descripcion.required' => 'La descripción es obligatoria',
           'categoria.required' => 'La categoría es obligatoria',
           "name.unique" => "El nombre debe ser único",
           "slug.unique" => "El slug debe ser único",
         ];
    }

    // public function attributes():array
    // {
    //     return [
    //         'name' => 'hombre cocodrilo'
    //      ];   
    // }
    //solo si no vas a usar messages por ejemplo borras el name.unique de message aparecera el name hombre cocodrilo cuando salte el error de unico
    
}
