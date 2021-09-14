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
     *only  it's gonna be executed if the content inside
     *brackets is true --> if(condition)
     *"else" only executes if the previous condition is
     *not true. The logical AND is &&
     *The logical OR is ||
     *The logical NOT is !
     */
    $isMale = false;
    $isTall = false;
    if ($isMale && $isTall){
        echo "You are tall male";
    } elseif($isMale && !$isTall){
        echo "You are a short male";
    } elseif(!$isMale && $isTall){
        echo "You are not male but are tall";
    } else {
        echo "You are not male and not tall";
    }
    ?>
</body>
</html>