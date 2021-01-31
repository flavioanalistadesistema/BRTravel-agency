<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBudgetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('budgets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_budgets', 15);
            $table->string('phone_budgets', 15);
            $table->string('email_budgets');
            $table->string('origin_budgets');
            $table->string('destination_budgets');
            $table->date('checkout_in_date_budgets')->nullable();
            $table->date('checkout_out_date_budgets')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('budgets');
    }
}
