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
            'name_budgets' => 'required|regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/|min:5',
            'phone_budgets' => 'required|numeric',
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
            'origin_budgets.required' => 'Field is required',
            'destination_budgets.required' => 'Field is required',
            'checkout_in_date_budgets.required' => 'Field is required',
            'checkout_out_date_budgets.required' => 'Field is required',
            'name_budgets.regex' => 'No number',
            'name_budgets.required' => 'Field is required',
            'name_budgets.min' => 'Minimum 5',
            'phone_budgets.required' => 'Field is required',
            'phone_budgets.numeric' => 'Only number',
            'email_budgets.required' => 'Field is required',
            'email_budgets.email' => 'Not email'
        ];
    }
}
