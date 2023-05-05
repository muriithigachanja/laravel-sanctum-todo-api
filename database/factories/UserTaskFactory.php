<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Status;
use App\Models\User;
use App\Models\Task;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserTask>
 */

class UserTaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::all()->random()->id,
            'task_id' => Task::all()->random()->id,'due_date' =>  $this->faker->date(),
            'start_time' => $this->faker->date(),
            'end_time' => $this->faker->date(),
            'remarks' =>  $this->faker->text(),'status_id' => Status::all()->random()->id,
        ];
    }
}
