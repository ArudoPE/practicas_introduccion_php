<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning with Freecodecamp :3</title>
</head>
<body>
    <form action="index.php" method="get">
        <p>Name:</p><input type="text" name="username">
        <br>
        <p>Age:</p><input type="text" name="age">
        <input type="submit">
    </form>
    <br>
    <span>Your name is: </span><?php echo $_GET["username"];?>
    <br>
    <span>Your age is: </span><?php echo $_GET["age"]; ?>
</body>
</html>