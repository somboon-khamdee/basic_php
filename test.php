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
    <h1>Array Colors</h1>
    <?php
    $unit_price = 72; //ตั้งราคา ต่อกิโลกรัม (บาท)
    $discount_unit_price = 69; // ราคาตามโปรโมชั่น
    $discount_price = ($unit_price - $discount_unit_price); //ราคาที่ลดให้ (บาท)
    $unit_discount = 2;     // ลดราคาเมื่อซื้อครบตามจำนวน (กิโลกรัม)

    //กำหนดให้ลูกค้าซื้อหอยแครงไปทั้งหมด 2.22 กิโลกรัม
    $total_weigth = isset($_POST['product_weight']) ? $_POST['product_weight'] : 2.22;

    $price = ($total_weigth * $unit_price);                    //ราคารวมทั้งหมด
    $promotion_unit = floor($total_weigth / $unit_discount);    //จำนวนที่ตรงกับโปรโมชั่น
    $discount_weigth = ($promotion_unit * $unit_discount);    //จำนวนน้ำหนักที่จะลดราคา
    $promotion_discount = ($discount_weigth * $discount_price);    //หาราคาที่มีส่วนลด เมื่อครบ 2 กิโลกรัม

    $normal_weight = ($total_weigth - $discount_weigth);    // หาน้ำหนักสินค้า ที่ไม่อยู่ในโปรโมชั่น
    $normal_price = ($normal_weight * $unit_price);            // น้ำหนักส่วนที่คิดราคาปกติ

    $price_in_discount = ($promotion_unit * $unit_discount) * $discount_unit_price; //ราคาที่อยู่ในโปรโมชั่น

    $total_price = ($price - $promotion_discount);            // คำนวณราคา ปกติ - ส่วนลด
    ?>
</body>

</html>