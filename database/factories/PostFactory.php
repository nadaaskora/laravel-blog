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
    // protected $model = Post::class;
    protected $model = \App\Models\Post::class;


    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            // 'title' => $faker->sentence(6),
            // 'description' => $faker->realText(300),
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->text(200)
        ];
    }
}
