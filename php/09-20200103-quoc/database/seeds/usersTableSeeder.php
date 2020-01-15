<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class usersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * 
     * @return void
     */
    public function run()
    {
        $faker=Faker\Factory::create();
        for ($i=0;$i<10;$i++){
          DB::table('users')->insert(
            ['user'=> $faker->name,'email' => $faker->email,'address'=>$faker->address]
          );
        }
        //
    }
}
