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
    $dice1 = rand(1, 6);
    $dice2 = rand(1, 6);
    $dice3 = rand(1, 6);
    $total = $dice1+$dice2+$dice3;
    echo $total;

    if ($total = 3) {
        echo " Low.";
    }
    elseif ($total = 10) {
        echo " Medium.";
    }
    elseif ($total = 12) {
        echo " High.";
    }
    else {
        echo "Error.";
    }
    ?>
</body>

</html>