<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Sir.</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@1,400&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Prompt', sans-serif;
        }
    </style>
</head>

<body>
    <?php
    function promo1($rebate1)
    {
        return $rebate1 * (3 / 100);

    }
    function promo2($rebate2)
    {
        return $rebate2 * (5 / 100);
    }
    function reback()
    {
        return;
    }
    $price1 = promo1(1000);
    $price2 = promo2(5000);
    $total1 = 1000 - $price1;
    $total2 = 5000 - $price2;
    echo"ราคา 1000 บาท<br>";
    echo"ส่วนลด 3% "."ลดราคา $price1 บาท<br>";
    echo"ราคาสุทธิ $total1 บาท<br>";
    echo"<br>ราคา 5000 บาท<br>";
    echo"ส่วนลด 5% "."ลดราคา $price2 บาท<br>";
    echo"ราคาสุทธิ $total2 บาท<br>";
    echo""
    ?>
</body>

</html>