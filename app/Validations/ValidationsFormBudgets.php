<?php


namespace App\Validations;


use http\Env\Request;

class ValidationsFormBudgets
{
    public function validation($request)
    {
        $request->validate(
            [
                'origin_budgets' => 'required',
                'destination_budgets' => 'required',
                'checkout_in_date_budgets' => 'required',
                'checkout_out_date_budgets' => 'required',
                'name_budgets'  => 'required|min:5|max:15',
                'phone_budgets' => 'required|min:11|numeric',
                'email_budgets' => 'required|email'
            ],
            [
                'origin_budgets.required' => 'Empty field',
                'destination_budgets.required' => 'Empty field',
                'checkout_in_date_budgets.required' => 'Empty field',
                'checkout_out_date_budgets.required' => 'Empty field',
                'name_budgets.required'  => 'Empty field',
                'phone_budgets.required' => 'Empty field',
                'email_budgets.required' => 'Empty field',
                'name_budgets.min'  => 'Minimum 5',
                'name_budgets.max'  => 'Maximum 15',
                'phone_budgets.min' => 'Minimum 11',
                'phone_budgets.max' => 'Maximum 19',
                'phone_budgets.numeric' => 'Only number',
                'email_budgets.email'   => 'Invalid email'
            ]
        );
    }
}
