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

        $this->call(ClientSeeder::class);
        $this->call(ProjectSeeder::class);
        $this->call(TaskTypeSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(TaskSeeder::class);
        $this->call(TaskChecklistSeeder::class);
        $this->call(TaskChecklistItemSeeder::class);

        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');

        Model::reguard();
    }
}
