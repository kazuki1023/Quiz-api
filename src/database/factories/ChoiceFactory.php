<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Quiz;
use App\Models\Choice;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Choice>
 */
class ChoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Choice::class;
    public function definition(): array
    {
        return [
            'quiz_id' => Quiz::factory(),
            'answer' => $this->faker->word,
            'valid' => $this->faker->numberBetween(0, 1),
        ];
    }
}
