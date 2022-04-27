<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up() : void
    {
        Schema::create('country_football_club', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('football_club_id');
            $table->unsignedInteger('country_id');
        });
    }

    public function down() : void
    {
        Schema::dropIfExists('country_football_club');
    }
};
