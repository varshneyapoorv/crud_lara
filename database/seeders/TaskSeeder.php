<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Task; // Import the Task model

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Task::create([
            'title' => 'Complete Task 1',
            'description' => 'add phone nuber',
            'coins_reward' => 250,
        ]);
      
        Task::create([
            'title' => 'Complete Task 2',
            'description' => 'add mail id',
            'coins_reward' => 200,
        ]);
      
        Task::create([
            'title' => 'Complete Task 3',
            'description' => 'watch video',
            'coins_reward' => 250,
        ]);
      
        Task::create([
            'title' => 'Complete Task 4',
            'description' => 'Description of Task 4',
            'coins_reward' => 250,
        ]);
      

       
            

       
        
    }
}
