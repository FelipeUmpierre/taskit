<?php

use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->truncate();

        $faker = Faker\Factory::create();

        $tasks = App\Task::create([
            'title' => $faker->sentence,
            'description' => $faker->sentence,
        ]);

        $tasks->project()->associate(App\Project::find(1));
        $tasks->user()->associate(App\User::find(1));
        $tasks->taskType()->associate(App\TaskType::find(1));
        $tasks->save();
    }
}
