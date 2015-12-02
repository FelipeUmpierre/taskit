<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');

        $faker = Faker\Factory::create();

        // ------------------------
        // Client
        // ------------------------
        $client = App\Client::create([
            'name' => $faker->company,
        ]);


        // ------------------------
        // Project
        // ------------------------
        $project = App\Project::create([
            'name' => $faker->city,
        ]);

        $project->client()->associate($client);
        $project->save();


        // ------------------------
        // Task Type
        // ------------------------
        $taskType = App\TaskType::create([
            'name' => $faker->monthName,
        ]);


        // ------------------------
        // User
        // ------------------------
        $user = App\User::create([
            'name' => $faker->name,
            'email' => $faker->email,
        ]);


        // ------------------------
        // Task
        // ------------------------
        $tasks = App\Task::create([
            'title' => $faker->sentence,
            'description' => $faker->sentence,
        ]);

        $tasks->project()->associate($project);
        $tasks->user()->associate($user);
        $tasks->taskType()->associate($taskType);
        $tasks->save();


        // ------------------------
        // Task Checklist
        // ------------------------
        $taskChecklist = App\TaskChecklist::create([
            'title' => $faker->sentence,
        ]);

        $taskChecklist->task()->associate($tasks);
        $taskChecklist->save();


        // ------------------------
        // Task Checklist Item
        // ------------------------
        for ($i = 0; $i < 3; $i++) {
            $taskChecklistItems = App\TaskChecklistItem::create([
                'item' => $faker->sentence
            ]);

            $taskChecklistItems->checklist()->associate($taskChecklist);
            $taskChecklistItems->save();
        }


        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');

        Model::reguard();
    }
}
