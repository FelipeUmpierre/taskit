<?php

use Illuminate\Database\Seeder;

class TaskChecklistItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('task_checklist_items')->truncate();

        $faker = Faker\Factory::create();

        for ($i = 0; $i < 3; $i++) {
            $taskChecklistItems = App\TaskChecklistItem::create([
                'item' => $faker->sentence
            ]);

            $taskChecklistItems->checklist()->associate(App\TaskChecklist::find(1));
            $taskChecklistItems->save();
        }
    }
}
