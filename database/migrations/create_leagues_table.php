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
        Schema::create('leagues', function (Blueprint $table) {
            $table->integer("league_id")->primary();
            $table->string('name');
            $table->tinyInteger('tier');
            $table->tinyInteger('region');
            $table->integer('most_recent_activity');
            $table->integer('total_prize_pool');
            $table->integer('start_timestamp');
            $table->integer('end_timestamp');
            $table->tinyInteger('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('leagues');
    }
};
