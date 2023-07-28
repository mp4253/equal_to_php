<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>equal to & triple equal to</title>
</head>
<body>

    <?php
    
    $num1 = 5;
    $num2 = "5";

    // Because here it triple equal to so it seeing only value not datatype.
    // Hence, so it prints both are equal number.

    if($num1 == $num2){
        echo "<b>Both are equal number.</b>";
    }
    else{
        echo "<b>Both are not equal number.</b>";
    }

    echo "<br>";

    // Because here it triple equal to so it seeing only datatype not value.
    // Hence, so it prints both are not equal number.

    if($num1 === $num2){
        echo "<b>Both are equal number.</b>";
    }
    else{
        echo "<b>Both are not equal number.</b>";
    }

    ?>
    
</body>
</html>