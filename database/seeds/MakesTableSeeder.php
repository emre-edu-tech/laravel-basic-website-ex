<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MakesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // first make sure that makes table is empty
        DB::table('makes')->delete();

        // prepare the records to store
        $makes = array(
            array('id' =>1 , 'name' => 'Acura' ,'slug' => 'acura', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('id' =>2 , 'name' => 'Alfa Romeo' ,'slug' => 'alfa', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('id' =>3 , 'name' => 'AMC' ,'slug' => 'amc', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('id' =>4 , 'name' => 'Aston Martin' ,'slug' => 'aston', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('id' =>5 , 'name' => 'Audi' ,'slug' => 'audi', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('id' =>6 , 'name' => 'Avanti' ,'slug' => 'avanti', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('id' =>7 , 'name' => 'Bentley' ,'slug' => 'bentl', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('id' =>8 , 'name' => 'BMW' ,'slug' => 'bmw', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('id' =>9 , 'name' => 'Buick' ,'slug' => 'buick', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('id' =>10 , 'name' => 'Cadillac' ,'slug' => 'cad', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('id' =>11 , 'name' => 'Chevrolet' ,'slug' => 'chev', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('id' =>12 , 'name' => 'Chrysler' ,'slug' => 'chry', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('id' =>13 , 'name' => 'Daewoo' ,'slug' => 'daew', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('id' =>14 , 'name' => 'Daihatsu' ,'slug' => 'daihat', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('id' =>15 , 'name' => 'Datsun' ,'slug' => 'datsun', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('id' =>16 , 'name' => 'DeLorean' ,'slug' => 'delorean', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('id' =>17 , 'name' => 'Dodge' ,'slug' => 'dodge', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('id' =>18 , 'name' => 'Eagle' ,'slug' => 'eagle', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('id' =>19 , 'name' => 'Ferrari' ,'slug' => 'fer', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('id' =>20 , 'name' => 'FIAT' ,'slug' => 'fiat', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('id' =>21 , 'name' => 'Fisker' ,'slug' => 'fisk', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('id' =>22 , 'name' => 'Ford' ,'slug' => 'ford', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('id' =>23 , 'name' => 'Freightliner' ,'slug' => 'freight', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('id' =>24 , 'name' => 'Geo' ,'slug' => 'geo', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('id' =>25 , 'name' => 'GMC' ,'slug' => 'gmc', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('id' =>26 , 'name' => 'Honda' ,'slug' => 'honda', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('id' =>27 , 'name' => 'HUMMER' ,'slug' => 'amgen', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('id' =>28 , 'name' => 'Hyundai' ,'slug' => 'hyund', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('id' =>29 , 'name' => 'Infiniti' ,'slug' => 'infin', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('id' =>30 , 'name' => 'Isuzu' ,'slug' => 'isu', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('id' =>31 , 'name' => 'Jaguar' ,'slug' => 'jag', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('id' =>32 , 'name' => 'Jeep' ,'slug' => 'jeep', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('id' =>33 , 'name' => 'Kia' ,'slug' => 'kia', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('id' =>34 , 'name' => 'Lamborghini' ,'slug' => 'lam', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('id' =>35 , 'name' => 'Lancia' ,'slug' => 'lan', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('id' =>36 , 'name' => 'Land Rover' ,'slug' => 'rov', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('id' =>37 , 'name' => 'Lexus' ,'slug' => 'lexus', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('id' =>38 , 'name' => 'Lincoln' ,'slug' => 'linc', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('id' =>39 , 'name' => 'Lotus' ,'slug' => 'lotus', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('id' =>40 , 'name' => 'Maserati' ,'slug' => 'mas', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('id' =>41 , 'name' => 'Maybach' ,'slug' => 'maybach', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('id' =>42 , 'name' => 'Mazda' ,'slug' => 'mazda', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('id' =>43 , 'name' => 'McLaren' ,'slug' => 'mclaren', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('id' =>44 , 'name' => 'Mercedes-Benz' ,'slug' => 'mb', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('id' =>45 , 'name' => 'Mercury' ,'slug' => 'merc', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('id' =>46 , 'name' => 'Merkur' ,'slug' => 'merkur', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('id' =>47 , 'name' => 'MINI' ,'slug' => 'mini', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('id' =>48 , 'name' => 'Mitsubishi' ,'slug' => 'mit', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('id' =>49 , 'name' => 'Nissan' ,'slug' => 'nissan', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('id' =>50 , 'name' => 'Oldsmobile' ,'slug' => 'olds', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('id' =>51 , 'name' => 'Peugeot' ,'slug' => 'peug', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('id' =>52 , 'name' => 'Plymouth' ,'slug' => 'plym', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('id' =>53 , 'name' => 'Pontiac' ,'slug' => 'pont', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('id' =>54 , 'name' => 'Porsche' ,'slug' => 'por', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('id' =>55 , 'name' => 'RAM' ,'slug' => 'ram', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('id' =>56 , 'name' => 'Renault' ,'slug' => 'ren', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('id' =>57 , 'name' => 'Rolls-Royce' ,'slug' => 'rr', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('id' =>58 , 'name' => 'Saab' ,'slug' => 'saab', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('id' =>59 , 'name' => 'Saturn' ,'slug' => 'saturn', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('id' =>60 , 'name' => 'Scion' ,'slug' => 'scion', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('id' =>61 , 'name' => 'smart' ,'slug' => 'smart', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('id' =>62 , 'name' => 'SRT' ,'slug' => 'srt', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('id' =>63 , 'name' => 'Sterling' ,'slug' => 'sterl', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('id' =>64 , 'name' => 'Subaru' ,'slug' => 'sub', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('id' =>65 , 'name' => 'Suzuki' ,'slug' => 'suzuki', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('id' =>66 , 'name' => 'Tesla' ,'slug' => 'tesla', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('id' =>67 , 'name' => 'Toyota' ,'slug' => 'toyota', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('id' =>68 , 'name' => 'Triumph' ,'slug' => 'tri', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('id' =>69 , 'name' => 'Volkswagen' ,'slug' => 'volks', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('id' =>70 , 'name' => 'Volvo' ,'slug' => 'volvo', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('id' =>71 , 'name' => 'Yugo' ,'slug' => 'yugo', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
          );

          DB::table('makes')->insert($makes);
    }
}
