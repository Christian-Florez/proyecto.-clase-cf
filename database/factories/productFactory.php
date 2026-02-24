<?php

namespace Database\Factories;

use App\Models\category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\product>
 */
class productFactory extends Factory
{
    protected $model = \App\Models\product::class;
    public function definition(): array
    {
        $name = fake()->words(3, asText: true);

        return [
            'name' => ucfirst($name),
            'slug' => \Illuminate\Support\Str::slug($name),
            'description' => fake()->paragraph(),
            'price' => fake()->randomFloat(nbMaxDecimals: 2, min: 100, max: 100000),
            'category_id' => category::inRandomOrder()->first()->id,
        ];
    }
}
