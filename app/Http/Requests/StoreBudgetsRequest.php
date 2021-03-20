<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBudgetsRequest extends FormRequest
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
            'origin_budgets' => 'required',
            'destination_budgets' => 'required',
            'checkout_in_date_budgets' => 'required',
            'checkout_out_date_budgets' => 'required',
            'number_adults' => 'required',
            'name_budgets'  => 'required|regex:/(^([a-zA-z]+)(\d+)?$)/u|min:5|max:15',
            'phone_budgets' => 'required|min:11|numeric',
            'email_budgets' => 'required|email'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'origin_budgets.required' => 'Campo vazio',
            'destination_budgets.required' => 'Campo vazio',
            'checkout_in_date_budgets.required' => 'Campo vazio',
            'checkout_out_date_budgets.required' => 'Campo vazio',
            'number_adults.required' => 'Campo vazio',
            'name_budgets.required'  => 'Campo vazio',
            'phone_budgets.required' => 'Campo vazio',
            'email_budgets.required' => 'Campo vazio',
            'name_budgets.min'  => 'Minimo 5',
            'name_budgets.max'  => 'Máximo 15',
            'name_budgets.regex'  => 'Not number',
            'phone_budgets.min' => 'Minimo 11',
            'phone_budgets.max' => 'Máximo 19',
            'phone_budgets.numeric' => 'Campo Numerico',
            'email_budgets.email'   => 'Email inválido'
        ];
    }
}
