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
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('poster');
            $table->string('genre');
            $table->integer('year');
            $table->integer('duration');
            $table->double('rating');
            $table->boolean('is_popular')->default(false);
            $table->timestamps();
        });

        $movies = App\Models\Movie::all();
        foreach ($movies as $movie) {
            $formattedRating = number_format($movie->rating, 1);
            $movie->rating = $formattedRating;
            $movie->save();
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
