<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\FeedbackModel;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FeedbackModel>
 */
class FeedbackModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = FeedbackModel::class;

    public function definition(): array
    {
        return [
            'feedback_email_sender' => $this->faker->safeEmail(),
            'feedback_user_sender' => $this->faker->numberBetween(1,10),
            'feedback_comment' => $this->faker->randomElement(['Very good website','Nice Database Management','Try Again!'])
        ];
    }
}
