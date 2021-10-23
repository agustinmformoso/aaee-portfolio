<?php

namespace Database\Factories;

use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Service::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'     => rand(1,5),
            'icon' => $this->faker->randomElement((['fa fa-bullseye purple-color', 'fa fa-code iron-color', 'fa fa-object-ungroup sky-color'])),
            'name' => $this->faker->name,
            'description' => $this->faker->text,
        ];
    }
}
