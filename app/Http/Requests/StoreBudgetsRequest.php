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
            'origin_budgets.required' => 'Empty field',
            'destination_budgets.required' => 'Empty field',
            'checkout_in_date_budgets.required' => 'Empty field',
            'checkout_out_date_budgets.required' => 'Empty field',
            'number_adults.required' => 'Empty field',
            'name_budgets.required'  => 'Empty field',
            'phone_budgets.required' => 'Empty field',
            'email_budgets.required' => 'Empty field',
            'name_budgets.min'  => 'Minimum 5',
            'name_budgets.max'  => 'Maximum 15',
            'name_budgets.regex'  => 'Not number',
            'phone_budgets.min' => 'Minimum 11',
            'phone_budgets.max' => 'Maximum 19',
            'phone_budgets.numeric' => 'Only number',
            'email_budgets.email'   => 'Invalid email'
        ];
    }
}
