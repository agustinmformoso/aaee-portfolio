<?php

namespace Database\Factories;

use App\Models\Rrss;
use Illuminate\Database\Eloquent\Factories\Factory;

class RrssFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Rrss::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'     => rand(1,5),
            'icon' => $this->faker->randomElement((['fa fa-facebook', 'fa fa-twitter', 'fa fa-github', 'fa fa-dribbble'])),
            'url' => '#',
        ];
    }
}
