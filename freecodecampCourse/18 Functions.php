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
        <input type="submit"><br>
    </form>
    <?php
    /**
     * With functions I can use parameters
     * when you call the function, you must pass the parameter
     */
    function sayHi($name, $age){
        echo "Hello $name, you are $age <br>";
    }
    sayHi("Mike", 40);
    sayHi("Dave", 13);
    sayHi("Oscar", 85);
    ?>
</body>
</html>