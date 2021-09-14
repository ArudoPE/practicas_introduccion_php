<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning with Freecodecamp :3</title>
</head>
<body>
    <!-- <form action="index.php" method="POST">
        <input type="submit"><br>
    </form> -->
    <?php
    /**
     *We can compare with: <, >, >=, <=
     *we can also use == or === (weak and strong comparation)
     *we can also use != (different) to compare
     */
    function getMax($num1, $num2, $num3){
        if($num1 >= $num2 && $num1 >= $num3){
            return $num1;
        } elseif($num2 >= $num1 && $num2 >= $num3){
            return $num2;
        } else {
            return $num3;
        }
    }
    echo getMax(3000, 3000, 3000);
    ?>
</body>
</html>