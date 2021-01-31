<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BudgetController extends Controller
{
    /**
     *
     */
    public function save(Request $request)
    {

        $validated = $request->validate(
            [
                'destination_budgets' => 'required',
                'name_budgets'  => 'required|min:5|max:15',
                'phone_budgets' => 'required|min:11|numeric'
            ],
            [
                'name_budgets.required' => 'Empty field',
                'phone_budgets.required' => 'Empty field',
                'destination_budgets.required' => 'Empty field',
                'name_budgets.max' => 'Maximum 15 characters',
                'name_budgets.min' => 'Minimum 5 characters',
                'phone_budgets.min' => 'Minimum 11 characters',
                'phone_budgets.numeric' => 'Only number'
            ]
        );

        var_dump($validated);
        exit;
    }
}
