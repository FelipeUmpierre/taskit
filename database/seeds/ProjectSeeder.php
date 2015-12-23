<?php

use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->truncate();

        $faker = Faker\Factory::create();

        $project = App\Project::create([
            'name' => $faker->title,
        ]);

        $project->client()->associate(App\Client::find(1));
        $project->save();
    }
}
