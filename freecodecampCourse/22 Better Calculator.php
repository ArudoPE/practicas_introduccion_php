<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning with Freecodecamp :3</title>
</head>
<body>
    <form action="index.php" method="POST">
        <label for="num1">First Number: </label> <br>
        <input type="number" name="num1" step="any" id="num1"> <br>
        <label for="op">Operator : </label> <br>
        <input type="text" name="op" id="op"> <br>
        <label for="num2">Second Number: </label> <br>
        <input type="number" name="num2" id="num2" step="any"> <br>
        <input type="submit">
    </form>
    <?php
    /**
     *
     */
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $op = $_POST["op"];

    if($op == "+"){
        echo $num1 + $num2;
    } elseif($op == "-"){
        echo $num1 - $num2;
    } elseif($op == "*"){
    echo $num1 * $num2;
    } elseif($op == "/"){
    echo $num1 / $num2;
    } else {
        echo "Invalid Operator";
    }
    ?>
</body>
</html>