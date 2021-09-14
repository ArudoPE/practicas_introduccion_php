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
        <span>Password: </span><input type="password" name="password">
        <br>
        <input type="submit">
        <br>
    </form>
    <?php
/**
 * When I use POST as a form method, the value doesn't
 * show in URL
 * If you can show the info, we use GET
 */
        echo $_POST["password"];
    ?>
</body>
</html>