<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ArticlesTableSeeder extends Seeder
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
            DB::table('articles')->insert([
                'title' =>$name,
                'slug' => str_slug($name,'-'),
                'description' => 'Bộ trưởng Thông tin & Truyền thông cùng Bộ trưởng Khoa học & Công nghệ vừa có cuộc gọi video đầu tiên bằng 5G trên thiết bị do Viettel sản xuất.'
            ]);
        }
    }
}
