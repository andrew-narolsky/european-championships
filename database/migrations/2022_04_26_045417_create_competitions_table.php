<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up() : void
    {
        Schema::create('competitions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedInteger('country_id');
            $table->unsignedInteger('competition_type_id');
            $table->timestamps();
        });
    }

    public function down() : void
    {
        Schema::dropIfExists('competitions');
    }
};
