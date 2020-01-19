<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 5; $i++) {
            $name = $faker->name;
            DB::table('posts')->insert([
                'title' =>$name,
                'slug' => str_slug($name,'-'),
                'image' => $faker->image,
                'description' => 'fkjakajkjafkljafljafkljalfjalfjalfjaljfalkjfaljfkaljfalkjfalkjfalkjflkajfklajfklajfklaj',
                'content' => 'fkjakajkjafkljafljafkljalfjalfjalfjaljfalkjfaljfkaljfalkjfalkjfalkjflkajfklajfklajfklaj'
                
            ]);
        }
    }
}
