<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Status::factory()->create([
            'name' => 'Not Started'
        ]);
         \App\Models\Status::factory()->create([
            'name' => 'In Progress'
        ]);
         \App\Models\Status::factory()->create([
            'name' => 'Complete'
        ]);
         \App\Models\Status::factory()->create([
            'name' => 'Waiting for review'
        ]);
    }
}
