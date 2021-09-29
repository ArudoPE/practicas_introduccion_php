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
     * A class inherit all functionality using "extends".
     * We can also overwrite an inhereit function, declaring
     * the function again.
     */
    class Chef{
        function makeChicken(){
            echo "The chef makes chicken. <br>";
        }
        function makeSalad(){
            echo "The chef makes salad. <br>";
        }
        function makeSpecialDish(){
            echo "The chef makes bbq ribs. <br>";
        }
    }

    class ItalianChef extends Chef{
        function makePasta(){
            echo "The chef makes pasta. <br>";
        }
        function makeSpecialDish(){
            echo "The chef makes chicken parm. <br>";
        }
    }

    $chef = new Chef();
    $chef->makeChicken();
    $chef->makeSpecialDish();

    $italianChef = new ItalianChef();
    $italianChef->makePasta();
    $italianChef->makeSpecialDish();
    ?>

</body>
</html>