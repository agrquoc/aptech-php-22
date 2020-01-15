<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class upDataActiclesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $objPHPExcel = PHPExcel_IOFactory::load(base_path('articles.xlsx')); // load file ra object PHPExcel
        $provinceSheet = $objPHPExcel->setActiveSheetIndex(0); // Set sheet sẽ được đọc dữ liệu
        $highestRow    = $provinceSheet->getHighestRow(); // Lấy số row lớn nhất trong sheet
        for ($row = 2; $row <= $highestRow; $row++) { // For chạy từ 2 vì row 1 là title
            articles::create([
                'title' => $provinceSheet->getCellByColumnAndRow(0, $row)->getValue(),
                'slug' => $provinceSheet->getCellByColumnAndRow(1, $row)->getValue(),
                'description'=>$provinceSheet->getCellByColumnAndRow(2, $row)->getValue(),
                'content'=>$provinceSheet->getCellByColumnAndRow(3, $row)->getValue()
            ]);
            }

    }
}
