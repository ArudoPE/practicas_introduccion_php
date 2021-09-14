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
        <label for="">Apples</label>
        <input type="checkbox" name="fruits[]" value="apples"><br>
        <label for="">Oranges</label>
        <input type="checkbox" name="fruits[]" value="oranges"><br>
        <label for="">Pears</label>
        <input type="checkbox" name="fruits[]" value="pears"><br>
        <input type="submit"><br>
    </form>
    <?php
    /**
     * a
     */
    $fruits = $_POST["fruits"];
    echo $fruits[1];
    ?>
</body>
</html>