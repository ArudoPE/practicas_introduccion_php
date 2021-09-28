<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning PHP :3</title>
</head>
<body>
    <?php
    /**
     * We can also include php files inside another php file
     */
    // $title = "My First Post";
    // $author = "Aldo";
    // $wordCount = 250;
    // include "article-header.php";
    include "useful-tools.php";
    sayHi("Aldo");
    echo "<br> $feetInMile";
    ?>
</body>
</html>