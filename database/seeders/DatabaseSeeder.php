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
        User::truncate();
        Post::truncate();
        Category::truncate();

        $user = User::factory()->create();

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);

        $hobbies = Category::create([
            'name' => 'Hobbies',
            'slug' => 'hobbies'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $personal->id,
            'title' => 'My First Post',
            'slug' => 'my-first-post',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nunc lobortis mattis aliquam faucibus purus in massa tempor nec. Nibh ipsum consequat nisl vel pretium lectus quam. Rhoncus est pellentesque elit ullamcorper dignissim cras tincidunt lobortis. At risus viverra adipiscing at in tellus integer feugiat. Rhoncus urna neque viverra justo nec ultrices dui sapien. A iaculis at erat pellentesque adipiscing commodo elit. Proin fermentum leo vel orci porta non pulvinar. Varius morbi enim nunc faucibus a pellentesque sit amet porttitor. At tempor commodo ullamcorper a lacus vestibulum sed arcu non. Quam viverra orci sagittis eu volutpat. Ultrices in iaculis nunc sed. Arcu bibendum at varius vel pharetra vel turpis. Neque laoreet suspendisse interdum consectetur libero id faucibus nisl tincidunt. Odio tempor orci dapibus ultrices in iaculis nunc.</p>'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $hobbies->id,
            'title' => 'My Hobby Post',
            'slug' => 'my-hobby-post',
            'excerpt' => 'Placerat in egestas erat imperdiet.',
            'body' => '<p>Placerat in egestas erat imperdiet. Sollicitudin aliquam ultrices sagittis orci. Amet justo donec enim diam vulputate ut pharetra. Donec ultrices tincidunt arcu non sodales neque sodales ut etiam. Aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque habitant morbi. Quam lacus suspendisse faucibus interdum posuere lorem ipsum. Et malesuada fames ac turpis. Leo vel orci porta non pulvinar. Viverra tellus in hac habitasse platea dictumst vestibulum rhoncus. Sed cras ornare arcu dui.</p>'
        ]);
    }
}
