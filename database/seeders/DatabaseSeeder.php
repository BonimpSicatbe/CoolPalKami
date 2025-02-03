<?php

namespace Database\Seeders;

use App\Models\Actor;
use App\Models\Director;
use App\Models\Favorite;
use App\Models\Genre;
use App\Models\Movie;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('password'),
        ]);

        // Create some genres
        $genres = Genre::factory(25)->create();

        // Create some actors
        $actors = Actor::factory(25)->create();

        // Create some directors
        $directors = Director::factory(25)->create();

        // Create some users
        $users = User::factory(10)->create();

        // Create some movies with related genres, actors, and directors
        Movie::factory(50)->create()->each(function ($movie) use ($users, $genres, $actors, $directors) {
            // Attach random genres to the movie
            $movie->genres()->attach($genres->random(rand(1, 3))->pluck('id'));

            // Attach random actors to the movie
            $movie->actors()->attach($actors->random(rand(2, 5))->pluck('id'));

            // Attach a random director to the movie
            $movie->directors()->attach($directors->random(1)->pluck('id'));

            // Create reviews for the movie
            $movie->reviews()->createMany(
                $users->map(function ($user) use ($movie) {
                    return [
                        'user_id' => $user->id,
                        'rating' => rand(1, 5),
                        'comment' => $this->generateRandomReview(),
                    ];
                })->toArray()
            );
        });

        // Create some favorite relationships between users and movies
        foreach ($users as $user) {
            // Get some random movies
            $movies = Movie::inRandomOrder()->take(rand(3, 5))->get();
            foreach ($movies as $movie) {
                Favorite::create([
                    'user_id' => $user->id,
                    'movie_id' => $movie->id,
                ]);
            }
        }
        // Create some favorite relationships between users and movies
        foreach ($users as $user) {
            // Get some random movies
            $movies = Movie::inRandomOrder()->take(rand(3, 5))->get();
            foreach ($movies as $movie) {
                Favorite::create([
                    'user_id' => $user->id,
                    'movie_id' => $movie->id,
                ]);
            }
        }

        // Create some tickets for users and movies
        foreach ($users as $user) {
            // Get some random movies
            $movies = Movie::inRandomOrder()->take(rand(3, 5))->get();
            foreach ($movies as $movie) {
                DB::table('tickets')->insert([
                    'user_id' => $user->id,
                    'movie_id' => $movie->id,
                    'show_time' => now()->addDays(rand(1, 30))->addHours(rand(0, 23))->addMinutes(rand(0, 59)),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }

    private function generateRandomReview()
    {
        $reviews = [
            'Great movie, I really enjoyed it!',
            'It was okay, but could have been better.',
            'Did not like it at all.',
            'An absolute masterpiece! Highly recommend.',
            'It was too long and boring.',
        ];

        return $reviews[array_rand($reviews)];
    }
}
