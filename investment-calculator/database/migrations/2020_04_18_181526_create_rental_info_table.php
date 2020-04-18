<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentalInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rental_info', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_cash_purchase');
            $table->bigInteger('downpayment_of_purchase');
            $table->decimal('loan_interest_rate');
            $table->boolean('is_pmi_included');
            $table->integer('amortized_years');
            $table->integer('refinance_months');
            $table->integer('rehab_months');
            $table->integer('refinance_loan_amount');
            $table->decimal('refinance_loan_interest_rate');
            $table->integer('refinance_amortized_years');

            $table->integer('income_total_gross_monthly_rent');
            $table->integer('income_other_monthly');

            $table->integer('fixed_expenses_monthly_insurance');
            $table->integer('fixed_expenses_electric_gas');
            $table->integer('fixed_expenses_water_sewer');
            $table->integer('fixed_expenses_garbage');
            $table->integer('fixed_expenses_hoa');
            $table->integer('fixed_expenses_property_taxes');
            $table->integer('fixed_expenses_other');

            $table->decimal('variable_expenses_vacancy');
            $table->decimal('variable_expenses_repair_maintenance');
            $table->integer('variable_expenses_capital_expenditure');
            $table->integer('variable_expenses_mgmt_fees');

            $table->decimal('future_annual_income_growth');
            $table->decimal('future_annual_pv_growth');
            $table->decimal('future_annual_expense_growth');
            $table->decimal('future_sales_expenses');

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
        Schema::dropIfExists('rental_info');
    }
}
