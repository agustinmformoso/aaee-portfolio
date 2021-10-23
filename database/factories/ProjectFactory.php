<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Project::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'     => rand(1,5),
            'category' => $this->faker->name,
            'image' => 'p-2.png',
            'name' => $this->faker->name,
            'caption' => $this->faker->name,
            'description' => $this->faker->text,
            'quote' => $this->faker->sentence,
            'author' => $this->faker->name,
        ];
    }
}
