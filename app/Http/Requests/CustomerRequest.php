<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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

	public function messages()
	{
        return [
            'full_name.required' => 'O nome completo é obrigatório',
            'gender_tax.required' => 'O campo gênero é obrigatório',
            'birthdate.required' => 'A data de nascimento deve ser preenchida',
        ];
	}

    public function rules()
    {
        return [
            'full_name' => 'required',
            'gender_tax' => 'required',
            'birthdate' => 'required',
        ];
    }
}
