<?php

use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->truncate();

        $faker = Faker\Factory::create();

        App\Client::create([
            'name' => $faker->company,
        ]);
    }
}
