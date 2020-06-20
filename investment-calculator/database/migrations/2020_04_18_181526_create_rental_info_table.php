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
            $table->integer('property_id')->nullable();
            $table->boolean('is_cash_purchase')->default(0);
            $table->bigInteger('downpayment_of_purchase')->nullable();
            $table->decimal('loan_interest_rate')->nullable();
            $table->boolean('is_pmi_included')->default(0);
            $table->integer('amortized_years')->nullable();
            $table->integer('refinance_months')->nullable();
            $table->integer('rehab_months')->nullable();
            $table->integer('refinance_loan_amount')->nullable();
            $table->decimal('refinance_loan_interest_rate')->nullable();
            $table->integer('refinance_amortized_years')->nullable();

            $table->integer('income_total_gross_monthly_rent')->nullable();
            $table->integer('income_other_monthly')->nullable();

            $table->integer('fixed_expenses_monthly_insurance')->nullable();
            $table->integer('fixed_expenses_electric_gas')->nullable();
            $table->integer('fixed_expenses_water_sewer')->nullable();
            $table->integer('fixed_expenses_garbage')->nullable();
            $table->integer('fixed_expenses_hoa')->nullable();
            $table->integer('fixed_expenses_property_taxes')->nullable();
            $table->integer('fixed_expenses_other')->nullable();

            $table->decimal('variable_expenses_vacancy')->nullable();
            $table->decimal('variable_expenses_repair_maintenance')->nullable();
            $table->integer('variable_expenses_capital_expenditure')->nullable();
            $table->integer('variable_expenses_mgmt_fees')->nullable();

            $table->decimal('future_annual_income_growth')->nullable();
            $table->decimal('future_annual_pv_growth')->nullable();
            $table->decimal('future_annual_expense_growth')->nullable();
            $table->decimal('future_sales_expenses')->nullable();

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
