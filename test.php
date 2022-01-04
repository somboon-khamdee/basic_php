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
    echo "เช็คการกรอกราคาสินค้า<br>";
    if(isset($_POST['btn0']))
    {
       $price = $_POST['price'];
       $checks = check_price($price);
    }
    function check_price($price)
    {
        if($price < 0)
        {
            return $checks = "กรอกข้อมูลไม่ถูกต้อง";
        }
        else
        {
            return $checks = "กรอกข้อมูลถูกต้อง";
        }
    }
    ?>

    <form method="POST">
        <input type="Text" name="price">
        <input type="Submit" name="btn0" value="Check">
    </form>
    
    <?php
    echo "<br>".$checks;
    ?>
</body>

</html>