<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retos</title>
</head>
<body>
    <div class="challenge-box">
    <form action="index.php" method="post">
        <label for="">Ingresar edad:</label><br>
        <input type="number" name="age" id="">
        <button type="submit">Validar</button>
    </form>
    <?php
    function ageValidation($age)
    {
        if($age < 5) {
            return "la parte inferior de la bodega.";
        } else if ($age >= 5 && $age <= 7) {
            return "la parte media de la bodega.";
        } else if ($age > 7){
            return "la parte alta de la bodega.";
        } else {
            return "la bodega de al lado.";
        }
    }
    $studentAge = $_POST["age"];
    echo "El estudiante con $studentAge años, tendrá sus juguetes en " . ageValidation($studentAge);
    ?>
    </div>
    <div class="challenge-box" style="margin-top: 20px;">
    <form action="index.php" method="post">
        <label for="">Ingresar tamaño deseado del árbol de navidad:</label><br>
        <input type="number" name="treeSize" id="">
        <button type="submit">Generar árbol</button>
    </form>
    <?php
    function treeGenerator($treeSize)
    {
        $blankSpaces = $treeSize;
        $asterisks = 1;
        for($i = 0; $i<$treeSize; $i++){
            for($j = 0; $j< ($blankSpaces - 1); $j++) {
                echo '&nbsp';
            }
            for($k = 0; $k<$asterisks; $k++){
                echo "*";
            }
            echo "<br>";
            $asterisks++;
            $blankSpaces--;
        }
    }
    $treeSize = $_POST["treeSize"];
    echo "Árbol generado de tamaño: $treeSize<br><br>";
    treeGenerator($treeSize);
    ?>
    </div>
</body>
</html>