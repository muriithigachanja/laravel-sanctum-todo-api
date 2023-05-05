<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Status;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'status_id' => Status::all()->random()->id,
            'name' => $this->faker->unique()->sentence(),
            'description' =>  $this->faker->text(),
            'due_date' =>  $this->faker->date(),
        ];
    }
}
