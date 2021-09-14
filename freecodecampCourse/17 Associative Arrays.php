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
        <input type="text" name="student">
        <input type="submit"><br>
    </form>
    <?php
    /**
     * I can access the index by the key, insted of
     * $grades[0]; I'm gonna use $grades["Jim"];
     * All keys must be unique
     *         $grades["Jim"] = "F";
                echo $grades["Jim"];
     */
    $grades = array(
        "Jim" => "A+",
        "Pam" => "B-",
        "Oscar" => "C+");
        echo $grades[$_POST["student"]];
    ?>
</body>
</html>