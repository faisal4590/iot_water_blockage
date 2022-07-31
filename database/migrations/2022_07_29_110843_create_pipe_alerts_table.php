<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pipe_alerts', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('pipe_id');
            $table->unsignedBigInteger('alert_id');
            $table->timestamps();

            $table->foreign('pipe_id')->references('id')->on('pipes')->onDelete('cascade');
            $table->foreign('alert_id')->references('id')->on('alerts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pipe_alerts');
    }
};
