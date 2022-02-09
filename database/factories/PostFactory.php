<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $users = User::all();
        $user = $users->isEmpty() ? User::factory() : $users->random();

        $categories = Category::all();
        $category = $categories->isEmpty() ? Category::factory() : $categories->random();

        return [
            'user_id' => $user, //User::factory(),
            'category_id' => $category, //Category::factory(),
            'slug' => $this->faker->slug(),
            'title' => $this->faker->sentence(),
            'excerpt' => '<p>' . join('</p><p>', $this->faker->paragraphs(2)) . '</p>',
            'body' => '<p>' . join('</p><p>', $this->faker->paragraphs(6)) . '</p>'
        ];
    }
}
