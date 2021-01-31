<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class budget extends Model
{
    use HasFactory;
     /**
     * The table associated with the model table STUDENTS.
     *
     * @var string
     */
    protected $table = 'budgets';

    /**
     * The primary key associated with the table ID.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name_budgets',
        'phone_budgets',
        'email_budgets',
        "origin_budgets",
        'destination_budgets',
        'checkout_in_date_budgets',
        'checkout_out_date_budgets'
    ];
}
