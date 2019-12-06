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
        // $this->call(UsersTableSeeder::class);
        // first database seed call
        // $this->call(MakesTableSeeder::class);
        $this->call(VehicleModelsTableSeeder::class);
        // $this->call(BodytypesTableSeeder::class);
    }
}
