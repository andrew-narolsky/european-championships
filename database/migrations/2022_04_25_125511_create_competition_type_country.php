<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up() : void
    {
        Schema::create('competition_type_country', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('competition_type_id');
            $table->unsignedInteger('country_id');
            $table->timestamps();
        });
    }

    public function down() : void
    {
        Schema::dropIfExists('competition_type_country');
    }
};
