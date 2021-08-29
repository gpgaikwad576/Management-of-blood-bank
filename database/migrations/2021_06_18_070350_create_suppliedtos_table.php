<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuppliedtosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliedtos', function (Blueprint $table) {
        
            $table->id();
            $table->timestampsTz();
            $table->decimal('tcost', 8,2);
            $table->decimal('amt', 8,2);
            $table->integer('cid');
            $table->integer('bid');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suppliedtos');
    }
}
