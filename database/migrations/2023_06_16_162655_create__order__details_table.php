<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('Order_Details', function (Blueprint $table) {
            $table->id();
            $table->integer('OrderID');
            $table->char('ProductID');
            $table->float('UnitPrice');
            $table->integer('Quantity');
            $table->float('Discount');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Order_Details');
    }
}
