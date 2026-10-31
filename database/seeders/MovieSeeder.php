<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;
use App\Models\Genre;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $action = Genre::create(['name' => 'Action']);
        $comedy = Genre::create(['name' => 'Comedy']);
        $drama = Genre::create(['name' => 'Drama']);

        Movie::create(['title' => 'Spiderman', 'genre_id' => $action->id, 'rating' => 9.1, 'year' => 2002, 'is_available' => true]);
        Movie::create(['title' => 'Gagamboy', 'genre_id' => $comedy->id, 'rating' => 8.5, 'year' => 2010, 'is_available' => true]);
        Movie::create(['title' => 'Harry Potter', 'genre_id' => $drama->id, 'rating' => 9.7, 'year' => 2001, 'is_available' => false]);
        Movie::create(['title' => 'Grown Ups', 'genre_id' => $comedy->id, 'rating' => 8.6, 'year' => 2010, 'is_available' => true]);
        Movie::create(['title' => 'Grown Ups 2', 'genre_id' => $comedy->id, 'rating' => 8.9, 'year' => 2014, 'is_available' => true]);
        Movie::create(['title' => 'Interstellar', 'genre_id' => $drama->id, 'rating' => 9.3, 'year' => 2014, 'is_available' => true]);
        Movie::create(['title' => 'Avengers: Endgame', 'genre_id' => $action->id, 'rating' => 9.0, 'year' => 2019, 'is_available' => true]);
        Movie::create(['title' => 'Black Clover', 'genre_id' => $action->id, 'rating' => 8.5, 'year' => 2026, 'is_available' => true]);
    }
}
