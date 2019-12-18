<?php
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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table border=1>
    <thead>
        <tr>
            <th>#</th>;
            <th>Name</th>;
            <th>price</th>;
        </tr>
    </thead>
    <tbody>
    <?php
    $luutong =0;
    for ($i=0;$i<count($keymangtensp);$i++){
    ?>;
        <tr>
            <th><?php echo $i+1; ?></th>
            <th>
            <?php
            echo ($tensanpham [$keymangtensp[$i]] ["name"]);
            ?>
            </th>
            <th>
            <?php
            echo ($tensanpham [$keymangtensp[$i]] ["Price"]);
            ?>;
            </th> 
        </tr>
    <?php 
    $luutong+=$tensanpham [$keymangtensp[$i]] ["Price"]?>
     <?php } ?>
     <tr>
        <th colspan ="2">Tổng</th>
        <th>
        <?php echo $luutong ?>;
        </th>
     </tr>
    </tbody>
</table>
</body>
</html>