<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>:: PHP Function ::</title>
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
        echo"===============is_numberic===============<br>";
        $num1 = 1545000;
        $num2 = "125000";
        $num3 = "Mr.AongBoon07";
        echo"num1 = ".is_numeric($num1)."<br>";
        echo"num2 = ".is_numeric($num2)."<br>";
        echo"num3 = ".is_numeric($num3)."<br>";
        echo"===============is_numberic===============<br>";
        echo"round 4.7 = ".round(4.7)."<br>";
        echo"ceil 4.7 = ".ceil(4.7)."<br>";
        echo"floor 4.7 = ".floor(4.7)."<br>";
        echo"===============is_numberic===============<br>";
        echo"min (4,7,8,3,5,2) = ".min(4,7,8,3,5,2)."<br>";
        echo"max (4,7,8,3,5,2) = ".max(4,7,8,3,5,2)."<br>";
        echo"===============is_numberic===============<br>";
        echo"rand (1, 45) = ".rand(1, 45)."<br>";
        echo"===============is_null===============<br>";
        $a = null;
        echo"is_null (45) = ".is_null($a)."<br>";
        echo"===============Number_format===============<br>";
        $numf = 5000;
        echo"number_format 5000 = ".number_format($numf)."<br>";
        echo"==============trim===============<br>";
        echo"trim = ".trim(" Mr.AongBoon ")."<br>";
        echo"ltrim = ".trim(" Mr.AongBoon")."<br>";
        echo"rtrim = ".trim("Mr.AongBoon ")."<br>";
        echo"==============strtolower, strtoupper===============<br>";
        echo"strtolower (AONGBOON) = ".strtolower("AONGBOON")."<br>";
        echo"strtoupper (aongboon) = ".strtoupper("aongboon")."<br>";
        echo"==============substr===============<br>";
        $text = "AongBoon";
        echo"substr (AongBoon) = ".substr($text,4,4)."<br>";
        echo"==============substr_count===============<br>";
        $text = "AongBoon";
        echo"substr_count (AongBoon) = ".substr_count($text, "n")."<br>";
        echo"==============strlen===============<br>";
        echo"strlen (AongBoon) = ".strlen($text)."<br>";
        echo"==============MD5===============<br>";
        $passw=12345;
        echo"MD5 (12345) = ".md5($passw)."<br>";
        echo"==============Date===============<br>";
        echo"Date (d-m-y) = ".date('d-m-y')."<br>";
        echo"Date (d-m-y) = ".date('d/m/y')."<br>";
        echo"Date (d-m-y) = ".date('d-m-Y')."<br>";
        echo"Date (Thai Year) =".date("Y")+543;
    ?>