<?php

namespace App\Http\Controllers;

use App\Models\budget;
use Illuminate\Http\Request;
use App\Validations\ValidationsFormBudgets;

class BudgetController extends Controller
{
    private $validationsFormBudgets;

    public function __construct(ValidationsFormBudgets $validationsFormBudgets)
    {
        $this->validationsFormBudgets = $validationsFormBudgets;
    }

    public function store(Request $request)
    {
        $this->validationsFormBudgets->validation($request);

        $data = $request->all();
        $budgets = new budget();
        $budgets->name_budgets = $data['name_budgets'];
        $budgets->phone_budgets = $data['phone_budgets'];
        $budgets->email_budgets = $data['email_budgets'];
        $budgets->origin_budgets = $data['origin_budgets'];
        $budgets->destination_budgets = $data['destination_budgets'];
        $budgets->checkout_in_date_budgets = date('Y-m-d H:i:s', strtotime($data['checkout_in_date_budgets']));
        $budgets->checkout_out_date_budgets = date('Y-m-d H:i:s', strtotime($data['checkout_out_date_budgets']));
        $response = $budgets->save();
        if ($response){
            return redirect()->action(
                [BudgetController::class, 'success'], ['name' => $data['name_budgets'], 'email' => $data['email_budgets']]
            );
        }else {
            throw new \Exception('not possible create new budgets');
        }
    }

    public function success($name, $email)
    {
        return view('site.success', ['name' => $name, 'email' => $email]);
    }
}
