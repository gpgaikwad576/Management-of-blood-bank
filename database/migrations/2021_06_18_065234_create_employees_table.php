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
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            
            
            
            $table->string('ename', 100);
            $table->timestampsTz();
            $table->string('address', 150)->nullable(true);
            $table->bigInteger('contact')->nullable(true);
            $table->string('experience', 100)->nullable(true);
            $table->decimal('dcount', 5,2)->nullable(true);
            $table->decimal('salary',12,5)->nullable(true);
            $table->string('dignity', 100)->nullable(true);
            $table->dateTimeTz('join_date')->nullable(true);
            $table->string('type', 1)->nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
