<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $listCategory = ['Web Programming', 'Networking'];
        $name = $this->faker->unique()->randomElement($listCategory);
        $slug = Str::slug($name, '-');
        return [
            'name' => $name,
            'slug' => $slug
        ];
    }
}
