<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchaseInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_info', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('purchase_price');
            $table->bigInteger('closing_cost');
            $table->bigInteger('estimated_repair_cost');
            $table->bigInteger('arv');
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
        Schema::dropIfExists('purchase_info');
    }
}
