<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\category>
 */
class categoryFactory extends Factory
{
    protected $model = \App\Models\category::class;

    public function definition(): array
    {
        return [
        'name' => fake()->name(),




        ];
    }
}
