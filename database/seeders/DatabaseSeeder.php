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
        User::truncate();
        Category::truncate();
        Post::truncate();
        $user = User::factory()->create();

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);
        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);
        Post::create([
            'user_id' => $user->id,
            'title' => 'My Family Post',
            'excerpt' => 'Excerpt for my post',
            'body' =>  '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur odio ut incidunt est corrupti officia illo deserunt delectus perferendis, facilis voluptatum sapiente, nobis quas vel repellat? Reprehenderit distinctio voluptatibus illum!</p>',
            'slug' => 'my-family-post',
            'category_id' => $family->id
        ]);
        Post::create([
            'user_id' => $user->id,
            'title' => 'My Personal Post',
            'excerpt' => 'Excerpt for my post',
            'body' =>  '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur odio ut incidunt est corrupti officia illo deserunt delectus perferendis, facilis voluptatum sapiente, nobis quas vel repellat? Reprehenderit distinctio voluptatibus illum!</p>',
            'slug' => 'my-personal-post',
            'category_id' => $personal->id
        ]);
        
        Post::create([
            'user_id' => $user->id,
            'title' => 'My Work Post',
            'excerpt' => 'Excerpt for my post',
            'body' =>  '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur odio ut incidunt est corrupti officia illo deserunt delectus perferendis, facilis voluptatum sapiente, nobis quas vel repellat? Reprehenderit distinctio voluptatibus illum!</p>',
            'slug' => 'my-work-post',
            'category_id' => $work->id
        ]);
    }
}
