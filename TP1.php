<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hola mundo</h1>
    <?php
        $Saludo = "Hola mundo";
        echo $Saludo. "<br>";

        $num1 = 10;
        $num2 = 5;

        $suma = $num1 + $num2 ;
        echo "La suma es: " . $suma . "<br>";

        $resta = $num1 - $num2;
        echo "La resta es: " . $resta . "<br>";

        $multiplicacion = $num1 * $num2;
        echo "La multiplicación es: " . $multiplicacion . "<br>";

        $division = $num1 / $num2;
        echo "La división es: " . $division . "<br>";

        $resto = $num1 % $num2;
        echo "El resto de la división es: " . $resto . "<br>";

        $celsius = 20;
        $fahrenheit = ($celsius * 9/5) + 32;
       
        $base = 18;
        $altura = 12;

        $perimetro = 2 * ($base + $altura);
        echo "El perímetro del rectángulo es: " . $perimetro . "cm<br>";

        $area = $base * $altura;
        echo "El área del rectángulo es: " . $area . "cm²<br>";

        $radio = 30;
        
        $perimetro_circulo = 2 * pi() * $radio;
        echo "El perímetro del círculo es: " . $perimetro_circulo . "cm<br>";

        $area_circulo = pi() * pow($radio, 2);
        echo "El área del círculo es: " . $area_circulo . "cm²<br>";
        $exito = "sin miedo al exito gg";
        print $exito;
    ?>
</body>
</html>