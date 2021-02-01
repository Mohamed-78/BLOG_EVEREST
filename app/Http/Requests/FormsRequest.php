<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
     public function rules()
    {
        return [
            
            'name' => 'required',
            'first_name' => 'required',
            'content' => 'required',
        ];
    }

    public function messages()
    {
        return[

            'name.required' => 'Vous devez saisir un nom',
            'first_name.required' => 'Vous devez saisir un prénom',
            'content.required' => 'Vous devez saisir un commentaire',

        ];
    }
}
