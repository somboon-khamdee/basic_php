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
        body{
            font-family: 'Prompt', sans-serif;
        }
    </style>
</head>

<body>
    <h1>Array Colors</h1>
    <?php
    $colors = array("Red" => "100", "Orange" => "200", "Yellow" => "300", "Green" => "400", "Sky" => "500", "Blue" => "600", "Purple" => "700");
    #$passnum = array("110", "220", "330", "440", "550", "660", "770");
    foreach ($colors as $colors => $passnum){
        echo "สี " . $colors . " = ", "รหัส " . $passnum . "<br>";
    }
    ?>
</body>

</html>