<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('poster');
            $table->string('genre');
            $table->integer('year')->nullable();
            $table->integer('duration');
            $table->double('rating');
            $table->unsignedBigInteger('id_direktor');
            $table->unsignedBigInteger('id_popular_movie')->nullable();
            $table->timestamps();

            $table->foreign('id_direktor')->references('id')->on('directors');
            $table->foreign('id_popular_movie')->references('id')->on('popular_movies');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
