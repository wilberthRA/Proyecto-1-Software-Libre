<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class PostFactory extends Factory
{
    protected $model = Post::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'title' => $this->faker->sentence(),
            'excerpt' => '<p>' . implode('</p><p>' , $this->faker->paragraphs(2)) . '</p>' ,
            'body' => '<p>' . implode('</p><p>' , $this->faker->paragraphs(6)) . '</p>' ,
            'slug' => $this->faker->slug(),
            'category_id' => Category::factory()
        ];
    }
}
