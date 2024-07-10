<?php

namespace Database\Seeders;

use App\Models\Todo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeederTodo extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Todo::factory(5)->create();
        // Todo::factory()->create([
        //     'item' => 'hello',
        //     'isCompleted' => true,
        //     'user_id' => 2
        // ]);
    }
}
