<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adivina las palabras</title>
</head>
<body>
    <main>
        <div class="words-list">
        <h3>Lista de palabras:</h3>
        <?php
        function wordScrambler(&$array)
        {
            for($i=0 ; $i < count($array); $i++){
                $array[$i][$j] = 0;
            }
            $array[0][1] = 'z';
        }
        $wordsList = ["taza", "framework", "temperatura"];
        wordScrambler($wordsList);
        echo "1. $wordsList[0] <br>";
        echo "2. $wordsList[1] <br>";
        echo "3. $wordsList[2] <br>";
        ?>
        </div>
        <form action="reto2.php" method="POST">
        <h3>Lista de respuestas:</h3>
            <label for="">1.</label>
            <input type="text" name="word1" id=""><br>
            <label for="">2.</label>
            <input type="text" name="word2" id=""><br>
            <label for="">3.</label>
            <input type="text" name="word3" id=""><br><br>
            <button type="submit">Enviar respuestas</button>
        </form>
    </main>
</body>
</html>