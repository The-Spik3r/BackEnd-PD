<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    
    <?php
    $usuario = $_POST ["usuario"];
    $contrasenia = $_POST ["pass"];

    $checkU = "admin";
    $checkC = 123;

    if ($usuario == $checkU && $contrasenia ==$checkC) {
        header("location: https://www.google.com/");
    } else {
        echo "su contraseña no coincide";
        header("location: https://www.youtube.com");
    }  


    ?>
</body>
</html>