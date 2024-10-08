<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('ranking', function (Blueprint $table) {
            $table->id();
            $table->integer('stage_id');
            $table->integer('user_id');
            $table->integer('score');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ranking');
    }
};
