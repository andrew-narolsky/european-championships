<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up() : void
    {
        Schema::create('award_competition_type', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('award_id');
            $table->unsignedInteger('competition_type_id');
        });
    }

    public function down() : void
    {
        Schema::dropIfExists('award_competition_type');
    }
};
