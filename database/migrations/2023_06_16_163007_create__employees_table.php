<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('Employee', function (Blueprint $table) {
            $table->integer('EmployeeID');
            $table->char('LastName');
            $table->char('FirstName');
            $table->char('Title');
            $table->char('TitleofCourtesy');
            $table->date('BirthDate');
            $table->date('HireDate');
            $table->char('Address');
            $table->char('City');
            $table->char('Region');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Employees');
    }
}
