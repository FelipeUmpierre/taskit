<?php

use Illuminate\Database\Seeder;

class TaskTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('task_types')->truncate();

        $faker = Faker\Factory::create();

        App\TaskType::create([
            'name' => $faker->title,
        ]);
    }
}
