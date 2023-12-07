<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\User;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=>$this->faker->sentence,
            'url'=>$this->faker->url,
            'slug'=>$this->faker->slug,
            'content'=>$this->faker->paragraph,
            'user_id'=>User::all()->random(),
            'type_id'=>Category::all()->random(),
        ];
    }
}
