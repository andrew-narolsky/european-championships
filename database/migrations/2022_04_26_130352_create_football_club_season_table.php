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
        Schema::create('football_club_season', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('award_id');
            $table->unsignedInteger('football_club_id');
            $table->unsignedInteger('season_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('football_club_season');
    }
};
