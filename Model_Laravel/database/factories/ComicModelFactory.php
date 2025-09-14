<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\ComicModel;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ComicModel>
 */
class ComicModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = ComicModel::class;

    public function definition(): array
    {
        return [
            'comic_title' => $this->faker->name(),
            'comic_price' => $this->faker->numberBetween(1000,300000),
            'comic_writer' => $this->faker->numberBetween(1,10),
            'genre' => $this->faker->randomElement(['Sci-Fi','Romance','Jihad']),
            'comic_release_date' => $this->faker->date(),
            'comic_comment' => $this->faker->randomElement(['Nice romance story~','Booooom','IDK']),
            'comic_page' =>$this->faker->numberBetween(1000,300000)
        ];
    }
}
