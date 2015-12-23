<?php

use Illuminate\Database\Seeder;

class TaskChecklistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('task_checklists')->truncate();

        $faker = Faker\Factory::create();

        $taskChecklist = App\TaskChecklist::create([
            'title' => $faker->sentence,
        ]);

        $taskChecklist->task()->associate(App\Task::find(1));
        $taskChecklist->save();
    }
}
