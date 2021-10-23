<?php

namespace Database\Factories;

use App\Models\Pricing;
use Illuminate\Database\Eloquent\Factories\Factory;

class PricingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pricing::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'       => rand(1,5),
            'title_job'       => $this->faker->name,
            'description'   => $this->faker->sentence,
            'price'         => rand(50, 1500),
            'jobs'  => 'Web Development CSS, Advetising, Game Development, Music Writing',
        ];
    }
}
