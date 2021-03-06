<?php

use Illuminate\Database\Seeder;

class BodytypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bodytypes')->delete();
        $bodytypes = array(
          array('id' => 1,'name' => 'Hatchback'),
          array('id' => 2,'name' => 'Sedan'),
          array('id' => 3,'name' => 'MPV'),
          array('id' => 4,'name' => 'SUV'),
          array('id' => 5,'name' => 'Crossover'),
          array('id' => 6,'name' => 'Coupe'),
          array('id' => 7,'name' => 'Convertible'),
        );
        DB::table('bodytypes')->insert($bodytypes);
    }
}
