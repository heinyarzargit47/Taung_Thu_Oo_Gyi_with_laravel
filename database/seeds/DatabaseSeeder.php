<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        //$this->call(CropSeeder::class);
        $this->call(RoleTableSeeder::class);
        // $this->call(CropSeeder.php::class);

    }
}
