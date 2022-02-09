<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // $user = User::factory()->create([
        //     'name' => 'John Doe'
        // ]);

        // Post::factory(5)->create([
        //     'user_id' => $user->id
        // ]);

        // nice solution from comments https://laracasts.com/series/laravel-8-from-scratch/episodes/28
        $users = User::factory(3)->create();
        $categories = Category::factory(3)->create();

        Post::factory(4)->create(fn() => [
            'user_id' => $users->random(),
            'category_id' => $categories->random()
        ]);
    }
}
