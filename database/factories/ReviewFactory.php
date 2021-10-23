<?php

namespace Database\Factories;

use App\Models\Review;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Review::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'     => rand(1,5),
            'quote' => $this->faker->sentence,
            'author' => $this->faker->name,
            'image' => 'c-1.png',
            'title_job' => $this->faker->word,
        ];
    }
}
