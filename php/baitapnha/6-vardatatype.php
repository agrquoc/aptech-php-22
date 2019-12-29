<?php
    echo "<h1>6.variables style</h1>";
    // Chú ý khai báo biến trong
    // local
    // global
    // static
    // Kiểu dữ liệu của biến
    // String: chuỗi
    // Integer: Số nguyên
    // Float (floating point numbers - also called double): số thực
    // Boolean: Đúng, sai
    // Array:mảng
    // Object: đối tượng
    // NULL: rỗng
    // Resource: nguồn
    echo "bài này chú trọng vấn đề sau: local, global, static";
    echo "Dữ liệu kiểu mảng, ví dụ:";
    $Name ="Trịnh Việt Quốc";
    echo "Họ tên nhân viên:".$Name ."<br>";
    $age= 19;
    echo "Tuổi của bạn là:".$age . "<br>";
    $giatien = 17.979;
    echo $giatien;
    $arr = array(1,"ahcho",'jff','Nam');
    print_r($arr)  ;
    echo "<br>";
    echo $arr[0]."<br>";
    echo $arr[1]."<br>";
    $age = array("quoc"=>"35", "Huy"=>"37", "rom"=>"43");
    echo $age['quoc'] ."<br>";
    $tensanpham = [
        "iphone11"=>[
            "name" =>"Iphone 11",
            "Price" =>99.4
        ],
        "samsung"=>[
            "name" =>"samsung",
            "Price" =>94.4,
        ]
    ];
    $keymangtensp= array_keys($tensanpham);
    var_dump ($keymangtensp);
    echo $keymangtensp[0];
    $sanpham =array( ["iphone11",99,15],["samsung",70,12]);
    echo "tên sản phẩm 1".$sanpham[0][0];

?>