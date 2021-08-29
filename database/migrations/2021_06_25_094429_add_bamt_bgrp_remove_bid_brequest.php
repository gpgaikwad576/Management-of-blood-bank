<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBamtBgrpRemoveBidBrequest extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('brequests', function (Blueprint $table) {
            $table->dropColumn('bid');
            $table->integer('bamt')->nullable(true);
            $table->string('bgrp')->nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table->integer('bid');
        Schema::dropColumn('bamt');
        Schema::dropColumn('bgrp');

    }
}
