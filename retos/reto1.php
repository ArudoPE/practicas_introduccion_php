<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/style.css">
    <title>Retos!</title>
</head>
<body>
    <header class="header">
        <div class="header-spacer"></div>
    </header>
    <main class="main">
        <div class="main-title--container">
            <h1>Retos PHP: Parte 1</h1>
        </div>
        <section class="main-challenges--container">
            <div class="box">
                <h3>Reto 1: Hola Mundo</h3>
                <?php
                echo "Hola Mundo!"
                ?>
            </div>
            <div class="box">
                <h3>Reto 2: Hola... nombre y apellido</h3>
                <div class="main-form--container">
                    <form action="" method="POST" class="main-form">
                        <div class="input--container">
                            <span>Ingresar Nombre:</span>
                            <input type="text" name="name1" id="name1">
                        </div>
                        <div class="input--container">
                            <span>Ingresar Apellido:</span>
                            <input type="text" name="lastName1" id="lastName1">
                        </div>
                        <input type="submit" name="submit1" value="Calcular"></input>
                    </form>
                </div>
                <?php
                if(isset($_POST["submit1"]) && !empty($_POST["submit1"])){
                    $name1 = $_POST["name1"];
                    $lastName1 = $_POST["lastName1"];
                    echo "Hola, " . $name1 . " " . $lastName1 . ".</b>";
                }
                ?>
            </div>
            <div class="box">
                <h3>Reto 3: Imprimir un mensaje de 6 categorías</h3>
                <?php
                $count = 0;
                $courses = ["Math", "Science", "Geography", "Art", "English", "Music"];
                echo "We have these courses:" . "<br/>";
                while ($count<6) {
                    echo $courses[$count] . "<br/>";
                    $count++;
                }
                ?>
            </div>
            <div class="box">
                <h3>Reto 4: Suma de enteros con redondeo a dos decimales:</h3>
                <div class="main-form--container">
                    <form action="" method="POST" class="main-form">
                        <div class="input--container">
                            <span>Ingresar primer número:</span>
                            <input type="number" name="number1" id="number1" step="any">
                        </div>
                        <div class="input--container">
                            <span>Ingresar segundo número:</span>
                            <input type="number" name="number2" id="number2" step="any">
                        </div>
                        <input type="submit" name="submit2" value="Calcular"></input>
                    </form>
                </div>
                <?php
                if(isset($_POST["submit2"]) && !empty($_POST["submit2"])){
                    $number1 = $_POST["number1"];
                    $number2 = $_POST["number2"];
                    $sum1Result = $number1 + $number2;
                    echo $number1 . " + " . $number2 . " = " . round($sum1Result, 2);
                }
                ?>
            </div>
            <div class="box">
                <h3>Reto 5: Suma y Multiplicación, con redondeo de resultado</h3>
                <div class="main-form--container">
                    <form action="" method="POST" class="main-form">
                        <div class="input--container">
                            <span>Ingresar primer número:</span>
                            <input type="number" name="number3" id="number3" step="any">
                        </div>
                        <div class="input--container">
                            <span>Ingresar segundo número:</span>
                            <input type="number" name="number4" id="number4" step="any">
                        </div>
                        <div class="input--container">
                            <span>Ingresar tercer número:</span>
                            <input type="number" name="number5" id="number5" step="any">
                        </div>
                        <input type="submit" name="submit3" value="Calcular"></input>
                    </form>
                </div>
                <?php
                if(isset($_POST["submit3"]) && !empty($_POST["submit3"])){
                    $number3 = $_POST["number3"];
                    $number4 = $_POST["number4"];
                    $number5 = $_POST["number5"];
                    $sum2Result = ($number3 + $number4) * $number5;
                    echo "(" . $number3 . " + " . $number4 . ") * " . $number5 . " = " . round($sum2Result);
                }
                ?>
            </div>
            <div class="box">
                <div class="main-title--container">
                <h3>Reto 6: Resta de Pizzas</h3>
                </div>
                <div class="main-form--container">
                    <form action="" method="POST" class="main-form">
                        <div class="input--container">
                            <span>Ingresar rebanadas de pizza iniciales:</span>
                            <input type="number" name="number6" id="number6">
                        </div>
                        <div class="input--container">
                            <span>Ingresar rebanadas consumidas:</span>
                            <input type="number" name="number7" id="number7">
                        </div>
                        <input type="submit" name="submit4" value="Calcular"></input>
                    </form>
                </div>
            <?php
                if(isset($_POST["submit4"]) && !empty($_POST["submit4"])){
                    $number6 = $_POST["number6"];
                    $number7 = $_POST["number7"];
                    if($number6<$number7) {
                        echo "Hey, no puedes comer más rebanadas de las que trajiste, vuelve a intentarlo :).";
                    }
                    else {
                        $slicesLeft = $number6 - $number7;
                        echo "Tenías " . $number6 . " rebanada(s), y consumiste " . $number7 . ". Ahora solo te quedan: " . $slicesLeft . " rebanada(s).";
                    }
                }
            ?>
            </div>
            <div class="box">
                <h3>Reto 7: Edad futura y pasada!</h3>
                <div class="main-form--container">
                    <form action="" method="POST" class="main-form">
                        <div class="input--container">
                            <span>Ingresar Nombre:</span>
                            <input type="text" name="name2" id="name2">
                        </div>
                        <div class="input--container">
                            <span>Ingresar edad actual:</span>
                            <input type="number" name="age1" id="age1">
                        </div>
                        <input type="submit" name="submit5" value="Calcular"></input>
                    </form>
                </div>
                <?php
                if(isset($_POST["submit5"]) && !empty($_POST["submit5"])){
                    $name2 = $_POST["name2"];
                    $age1 = $_POST["age1"];
                    if($age1-1===0) {
                        echo $name2 . ", el año pasado tenías 0 años, y el próximo año
                        tendrás 2 años.";
                    }
                    else {
                        echo $name2 . ", el año pasado tenías " . ($age1 - 1) . " años, y el próximo año
                        tendrás " . ($age1 + 1) . " años.";
                    }
                }
                ?>
            </div>
            <div class="box">
                <h3>Reto 8: Divide la cuenta!</h3>
                <div class="main-form--container">
                    <form action="" method="POST" class="main-form">
                        <div class="input--container">
                            <span>Ingresar total a pagar:</span>
                            <input type="number" name="number8" id="number8" step="any">
                        </div>
                        <div class="input--container">
                            <span>¿Entre cuántas personas pagarán?</span>
                            <input type="number" name="number9" id="number9">
                        </div>
                        <div class="input--container">
                            <span>¿Cuánto porcentaje de propina dejarán?</span>
                            <input type="number" name="number10" id="number10">
                        </div>
                        <div class="input--container">
                            <span>¿Cuánto es el porcentaje de impuestos?</span>
                            <input type="number" name="number11" id="number11">
                        </div>
                        <input type="submit" name="submit6" value="Calcular"></input>
                    </form>
                </div>
                <?php
                if(isset($_POST["submit6"]) && !empty($_POST["submit6"])){
                    $number8 = $_POST["number8"];
                    $number9 = $_POST["number9"];
                    $number10 = $_POST["number10"];
                    $number11 = $_POST["number11"];
                    $finalPrice = ((($number11+100)/100)+($number10/100))*$number8;
                    $pricePerPerson = $finalPrice/$number9;
                    echo "Cuenta total (incluyendo " . $number11 . "% de impuestos y "
                    . $number10 . "% de propina): " . $finalPrice . ".</br>";
                    echo "Cada uno pagará: " . round($pricePerPerson,1) . ".</br>";
                }
                ?>
            </div>
            <div class="box">
                <h3>Reto 9: Calculando días</h3>
                <div class="main-form--container">
                    <form action="" method="POST" class="main-form">
                        <div class="input--container">
                            <span>Ingresar cantidad de días a calcular:</span>
                            <input type="number" name="number12" id="number12">
                        </div>
                        <input type="submit" name="submit7" value="Calcular"></input>
                    </form>
            </div>
                <?php
                if(isset($_POST["submit7"]) && !empty($_POST["submit7"])){
                    $number12 = $_POST["number12"];
                    $hours = $number12*24;
                    $minutes = $hours*60;
                    $seconds= $minutes*60;
                    echo $number12 . " día(s) en horas, minutos y segundos es:</br>";
                    echo $hours . " horas, " . $minutes . " minutos o " . $seconds . " segundos.";
                }
                ?>
            </div>
            <div class="box">
                <h3>Reto 10: Conversor de millas</h3>
                <div class="main-form--container">
                    <form action="" method="POST" class="main-form">
                        <div class="input--container">
                            <span>Ingresar cantidad de millas a convertir:</span>
                            <input type="number" name="number13" id="number13">
                        </div>
                        <input type="submit" name="submit8" value="Calcular"></input>
                    </form>
            </div>
                <?php
                if(isset($_POST["submit8"]) && !empty($_POST["submit8"])){
                    $number13 = $_POST["number13"];
                    $MilesToKM = $number13 * 1.609344;
                    echo $number13 . " millas es " . $MilesToKM . " kilómetros.";
                }
                ?>
            </div>
            <div class="box">
                <h3>Reto 11: Cuántas veces un número en otro</h3>
                <div class="main-form--container">
                    <form action="" method="POST" class="main-form">
                        <div class="input--container">
                            <span>Ingresar primer número, mayor a 1000:</span>
                            <input type="number" name="number14" id="number14" min=1001>
                        </div>
                        <div class="input--container">
                            <span>Ingresar segundo número, menor a 100:</span>
                            <input type="number" name="number15" id="number15" max=99>
                        </div>
                        <input type="submit" name="submit9" value="Calcular"></input>
                    </form>
            </div>
                <?php
                if(isset($_POST["submit9"]) && !empty($_POST["submit9"])){
                    $number14 = $_POST["number14"];
                    $number15 = $_POST["number15"];
                    $howManyTimes = $number14/$number15;
                    echo "El número " . $number15 . " cabe " . floor($howManyTimes)
                    . " veces en el número " . $number14 . ".";
                }
                ?>
            </div>
        </section>
    </main>
</body>
</html>