<?php

namespace Database\Factories;

use Illuminate\Support\Str;
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
        $title = $this->faker->sentence(5);
        $slug = Str::slug($title, '-');
        return [
            'title' => $title,
            'author' => $this->faker->sentence(mt_rand(2, 3)),
            'slug' => $slug,
            'excerpt' => $this->faker->paragraph(),
            'body' => $this->faker->paragraph(mt_rand(5, 10)),
            'user_id' => $this->faker->numberBetween(1, 3),
            'category_id' => mt_rand(1, 2)
        ];
    }
}
