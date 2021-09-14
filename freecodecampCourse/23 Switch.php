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
        <label for="grade">What was your grade?</label><br>
        <input type="text" name="grade" id="grade"><br>
        <input type="submit">
    </form>
    <?php
    /**
     *
     */
    $grade = $_POST["grade"];
    switch($grade){
        case "A":
            echo "You did amazing!";
            break;
        case "B":
            echo "You did pretty good";
            break;
        case "C":
            echo "You did poorly";
            break;
        case "D":
            echo "You did very bad";
            break;
        case "F":
            echo "YOU FAIL!";
            break;
        default:
            echo "Invalid Grade";
    }
    ?>
</body>
</html>