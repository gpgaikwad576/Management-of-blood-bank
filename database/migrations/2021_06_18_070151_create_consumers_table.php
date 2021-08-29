<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsumersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consumers', function (Blueprint $table) {
            $table->id();
            $table->timestampsTz();
            $table->string('cname', 100);
            $table->string('address', 150)->nullable(true);
            $table->bigInteger('contact')->nullable(true);
            $table->string('health_prop', 100)->nullable(true);
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
        Schema::dropIfExists('consumers');
    }
}
