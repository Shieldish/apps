<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
      // Crée 100 utilisateurs
    User::factory(4)->create()->each(function ($user) {
        // Chaque utilisateur a entre 1 et 5 posts
        Post::factory(rand(1, 4))->create([
            'user_id' => $user->id,
        ]);
    });

   /*      User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]); */
    }
}
