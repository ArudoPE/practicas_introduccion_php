<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning with Freecodecamp :3</title>
</head>
<body>
    <?php
    /**
     * An Array can store more than 1 piece of information
     * And it can be declared in two ways:
     * $friends = array("value1", "value2", "value3");
     * $friends = ["value1", "value2", "value3"];
     * You can do extra items, telling the index
     * count($array) = 5, It says there's 5 elements
     */
    $friends = array("Kevin", "Karen", "Oscar", "Jim");
    $friends[1] = "Dwight";
    $friends[4] = "Angela";
    echo $friends[1];
    echo "<br>";
    echo count($friends);
    ?>
</body>
</html>