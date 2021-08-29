<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donors', function (Blueprint $table) {
            $table->id();
            
            $table->string('dname', 100);
            $table->string('address', 150)->nullable(true);
            $table->bigInteger('contact')->nullable(true);
            $table->decimal('age', 5,2)->nullable(true);
            $table->string('gender', 10)->nullable(true);
            $table->string('health_prop', 100)->nullable(true);
            $table->string('bgrp', 10)->nullable(true);
            $table->timestampsTz();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donors');
    }
}
