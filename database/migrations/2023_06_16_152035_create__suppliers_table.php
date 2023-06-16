<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('Supliers', function (Blueprint $table) {
            $table->id();
            $table->integer('SupplierID' );
            $table->char('CompanyName');
            $table->char('ContactName');
            $table->char('Address');
            $table->char('City');
            $table->char('Region');
            $table->integer('PostalCode');
        });
    }

    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Suppliers');
    }
}
