<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();

        $faker = Faker\Factory::create();

        App\User::create([
            'name' => $faker->name,
            'email' => $faker->email,
            'password' => bcrypt(123)
        ]);
    }
}
