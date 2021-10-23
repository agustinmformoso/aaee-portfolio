<?php

namespace Database\Factories;

use App\Models\WorkExperience;
use Illuminate\Database\Eloquent\Factories\Factory;

class WorkExperienceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = WorkExperience::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'     => rand(1,5),
            'title_job' => $this->faker->name,
            'name' => $this->faker->name,
            'start_date' => $this->faker->date,
            'finish_date' => $this->faker->date,
            'responsibility' => 'Validate CSS, Project Management',
        ];
    }
}
