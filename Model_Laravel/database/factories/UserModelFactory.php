<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use App\Models\UserModel;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserModel>
 */
class UserModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = UserModel::class;

    public function definition(): array
    {
        return [
            'username' => $this->faker->name(),
            'password' => Hash::make($this->faker->name()),
            'email' => $this->faker->safeEmail(),
            'address' => $this->faker->name(),
            'telephone_number' => $this->faker->unique()->numerify('08#########'),
            'role' => $this->faker->randomElement(['writer','reader']),
            'point' => $this->faker->numberBetween(1,300000),
            'photo_profile' => ""
        ];
    }
}
