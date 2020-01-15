<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class acticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $title='afhjajkhakfhakjfhjakhfjkahfajk';
        $plug='hjhjkfahfkahfjkahfjkahfjkagmail.com';
        $desc='hhfjkahfkjahfjkahfjkahahahlkfhajkhfakhfkjhjkfh';
        $conte='kfjkahfjkahfkahfjkahfkaf';
        DB::table('acticles')->insert(
          ['title' => $title,'slug' => $plug,'description'=>$desc,'content'=>$conte]
        );
    }
}