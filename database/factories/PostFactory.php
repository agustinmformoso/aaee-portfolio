<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'=> rand(1,5),
            'title'   => $this->faker->sentence,
            'image'   => $this->faker->randomElement((['b-2.png', 'b-1.png', 'b-3.png'])),
            'content'   => $this->faker->text,
            'date'   => $this->faker->date,
            'user'   => $this->faker->word,
            'url'   => '#',
        ];
    }
}
