<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBudgetsRequest;
use App\Models\Budget;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class BudgetController extends Controller
{
    private $validationsFormBudgets;

    public function store(StoreBudgetsRequest $request)
    {
        $data = $request->all();
        $budgets = new Budget();
        $budgets->name_budgets = $data['name_budgets'];
        $budgets->phone_budgets = $data['phone_budgets'];
        $budgets->email_budgets = $data['email_budgets'];
        $budgets->origin_budgets = $data['origin_budgets'];
        $budgets->destination_budgets = $data['destination_budgets'];
        $budgets->checkout_in_date_budgets = date('Y-m-d H:i:s', strtotime($data['checkout_in_date_budgets']));
        $budgets->checkout_out_date_budgets = date('Y-m-d H:i:s', strtotime($data['checkout_out_date_budgets']));
        $response = $budgets->save();
        if ($response) {
            Mail::send(new \App\Mail\emailTravelSistem($budgets));
            if (!Mail::failures()) {
                return redirect()->action(
                    [BudgetController::class, 'success'],
                    ['name' => $data['name_budgets'], 'email' => $data['email_budgets']]
                );
            }
        } else {
            throw new \Exception('not possible create new budgets');
        }
    }

    public function success($name, $email)
    {
        return view('site.success', ['name' => $name, 'email' => $email]);
    }
}
