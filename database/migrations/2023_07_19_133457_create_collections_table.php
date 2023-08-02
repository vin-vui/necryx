<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('collections', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->enum('types',['jeu','concept','art']);
            $table->longText('content');
            $table->string('image')->nullable();
            $table->integer('number_players')->nullable();
            $table->integer('duration')->nullable();
            $table->integer('age')->nullable();
            $table->string('origin')->nullable();
            $table->tinyInteger('order')->nullable();
            $table->longText('example')->nullable();
            $table->longText('description')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('collections');
    }
};
