<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMT FORMULA</title>
</head>
<body>
    <form action="index.php" method="POST">
        <label for="grade">Cuota inicial:</label><br>
        <input type="number" name="cuota_inicial" min="40"><br>
        <input type="submit">
    </form>
    <?php
    function pmtFormula($valor_a_financiar,$tem,$cuotas){
        $tempTem = $tem + 1;
        $cuota_mensual = ($valor_a_financiar * ($tem * (pow($tempTem,$cuotas))) / (pow($tempTem,$cuotas) - 1));
        return $cuota_mensual;
    }
    function ipmtFormula($tem, $periodo, $valor_a_financiar, $cuota_mensual) {
        $interes = $cuota_mensual + (pow((1+$tem),($periodo-1)) * ($valor_a_financiar * $tem - $cuota_mensual));
        return $interes;
    }
    function simulador($cuota_mensual,$tem,$periodo,$valor_a_financiar,$cuotas){
        for($i = 0; $i < $cuotas ; $i++){
            $interes = ipmtFormula($tem, $periodo, $valor_a_financiar, $cuota_mensual);
            echo "Periodo: $periodo<br>";
            echo "Cuota: " . round($cuota_mensual,2) . "<br>";
            echo "Interés: " . round($interes,2) . "<br>";
            $capital = $cuota_mensual - $interes;
            echo "Capital: " . round($capital,2) . "<br>";
            echo "--------------------------------------<br><br>";
            $periodo++;
        }
    }
    $capital = 1829.36;
    $cuota_inicial = $_POST["cuota_inicial"];
    $valor_a_financiar = ($capital-$cuota_inicial);
    $tea = 0.12;
    $tem = pow((1+$tea),(1/12))-1;
    $cuotas = 150;
    $periodo = 1;
    $cuota_mensual = pmtFormula($valor_a_financiar,$tem,$cuotas);
    $interes = ipmtFormula($tem, $periodo, $valor_a_financiar, $cuota_mensual);
    echo "--------------------------------------<br>";
    simulador($cuota_mensual,$tem,$periodo,$valor_a_financiar,$cuotas);
    ?>
</body>
</html>