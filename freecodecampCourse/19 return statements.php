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
     *Function with return
     *when "return" happens, it breaks out of the function
     *that's why "hello" is not printed after the return
     */
    function cube($num){
        return $num * $num * $num;
        echo "Hello";
    }

    echo cube(4);

    ?>
</body>
</html>