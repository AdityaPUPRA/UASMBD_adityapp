<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('Products', function (Blueprint $table) {
            $table->id();
            $table->char('ProductID');
            $table->char('ProductName');
            $table->integer('SupplierID');
            $table->char('CategoryID');
            $table->integer('QuantityPerUnit');
            $table->integer('UnitPrice');
            $table->integer('UnitInStock');
            $table->integer('UnitInOrder');
            $table->char('ReorderLevel');
            $table->text('Discontinued');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Products');
    }
}
