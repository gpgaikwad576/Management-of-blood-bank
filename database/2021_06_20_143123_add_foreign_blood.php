<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignBlood extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bloods', function (Blueprint $table) {
            $table->foreignId('did')->constrained('donors')
      ->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('eid')->constrained('employees')
      ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bloods, function (Blueprint $table) {
            //
        });
    }
}
